<?php
session_start();
if(isset($_SESSION['user'])){
// Retrieve POST values
$pimg = $_POST['Pimg'];
$Pname = isset($_POST['Pname']) ? $_POST['Pname'] : null;
$Pprice = isset($_POST['Pprice']) ? $_POST['Pprice'] : null;
$Pquantity = isset($_POST['Pquantity']) ? $_POST['Pquantity'] : null;


// Initialize the cart if not set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add to cart
if (isset($_POST['addCart'])) {
    // Check if the product already exists in the cart
    $check_product = array_column($_SESSION['cart'], 'productName');

    if (in_array($Pname, $check_product)) {
        echo "
        <script>
        alert('Item already added');
        window.location.href = 'index.php';
        </script>
        ";
    } else {
        // Add new product to cart
        $_SESSION['cart'][] = array(
            'productName' => $Pname,
            'pImg'=> $pimg,
            'productPrice' => $Pprice,
            'productQuantity' => $Pquantity
        );

        header("Location: ./viewcart.php");
        exit();
    }
}

// Remove item from cart
if (isset($_POST['remove'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
            unset($_SESSION['cart'][$key]); // Correct unset syntax
            $_SESSION['cart'] = array_values($_SESSION['cart']); // Re-index the array

            header("Location: ./viewcart.php");
            exit();
        }
    }
}

//update
if (isset($_POST['update'])) {
    $Pimg = $_POST['Pimg'];
    $Pname =$_POST['Pname'];
    $Pprice = $_POST['Price'];
    $newPquantity = $_POST['pQuantity'];
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {
    
            $_SESSION['cart'][$key] =  array(
                'productName' => $Pname,
                'pImg'=> $Pimg,
                'productPrice' => $Pprice,
                'productQuantity' => $newPquantity
            );
            header("Location: ./viewcart.php");
        exit();

        }
    }
}
}
else{
     header("location:./form/login.php");
     exit();
}
?>
