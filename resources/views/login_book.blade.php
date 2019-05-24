<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Login Form</title> 
<link rel="stylesheet" href="{{ asset('css/1/style.css') }}">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
<style type="text/css">
  #op_background{ /* For IE8 and earlier */
    
    background-image:url('{{ asset('images/bg.jpg') }}');
    opacity: 0.9;
    background-size: 100%;
    
}
</style>
</head>
<body id="op_background">
</br>
</br>

<div id="login">   
<h2>Weblinic</h2>
<form action="/login_check/book/{{ $id }}" name='form-login' method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
       <h2>Login Portal</h2>
        <span class="fontawesome-user"></span>
          <input type="text" name="username" id="user" placeholder="Username">
       
        <span class="fontawesome-lock"></span>
          <input type="password" name="password" id="pass" placeholder="Password">

           </br>
                    <input type="radio" name="user" value="doctor" > <b>Doctor</b>
                    <input type="radio" name="user" value="admin" checked hidden>
                    <input type="radio" name="user" value="patient"> <b>Patient</b>
        </br>
        <a href="/register/book/{{ $id }}">New Here? Register</a> 
        </br>
        <input type="submit" value="Login">

</form>
  </div>
  
</body>
</html>
