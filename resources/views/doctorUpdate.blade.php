@extends('doctor_layout')
@section('content2')

<div class="form" style="max-width: 50%; margin: 5%">
           <div class="form" style="max-width: 50%;margin: 5%">
             @foreach($users as $value) 
            <form action="/update/{{ $value->doctor_id}}" method="post" enctype="multipart/form-data">
               {{ csrf_field() }} 
                 
                
                  <input type="text" name="username" id="username" value="{{$value->username}}">
                    </br> 
                    </br>
                    <input type="text" name="password" id="password" value="{{$value->password}}">
                    </br> 
                    </br>
                  <input type="text" name="contact_number" id="contact_number" value="{{$value->contact_number}}">
                    </br> 
                    </br>           
                  <textarea name="qualification" rows=1 cols=60 id="qualification"> {{$value->qualification}} </textarea>
                  <br/>
                  </br>

                  <textarea name="email" rows=1 cols=60 id="email"> {{$value->email}} </textarea>
                  <br/>
                  </br>
                  <textarea name="address" rows=3 cols=60 id="address"> {{$value->address}} </textarea>
                  <br/>
                  </br>
                    <p>Speciality
                  <select name="speciality" class="button1"  id="speciality" >
                        <option value="Cardiology">Cardiology</option>
                        <option value="Dentist">Dentistry</option>
                        <option value="Neurology">Neurology</option> 
                        <option value="Urology">Urology</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Dermatalogy">Dermatalogy</option>
                        <option value="Gastrology">Gastrology</option>  
                        <option value="Bone">Bone</option>
                </select></p>
                </br>
                <input type="text" name="Fees" id="fee" value="{{$value->Fees}}">
                    </br> 
                    </br>
                </br>

                <input type="radio" name="user" value="doctor" checked hidden="true">

                   @endforeach
                   
                        <input type="submit" name="add_doctor">
                        <input type="reset" name="Reset">
                   </br>
        </form>
      </div>
    </div>
    
    @stop