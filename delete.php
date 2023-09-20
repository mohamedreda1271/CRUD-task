<?php

require_once 'includes/connection.php';
    $id= $_GET['id'];
    $deleteSql="DELETE FROM employees WHERE id=$id";
    if(mysqli_query($conn,$deleteSql)){
         header("location:index.php");
    }
?>