<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiteBuzz</title>
</head>

<body>
<?php
    include "./header.php";
    include './slider.php';
    ?>

<div class="container-fluid menu">
<ul class="d-flex justify-content-center menu-item-box">
    <li><a class="menu-item" href="./burger.php"><i class="fa-solid fa-burger"></i>Burger</a></li>
    <li><a class="menu-item" href="./pizza.php"><i class="fa-solid fa-pizza-slice"></i>Pizza</a></li>
    <li><a class="menu-item" href="./baverage.php"><i class="fa-solid fa-martini-glass-citrus"></i>Baverage</a></li>

</ul>
</div>
    <center><h1  class="header" >Popular foods</h1></center>
    <div class="container-fluid mt-5 mb-5">
            <div class="col-md-12">
                <div class="row">
                <?php
                include"./config.php";
                $result = mysqli_query($con,"SELECT * FROM `products` LIMIT 4");
                while($row= mysqli_fetch_array($result)){
                    $check_page = $row['Pcategory'];


                    echo"
                    
                    <div class=' col-md-6 col-lg-3 col-sm- m-auto mb-3'>
                    <form action='cart.php' method='POST'>
                        <div class='card m-auto product-card' style='width: 18rem;'>
                            <img  src='../admin/product-control/$row[Pimage]' class='card-img-top' alt='...'>
                            <div class='card-body text-center'>
                                <h5 class='card-title'>$row[Pname]</h5>
                                <p class='card-text'><i class='fa-solid fa-indian-rupee-sign'></i>$row[Pprice].00</p>
                                <input name='Pimg' type='hidden' value = '../admin/product-control/$row[Pimage]'>
                                <input name='Pname' type='hidden' value = '$row[Pname]'>
                                <input name='Pprice' type='hidden' value = '$row[Pprice]'>
                                <input type='number' name='Pquantity' value='1' min='1' max='20' placeholder='quantity'>
                                 <input name='addCart' type='submit' class='btn btn-primary add-btn' value='add to cart'> 
                            </div>
                        </div>
                        </form>
                        </div>
                    
                    ";

                        }
                    
                        ?>
                </div>
            </div>
            <center><a href="./pizza.php"><button class="btn btn-warning mt-5">Show More</button></a></center>
            <?php include "./body.php";?>
    </div>

    
<?php
include "./footer.php";
?>
   
    
</body>
</html>