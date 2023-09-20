<?php 
require_once 'includes/connection.php';
if(isset($_POST['add_employee'])){
    $name=$_POST['name'];
    $salary=$_POST['salary'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];
    $addEmployee="INSERT INTO employees(name,salary,address,gender) VALUES('$name','$salary','$address','$gender')";
    $res=mysqli_query($conn,$addEmployee);
    if($res){
        header("location:index.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <h2 class="my-5 text-center container p-3 w-50 bg-dark text-light border shadow">
        Add New Employee
    </h2>
    <div class="container bg-light p-5 mx-auto w-50 border shadow">
        <form action="" method="post">
            <div class="form-group my-1"><label for="name"></label>Employee Name<input type="text" class="form-control"name="name" placeholder="Employee Name"></div>
            <div class="form-group my-1"><label for="salary">Employee salary</label><input type="number" class="form-control" name="salary" placeholder="Employee Salary"></div>
            <div class="form-group my-1"><label for="Address">Employee Address</label><input type="text" class="form-control" name="address" placeholder="Employee Address"></div>
            <div class="form-group mt-2 mb-1">
                <label for="Male" class="mx-1">Male</label>
                <input type="radio" name="gender" value="Male" >
                <label for="Female" class="mx-1">Female</label>
                <input type="radio" name="gender" value="Female" >
        </div>
        <input type="submit" value="Add Employee" class="mt-3 mx-1 btn btn-primary" name="add_employee">
        <a href="index.php" class="mx-1 mt-3 btn btn-info">Return To Index</a>
        </form>
    </div>
</body>
</html>