<?php require_once 'includes/connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once 'includes/head.php'?>>
</head>
<body>
    <header class="bg-primary text-light text-center p-3">
        <h2>Employee crud demo</h2>
    </header>
    <section class="my-5 container">
        <a href="add.php" class="btn btn-dark mb-3" >Add Employee</a>
        <table class="table table-bordered text-center mt-2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th> Name</th>
                    <th> Address</th>
                    <th> Salary</th>
                    <th>gender</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * from employees";
                    $selectedEmployees=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($selectedEmployees)){
                        ?>
                <tr>
                    <td><?php echo $row["id"]?></td>
                    <td><?php echo $row["name"]?></td>
                    <td><?php echo $row["address"]?></td>
                    <td><?php echo $row["gender"]?></td>
                    <td><?php echo $row["salary"]?></td>
                    <td>
                        <a href="edit.php?id= <?php echo $row["id"]?>" class="btn btn-small btn-success mx-1">update</a>
                        <a href="delete.php?id= <?php echo $row["id"] ?> " class="btn btn-small btn-danger mx-1">delete</a>
                    </td>
                </tr>
                ?>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>