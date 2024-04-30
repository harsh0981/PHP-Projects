<?php
require "userdata.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <style>

body{
            padding: 50px;
            
            
        }
        .heading{
            text-align: center;
        }
        .container{
            max-width: 600px;
            padding: 50px;
            margin:0 auto;
            box-shadow: rgba(100, 100,111, 0.2) 0px 7px 29px 0px;

        }
        .form-group{
            margin-bottom: 30px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body><h1 class="heading">Sign Up</h1>
    <div class="container">
   
    <form action="login-register.php" method="post">
        <div class="form-group">
        <input type="text" name="name" id="name" class="form-control" placeholder="Full Name"><br><br>
        <input type="email" name="email" id="email" class="form-control"placeholder="Email"><br><br>
        <input type="password" name="password" id="password"class="form-control" placeholder="Password"><br><br>
        <input type="password" name="cpassword" id="cpassword"class="form-control" placeholder="Confirm Password"><br><br></div>
     <div class="form-btn"><input type="submit" value="Sign up" class="btn btn-primary" name="signup" id="signup"></div>
    </form></div>
</body>
</html>
