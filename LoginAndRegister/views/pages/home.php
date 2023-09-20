<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
if(isset($_GET['Logout'])){
    session_destroy();
    unset($_SESSION['user']);
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../partials/head.php';?>
</head>
<body>
    <?php include_once '../partials/navbar.php';?>
    <?php if(isset($_SESSION['user'])) : ?>
    <div class="my-5 p-3 container w-50 mx-auto text-center">
        <h2>Welcome <span class="text-success">
            <?php echo $_SESSION['user'] ?>
        </span></h2>
        <a href="home.php" class="btn btn-danger my-2">Logout</a>
    </div>
    <?php endif; ?>




    <?php include_once '../partials/footer.php';?>


</body>
</html>