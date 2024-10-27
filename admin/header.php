<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin</title>
        <link rel="stylesheet" href="style.css">

</head>
<?php
session_start();
if(!$_SESSION['admin']){
    header("location:../login-control/login.php");
}
?>
<body>
    <div class="container-fluid header">
        <img class="logo" height="150px" width="150px" src="./assets/logo.png" alt="">
    </div>
    <div class="container-fluid nav-links" stat>
                <span class="d-flex">
                    <p class="navlink">Hello, Admin</p>
                    <a class="text-decoration-none navlink text-black" href="../login-control/logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
                    <a class="text-decoration-none navlink text-black" href="../user/index.php">Userpanel</a>
                </span>
    </div>
    <div class="container-fluid">
    <h1 class="text-center"></h1>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center " style="margin-top: 20px;">
                <div class="d-flex justify-content-center">
                    <h4 class="mx-3 admin-category">
                        <a class="text-decoration-none" href="./index.php"><i class="fa-solid fa-plus"></i>Add</a>
                    </h4>
                    <h4 class="mx-3 admin-category">
                        <a class="text-decoration-none" href="./list.php"><i class="fa-solid fa-list"></i>List</a>
                    </h4>
                    <h4 class="mx-3 admin-category">
                        <a class="text-decoration-none" href="./user.php"><i class="fa-regular fa-user"></i>Users</a>
                    </h4>
                    <h4 class="mx-3 admin-category">
                        <a class="text-decoration-none" href="./order.php"><i class="fa-solid fa-utensils"></i>orders</a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
