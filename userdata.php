<?php
require "connection.php";
if (isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $passwordHash=password_hash($password,PASSWORD_DEFAULT);
    $errors= array();
    if (empty($name) OR empty($email) OR empty($password) OR empty($cpassword)){
        array_push($errors,"ALL FIELDS ARE REQUIRED!!!!!!");
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errors,"please enter valid email");
    }
    if(strlen($password)<8){
        array_push($errors,"password length should be at least 8");
    }
    if($password!==$cpassword){
        array_push($errors,"password and confirm don not match");
    }
    $sqlq="Select * from signuprec where email='$email'";
    $result=mysqli_query($con,$sqlq);
    $rowcount=mysqli_num_rows($result);
    if($rowcount>0){
        array_push($errors,"Email already exists");
    }
    if(count($errors)>0){
        foreach($errors as $error) { 
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }else{
       $sql="INSERT INTO signuprec(name,email,password) values('$name','$email','$passwordHash')";
       $result=mysqli_query($con,$sql);
        if($result){
            echo "<div class='alert alert-success'>Your account is created</div>";
        }else{
            die("something went wrong");
        }
       /*$stmt=mysqli_stmt_init($con);
       $preparestmt=mysqli_stmt_prepare($stmt,$sql);
       if($preparestmt){
        mysqli_stmt_bind_param($stmt,"sss",$name,$email,$password);
        mysqli_stmt_execute($stmt);
        echo "<div class='alert alert-success'>Your account is created</div>";*/
       
    }

}
?>
