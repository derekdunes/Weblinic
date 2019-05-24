
@extends('admin_layout')
@section('content2')
 
  <table id="mytable" class="table table-bordred table-striped" style="max-width: 65%;margin: 2%">                      <thead>
        <tr><th>AppointmentId</th><th>PatientName</th><th>StartTime</th><th>EndTime</th><th>DoctorName</th></tr></thead>
        <tbody>
          
                @foreach($appoint as $value)
                      
     <tr>
     <td>{{$value->appointment_id}}</td><td><a href="{{ url('/page')}}/{{$value->patient_id}}">{{ $value->patientfirstName . ' ' . $value->patientlastName }}</a></td><td>{{$value->start_time}}</td><td>{{$value->end_time}}</td><td><a href="{{ url('/page')}}/{{$value->doctor_id}}">{{ 'Dr ' . $value->doctorlastName . ' ' . $value->doctorfirstName }}</a></td>

     </tr>
          @endforeach
        </tbody>
        
</table>
            @stop
