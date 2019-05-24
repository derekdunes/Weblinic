@extends('patient_layout')

@section('content2')
<div class="form" style="max-width: 50%;margin: 5%">
           <div class="form" style="max-width: 50%;margin: 5%">
             @foreach($users as $value) 
            <form action="/update/{{ $value->patient_id}}" method="post" enctype="multipart/form-data">
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
                   
                
                  </br>
                    <input type="radio" name="user" value="patient" checked hidden="true">
                  </br>

                  <br/>
                  </br>

                  <textarea name="email" rows=1 cols=60 id="email"> {{$value->email}} </textarea>
                  <br/>
                  </br>
                  <textarea name="address" rows=3 cols=60 id="address"> {{$value->address}} </textarea>
                  <br/>
                  </br>

                </br>
                  @endforeach
                   
                        <input type="submit" name="add_patient">
                        <input type="reset" name="Reset">
                   </br>
        </form>
      </div>
    </div>
@stop