@extends('layout.master')
@section('content0')
	

	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<script type="text/javascript">

		$(document).ready(function(){

			//when category option is selcted do this
		    $("select[name='category']").change(function(){
		    	
		    	//let the user select an option first
		    	//get the value of the selection
		        var selectedCategory = $(this).children("option:selected").val();
		        
		        //setup ajax token for fetching data 
		        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              	});

		        //fetch the data from the database
              	$.ajax({
              		url: '/get/specialist/'+selectedCategory,//route to fetch the data
              		type: 'GET',
              		datatype: 'json',
              		success: function(result){
              			var newResult = JSON.parse(result);

              			//create the new specialist select options
              			createOption(newResult);
              		}
              	});

		        
		        //hide every class not bearing the gotten id
		        //enable the speciality select options if it is disabled
		        if($("select[name='speciality']").is('[disabled=disabled]')){

		        	$("select[name='speciality']").attr('disabled',false);

		        }else{

		        	$("select[name='speciality']").attr('disabled',false);

		        }

		        
		    });

		    $("#button").click(function(){

		    	//get all the selected options
		    	 var selectedCategory = $("select[name='category']").children("option:selected").val();

				var selectedSpeciality = $("select[name='speciality']").children("option:selected").val();

				var selectedLocation = $("select[name='location']").children("option:selected").val();

		  		$.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              	});

              	$.ajax({
              		url: '/get/specialist/' + selectedCategory + '/' + selectedSpeciality + '/' + selectedLocation,
              		type: 'GET',
              		datatype: 'json',
              		success: function(result){
              			var newResult = JSON.parse(result);

              			createSpecialistList(newResult);
              		}
              	});

		    })

		    function createSpecialistList(result){

		    	//empty the parent div before adding new data
              	$("div[class='w3-about-grids']").empty();

              	//create left grid and right grid
              	var $leftGrid = $("<di>", {"class": "col-md-6 w3-about-right-grid"});
		    	var $rightGrid = $("<div>", {"class": "col-md-6 w3-about-right-grid"});

		    	for (var i = 0; i < result.length; i++) {

		    		// console.log(result[i].username);
		    		// console.log(result[i].qualification);
		    		// console.log(result[i].firstname);
		    		// console.log(result[i].lastname);
		    		// console.log(result[i].speciality);
		    		// console.log(result[i].location);
		    		// console.log(result[i].bio);
		    		// console.log(result[i].Fees);

		    		var $doctorName = 'Dr ' + result[i].lastname + ' ' + result[i].firstname;

		    		var $url = '/register/book/' + result[i].doctor_id;

		    		//doctor deatails parent div
		    		var $doctorDetailsParentDiv = $("<div>", {"class": "col-md-8 w3-about-right-text1"});

		    		var $qualifications = $("<h5>", {"text": result[i].qualification});
		    		var $name = $("<h4>", {"text": $doctorName});
		    		var $bio = $("<h3>", {"text": result[i].bio});
		    		var $paragraph = $("<p>");
		    		var $button = $("<button>", {"text": "Book Doctor", "class": "btn btn-primary"});
		    		
		    		$button.click(function(){
		    			//save doctors details in session and tell the user to signup/signin
		    			window.location.href = $url;

		    		});
		    		
		    		$paragraph.append($button);

		    		var $break = $("<br>");

		    		$doctorDetailsParentDiv.append($qualifications);
		    		$doctorDetailsParentDiv.append($name);
		    		$doctorDetailsParentDiv.append($bio);
		    		$doctorDetailsParentDiv.append($paragraph);
		    		$doctorDetailsParentDiv.append($break);
              		
              		//create image div parent
              		var $imageParentDiv = $("<div>", {"class": "col-md-4 w3-about-right-img1"});

              		var $image = $("<img>", {"src": "images/a11.jpg", "alt": "img" });
              		$imageParentDiv.append($image);

              		var $clearfix = $("<div>", {"class": "clearfix"});

              		//if the value is even put on the right if odd then left
              		if( i % 2 == 0){

              			$leftGrid.append($doctorDetailsParentDiv);
              			$leftGrid.append($imageParentDiv);
						$leftGrid.append($clearfix);

              		}else{

              			$rightGrid.append($doctorDetailsParentDiv);
              			$rightGrid.append($imageParentDiv);
              			$rightGrid.append($clearfix);

              		}
              		
		    	}

		    	$("div[class='w3-about-grids']").append($rightGrid);
              	$("div[class='w3-about-grids']").append($leftGrid);

		    }

		    function createOption(result){
		    	//clear the original options and start new options
		    	$("select[name='speciality']").empty();

		    	var $option = $("<option>", {"text": "Choose a Speciality"});

		    	$("select[name='speciality']").append($option);

		    	//loop through the array
		    	for (var i = result.length - 1; i >= 0; i--) {
              			
              		// console.log(result[i].id);
              		// console.log(result[i].cat_id);
              		// console.log(result[i].name);
              		// console.log(result[i].description);
              		// console.log("\n");

              		var $option = $("<option>", { value: result[i].name, "text": result[i].name});
              		
              		// $option.click(function(){
              		// 	//enable the location dropdown
              		// 	$("select[name='location']").attr('disabled',false);

              		// });

              		$("select[name='speciality']").append($option);
					              		

              	}

		    }

		    
		});

	</script>

