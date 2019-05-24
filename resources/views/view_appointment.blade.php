@extends('patient_layout')
@section('content1')
<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1000px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      width: 55%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }


 </style>
 <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
 <script type="text/javascript" src="{{ URL::asset('js/date/jquery-1.8.3.min.js') }}"></script>
 <script type="text/javascript" src="{{ URL::asset('js/date/bootstrap-datetimepicker.js') }}">  
 </script>
 <script type="text/javascript" src="{{ URL::asset('js/date/bootstrap-datetimepicker.fr.js') }}">
 </script>


  @stop

@section('content2')
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-12 center">

         <div class="table-responsive">
              <table class="table" border="0" align="center" style="max-width: 65%;margin: 2%">
                <col width="20%">
                  
                  <form action="/do_check" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <p>
                    <h2>Book An Appointment with a Doctor </h2>
                    </p>
                    <input type="submit" value="Find A Doctor">
                    </br>
                </form>
                <thead class="thead-inverse">
                <tr><th>AppointmentId</th><th>StartTime</th><th>EndTime</th><th>DoctorName</th><th>Delete</th></tr></thead>
                <tbody>
                  
                @foreach($appoint as $value)
                                  
                     <tr>
                     <td>{{ $value->appointment_id }}</td><td>{{$value->start_time}}</td><td>{{$value->end_time}}</td><td>
                        {{ 'Dr ' . $value->doctorlastName . ' ' . $value->doctorfirstName }}
                    </td><td> <a href='delete/{{ $value->appointment_id}}'> Delete</a></td>

                     </tr>

                @endforeach
                </tbody>
              </table>

        </div>

        </div>
            
@stop
