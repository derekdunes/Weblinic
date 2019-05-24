<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register Form</title> 
  <link rel="stylesheet" href="{{ asset('css/1/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/1/font-awesome.min.css') }}">
     
  <style type="text/css">
  #op_background{ /* For IE8 and earlier */
    
    background-image:url('{{ asset('images/bg.jpg') }}');
    opacity: 0.9;
    background-size: 100%;
    
}
</style>

</head>
<body id="op_background">
    <div id="login">     
           <h2>Patient Portal</h2>
   <form action="/patient_register_entry" name='form-login' method="post" enctype="multipart/form-data">
               {{ csrf_field() }} 
                 <span class="fontawesome-user"></span>
                            <input type="text" name="username" id="user" placeholder="Username">

                <span class="fontawesome-user"></span>
                            <input type="text" name="lastname" id="user" placeholder="firstname">
       
                <span class="fontawesome-user"></span>
                            <input type="text" name="lastname" id="user" placeholder="lastname">

                <span class="fontawesome-lock"></span>
                            <input type="password" name="password" id"pass" placeholder="Password">
        
                <span class="fa fa-phone"></span>
                               <input type="text" name="contact_number" id="contact_number"
                                 placeholder="Contact_number">

                <span class="fa fa-envelope-o fa-fw"></span>
                             <input type="text" name="email" id="user" placeholder="Email"> 
                   
                <span class="fa fa-home"></span>
                             <input type="text" name="address" id="user" placeholder="Address">
                        
                
        </br>
        <a href="/login">Already have an Account</a> 
        </br>
        <input type="submit" value="Login">

</form>
  
  
</body>
</html>
