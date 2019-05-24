@extends('doctor_layout')
@section('content2')

@foreach($users as $value)
</br>
<p><b>AppointmentId : </b>{{ $value->appointment_id}}</p>
<p><b>PatientName : </b><a href="{{ url('/page')}}/{{$value->patient_id}}">{{ $value->patientfirstName . ' ' . $value->patientlastName }}</a></p>
<p><b>DoctorName : </b><a href="{{ url('/page')}}/{{$value->doctor_id}}">{{ 'Dr ' . $value->doctorlastName . ' ' . $value->doctorfirstName }}</a></p>
<p><div><b>Patient Complaint : </b><h5>{{ $value->medical_complaint }} </h5></div></p>
@endforeach


<form action="/updateTreatment/{{ $value->appointment_id}}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }} 
    
 </br>
<p>Write Treatment Details</p>
<textarea rows="8" cols="100" name="content" placeholder="Write Treatment Details">
</textarea> 
</br>
</br>
                        <input type="submit" name="Add new Problem">
                        <input type="reset" name="Reset">
                   </br>

        </form>

@stop