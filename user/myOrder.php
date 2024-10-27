<?php
include "./config.php";
session_start();

if (isset($_POST['payment'])) {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $username = $_POST['username'];
        $paymentmethod = $_POST['choice'];
        $bill = $_POST['bill'];
        $orderstate = 'Pending';
        $_SESSION['order'] = $username;

        foreach ($_SESSION['cart'] as $item) {
            $ordername = $item['productName'];
            $orderimg = $item['pImg'];
            $orderquantity = $item['productQuantity'];

            if ($paymentmethod == "cod") {
                mysqli_query($con, "INSERT INTO `uderorder`(`username`, `paymentMethod`, `Bill`, `orderState`, `orderName`, `Orderimg`, `pQuantity`)
                                    VALUES ('$username', '$paymentmethod', '$bill', '$orderstate', '$ordername', '$orderimg', '$orderquantity')");
            }
            elseif($paymentmethod == "upi"){
                mysqli_query($con, "INSERT INTO `uderorder`(`username`, `paymentMethod`, `Bill`, `orderState`, `orderName`, `Orderimg`, `pQuantity`)
                                    VALUES ('$username', '$paymentmethod', '$bill', '$orderstate', '$ordername', '$orderimg', '$orderquantity')");
                    

            }
        }

        // After all items are inserted, redirect to myorder_details.php
        header("location:./myorder_details.php");
        exit;
    }
}
?>