@endsection

@section('content1')
	
						<div class="cuisine"> 
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<select name="category" id="country1" class="frm-field sect" required>
									<option value="">Choose a Category</option>
									@foreach($categories as $category)
				                  		@if( $category->active )
				                  			<option value="{{ $category->id }}">{{ $category->name }}</option>
				                  		@endif
				                  	@endforeach
								</select>
						</div>
						<br>
						<div class="cuisine"> 
							<!-- start_section_room --> 
								<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
								<select class="frm-field sect" name="speciality" id="country1" disabled required>
									<option value="">Choose a Speciality</option>
								</select>
						</div>
						<br>
						<div class="cuisine"> 
							<!-- start_section_room --> 
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
								<select  name="location" id="country1" class="frm-field sect" required>
									<option value="">Choose a Location</option>
										@foreach($locations as $location)
					                  		@if( $location->active )
					                  			<option value="{{ $location->name }}">{{ $location->name }}</option>
					                  		@endif
					                  	@endforeach
								</select>
						</div>
						<div class="date_btn"> 
							<input type="submit" value="Find A Specialist" id="button" /> 
						</div>

@endsection

@section("content2")

	<div class="w3-about about-gap" id="about">
		<div class="container">
			<div class="w3-heading-all">
				<h3>Our Experts</h3>
			</div>
		<div class="w3-about-grids">
				<div class="col-md-6 w3-about-right-grid">
						<div class="col-md-8 w3-about-right-text1">
							<h5>MBA/MSC/PHD</h5>
							<h4>Dr Bosa Emmanuel</h4>
							<h3>Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.</h3>
							<p> 
								<button type="button" class="btn btn-primary">Book Doctor</button></p><br>
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a11.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>MBA/MSC/PHD</h5>
							<h4>Dr Bosa Emmanuel</h4>
							<h3>Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.</h3>
							<p> 
								<button type="button" class="btn btn-primary">Book Doctor</button></p><br>
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a121.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>MBA/MSC/PHD</h5>
							<h4>Dr Bosa Emmanuel</h4>
							<h3>Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.</h3>
							<p> 
								<button type="button" class="btn btn-primary">Book Doctor</button></p><br>
						</div>
						<div class="col-md-4 w3-about-right-img1">
							<img src="images/a13.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
				</div>
				<div class="col-md-6 w3-about-right-grid">
						<div class="col-md-8 w3-about-right-text1">
							<h5>MBA/MSC/PHD</h5>
							<h4>Dr Bosa Emmanuel</h4>
							<h3>Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.</h3>
							<p> 
								<button type="button" class="btn btn-primary">Book Doctor</button></p><br>
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a11.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>MBA/MSC/PHD</h5>
							<h4>Dr Bosa Emmanuel</h4>
							<h3>Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.</h3>
							<p> 
								<button type="button" class="btn btn-primary">Book Doctor</button></p><br>
						</div>
						<div class="col-md-4 w3-about-right-img1">
								<img src="images/a121.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
						<div class="col-md-8 w3-about-right-text1">
							<h5>MBA/MSC/PHD</h5>
							<h4>Dr Bosa Emmanuel</h4>
							<h3>Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.</h3>
							<p> 
								<button type="button" class="btn btn-primary">Book Doctor</button></p><br>
						</div>
						<div class="col-md-4 w3-about-right-img1">
							<img src="images/a13.jpg" alt="img" />
						</div>
						<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
		</div>
		</div>
	</div>

@endsection