<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '../partials/head.php';?>
</head>
<body>
<?php include_once '../partials/navbar.php';?>
<header class="bg-dark text-center text-light container w-50 rounded my-5">
    <h2>Register Now</h2>
</header>
<section class="my-5 container">
    <form action="../../controller/registeraction.php" method="Post">
        <div class="form-group my-2"><label for="username"> <strong>username</strong></label><input type="text" class="form-control" name="username" id="username"></div>
        <div class="form-group my-2"><label for="email"><strong>email</strong></label><input type="email" class="form-control" name="email" id="email"></div>
        <div class="form-group my-2"><label for="password"><strong>password</strong></label><input type="password" class="form-control" name="password" id="password"></div>
        <div class="form-group my-2"><label for="confirm"><strong>confirm password</strong></label><input type="password" class="form-control" name="confirm" id="confirm"></div>
        <input type="submit" value="Register" class="btn btn-dark my-2" name="Register">
        <div class="my-3">
            <strong>Are You A Member? <a href="login.php" class="text-dark">login</a></strong>
        </div>
    </form>
</section>
<?php include_once '../partials/footer.php';?>
</body>
</html>