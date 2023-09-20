<?php
require_once '../includes/connection.php';
session_start();
$errors=array();
if(isset($_POST['register'])){
    $user=mysqli_real_escape_string($conn,$_POST['name']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    if(empty($user) or empty($password)){
        array_push($errors,"All input are required ! ");
    }
    if(count($errors) == 0){
        $pass=md5($password);
        $sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $_SESSION['user'] = $user;
            header('location:../views/pages/home.php');
        }else{
            array_push($errors,"Invalid Username or Password");
        }
    }else{
        header('location:../views/pages/login.php');
    }
}