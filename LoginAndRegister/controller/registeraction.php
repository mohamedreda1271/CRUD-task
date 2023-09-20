<?php 
require_once '../includes/connection.php';
$errors=array();
if(isset($_POST['register'])){
    $user=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $confirmPassword=mysqli_real_escape_string($conn,$_POST['confirm']);
    if(empty($user)){
        array_push($errors,"username is required");
    }
    if(empty($email)){
        array_push($errors,"email is required");
    }
    if(empty($password)){
        array_push($errors,"password is required");
    }
    if($password != $confirmPassword){
        array_push($errors,"invalid password");
    }
    $selectedUser= "SELECT * FROM users WHERE email='$email'";
    $res=mysqli_query($conn,$selectedUser);
    $userResult=mysqli_fetch_assoc($res);
    if($userResult){
        if($userResult['email']==$email){
            array_push($errors,"Email Already Taken");
        }
    }
    if(count($errors)==0){
        $pass=md5($password);
        $sql="INSERT INTO users(username,email,password)
        VALUES('$user','$email','$pass')";
        mysqli_query($conn,$sql);
        $_SESSION['user']=$user;
        header('location:../views/pages/home.php');
    }else{
        header('location:register.php');
    }
}