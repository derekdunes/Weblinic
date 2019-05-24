<html lang="en">
<head>
<meta charset="UTF-8">
<title>Learning Laravel Website </title>
<script type="text/javascript" src="{{ URL::asset('js/1/neddna.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/1/jquery.js') }}"></script>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/1/docs.css') }}">      

@yield('content1')
</head>
<body><b>
  <ul class="nav nav-tabs" >
  <li class="active"><a href="{{ url('/patient_layout') }}">HOME</a></li>
  <li><a href="{{ url('/View_patient_profile') }}">PROFILE</a></li>
  <li><a href="{{ url('/View_Appointment') }}">APPOINTMENT</a></li>
  <li><a href="{{ url('/organ') }}">SEARCH-ORGAN</a></li>
  <li><a href="{{ url('/Donate_organ') }}">DONATE-ORGAN</a></li>
  <li><a href="{{ url('/patientFeedback') }}">FEEDBACK</a></li>
  <li><a href="{{ url('/login') }}">LOGOUT</a></li>
</ul>
</b>
@yield('content2')
</body>
</html>