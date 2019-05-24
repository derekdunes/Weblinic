@extends('admin_layout')
@section('content2')

<div class="form" style="max-width: 50%;margin: 5%">
           <div class="form" style="max-width: 50%;margin: 5%">
            <form action="/add_doctor" method="post" enctype="multipart/form-data">
               {{ csrf_field() }} 
                    
                  <input type="text" name="username" id="username" placeholder="Username">
                    </br> 
                    </br>

                    <input type="password" name="password" id="password" placeholder="Password">
                    
                    </br> 
                    </br>

                    <input type="email" name="email" id="email" placeholder="Email">
                  
                  <br/>
                  </br>
                   
                  <input type="text" name="firstname" id="firstname" placeholder="first Name">
                   
                    </br> 
                    </br>           
                   
                  <input type="text" name="lastname" id="lastname" placeholder="Last Name">
                    
                    </br> 
                    </br>           
                   

                  <input type="text" name="contact_number" id="contact_number" placeholder="Contact_number">
                    </br> 
                    </br>
                
                  <input type="text" name="qualification" id="qualification"
                   placeholder="eg BSC/MSC/MBA/PHD/">
                  <br/>
                  </br>

                   <textarea name="bio" rows=3 cols=60 id="bio" placeholder="eg Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring." ></textarea>

                  <br/>
                  </br>
                  
                  <textarea name="address" rows=3 cols=60 id="address" placeholder="Enter your Address" ></textarea>
                  
                  <br/>
                  </br>
                  <p>Speciality
                    <select name="speciality" class="button1"  id="speciality">
                      <option selected>Choose a Speciality</option>
                      @foreach($specialities as $speciality)

                          <option value="{{ $speciality->name }}">{{ $speciality->name }}</option>

                      @endforeach
                  </select>
                </p>

                </br>
                </br>

                <p>Location
                  <select name="location" class="location"  id="location" >
           
                    <option selected>Choose a Location</option>
                    @foreach($locations as $location)

                        <option value="{{ $location->name }}">{{ $location->name }}</option>

                    @endforeach

                </select></p>


                </br>
                <input type="text" name="Fees" id="fee" placeholder="Fees-Naira.100">
                    </br> 
                    </br>
                </br>
                  
                   
                        <input type="submit" name="add_doctor">
                        <input type="reset" name="Reset">
                   </br>
        </form>
    @stop