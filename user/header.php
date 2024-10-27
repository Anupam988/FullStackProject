<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>BiteBuzz</title>
</head>
<body>
<?php
session_start();
$count= 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);

}


?>

  <div class="container-fluid nav">
    <a href="./index.php" class="logo" class="navbar-brand"><img src="./assets/logo.png" height="100px" width="100px" alt=""></a>
    <span class="navigation">
        <a href="./index.php">Home</a>
        <a href="./aboutus.php">About Us</a>
        <a href="./pizza.php">Menu</a>

        <a href=""></a>
    </span>
    <span class="user">
    <span class="cart"><a class="cart-icon" href="./viewcart.php"><i class="fa-solid fa-cart-shopping"></i><span id="quantity"><?php echo $count?></span></a></span>

        <a href=""><i class="fa-solid fa-user"></i>
            <?php
             if(isset($_SESSION['user'])){
                echo $_SESSION['user'];
                echo "<a href='./form/logout.php'><i class='fa-solid fa-right-from-bracket'></i></a>";  
            }
            else{
                echo "<a href='./form/login.php'><i class='fa-solid fa-right-to-bracket'></i></a>";  
            }
            ?>

        </a>
        
        <a href="../admin/header.php">Admin</a>
    </span>
    <span class="user-mobile">
        <span id="cart"><a class="cart-icon" href="./viewcart.php"><i class="fa-solid fa-cart-shopping"></i><span id="quantity"><?php echo $count?></span></a></span>

        <button id="bar" onclick="showmenu()"><i class="fa-solid fa-bars"></i></button>
        <button id="cross" onclick="hidemenu()" ><i class="fa-solid fa-xmark"></i></button>

    </span>

  </div>
  
  <div class="nav-box" id="menu-box">
            <ul>
                <li>
                
                    <?php
                    if(isset($_SESSION['user'])){
                        echo "<a><i class='fa-solid fa-user'></i>.$_SESSION[user] </a>";}
                    ?>
                </li>
                <li><a href="./index.php">Home</a>
                </li>
                <li><a href="./aboutus.php">About Us</a></li>
                <li><a href="./pizza.php">Menu</a>
                </li>
            <li><?php
             if(isset($_SESSION['user'])){
                echo "<a href='./form/logout.php'><i class='fa-solid fa-right-from-bracket'></i>Logout</a>";  
            }
            else{
                echo "<a href='./form/login.php'><i class='fa-solid fa-right-to-bracket'></i>Login</a>";  
            }
            ?></li>
                
                <li><a href="../admin/header.php">Admin</a>
                </li>
            </ul>
        </div>

</body>

<script src="./user.js"></script>
</html>