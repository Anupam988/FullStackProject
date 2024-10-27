<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="./viewcart.css">
</head>

<body>
<?php
include'./header.php';
?>

<div class="container1" style="margin-top: 150px;">            
<div class="col-lg-10 col-md-10 col-sm-12 m-auto">
<table class=" table-dark tbl">
  <thead class="text-center">
    <tr>
      <th scope="col"></th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $ptotal=0;
    $total=0;
    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $value){
            $ptotal = floatval($value['productPrice'])*floatval($value['productQuantity']);
            $total += $ptotal;
            echo"
                <form action='cart.php' method='POST'>
                <tr>
                <td  scope='row'><input type='hidden' name='Pimg' value='$value[pImg]'><img class='tbl-img' src='$value[pImg]' height='100px' width='100px''></td>
                <td><input type='hidden' name='Pname' value='$value[productName]'>$value[productName]</td>
                <td><input type='hidden' name='Price' value='$value[productPrice]'><i class='fa-solid fa-indian-rupee-sign'></i>$value[productPrice]</td>
                <td><input type='number' min='1' max='20' name='pQuantity' value='$value[productQuantity]'>
                <button name='update' class='btn btn-warning'>Update</button></td>
                <td> <i class='fa-solid fa-indian-rupee-sign'></i>$ptotal</td>
                <td><button name='remove' class='btn btn-danger'>Delete</button></td>
                <input type='hidden' name='item' value ='$value[productName]'>
                </tr>
                </form>
            ";
        }
    }
    ?>
    
  </tbody>
</table>

    <div class="col-lg-3 price-totl">
                <h3>total</h3>
                <h3>
                  <form action="./place_order.php" method="POST">
                <input name="totalprice" type="hidden" value="<?php 
                $totalprice = number_format($total,2);
                echo" $totalprice";
                ?>"
                <?php 
                $totalprice = number_format($total,2);
                echo"<i class='fa-solid fa-indian-rupee-sign'></i> $totalprice";
                ?>
                </h3>
                <a href="./place_order.php"><button name="placeorder" class="btn btn-warning">Place Order</button></a>
                </form>
    </div>
    </div>

    
</body>
</html>