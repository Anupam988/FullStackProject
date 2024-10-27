<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Place Order</title>
    <style>
        body {
            background-color: #333333;
        }
        .container {
            margin-top: 100px;
        }
        .address-box {
            background-color: #333333;
            padding: 20px;
            margin-top: 40px;
            border: 1px solid wheat;

            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .payment-methods {
            background-color: #333333;
            padding: 20px;
            border: 1px solid wheat;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        h1, h2, h4, h5, h6 {
            color: wheat;
        }
    </style>
</head>
<?php
//  if (isset($_SESSION['cart'])) {
//     header("Location:./place_order.php");
//     exit;
// }
// else{
//     header("Location: ./index.php");
//     exit;
// }
?>
<body>
    <?php 
    include "./header.php"; 
    $user_name = $_SESSION['user'];
    if (isset($_POST['placeorder'])) {
        $Total = $_POST['totalprice'];
        $delivery_charge = 40;
        $Total_bill = $Total + $delivery_charge;
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="address-box">
                    <h1>Your Address</h1>
                    <ul class="list-unstyled">
                        <li>Home: Canning</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mb-4">
                <h2 class="text" style="color: wheat;">Total Bill</h2>
                <h4 style="color: wheat;">Item Total: ₹<?php echo $Total; ?></h4>
                <h5 style="color: wheat;">Delivery Charge: ₹<?php echo $delivery_charge; ?></h5>
                <h6 style="color: wheat;">Total Bill: ₹<?php echo $Total_bill; ?></h6>
                <form action="./paymentmethod.php" method="POST" class="d-none">
                    <input type="hidden" name="totalbill" value="<?php echo $Total_bill; ?>">
                </form>
            </div>
            <div class="col-12 payment-methods">
                <h1>Select Payment Method</h1>
                <form action="./myOrder.php" method="POST">
                    <input name="username" type="hidden" value="<?php echo $user_name; ?>">
                    <input type="hidden" name="bill" value="<?php echo $Total_bill; ?>">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="choice" id="cod" value="cod" required>
                        <label style="color: wheat;" class="form-check-label" for="cod">Cash on Delivery</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="choice" id="upi" value="upi">
                        <label style="color: wheat;" class="form-check-label" for="upi">UPI</label>
                    </div>
                    <button name="payment" class="btn btn-warning mt-4">Confirm Payment</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "./footer.php"; ?>
</body>
</html>
