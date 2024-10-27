<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Order Details</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin-top: 150px;
            color: #333;
        }
        img {
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <?php
    include "./header.php";
    
    if (!isset($_SESSION['order'])) {
        header("Location: ./myorder_details.php");
        exit;
    }

    $Order_holder_name = $_SESSION['order'];
    ?>

    <center><h1 style="margin-top: 110px;">My Order</h1></center>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="table-responsive">
                    <table class="table table-dark border my-5">
                        <thead class="text-center">
                            <tr>
                                <th>Order ID</th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Payment Method</th>
                                <th>Total Bill</th>
                                <th>Order State</th>
                                <th>Cancel</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                            include './config.php';
                            $record = mysqli_query($con, "SELECT * FROM `uderorder` WHERE username = '$Order_holder_name'");

                            unset($_SESSION['cart']);
                            if(mysqli_num_rows($record) > 0) {
                                while ($row = mysqli_fetch_array($record)) {
                                    $orderId = $row['orderId'];
                                    echo "
                                    <tr>
                                        <form action='./myorder_details.php' method='POST'>
                                            <td>{$row['orderId']}</td>
                                            <td><img src='{$row['Orderimg']}' alt='Product Image' width='100' height='100'></td>
                                            <td>{$row['orderName']}</td>
                                            <td>{$row['pQuantity']}</td>
                                            <td>{$row['paymentMethod']}</td>
                                            <td><i class='fa-solid fa-indian-rupee-sign'></i>{$row['Bill']}</td>
                                            <td>{$row['orderState']}</td>
                                            <td>
                                                <button type='submit' name='cancel' value='{$orderId}' class='btn btn-danger'>Cancel</button>
                                            </td>
                                        </form>
                                    </tr>
                                    ";
                                }
                            } else {
                                echo "<tr><td colspan='8'>No orders found.</td></tr>";
                            }

                            if (isset($_POST['cancel'])) {
                                $orderIdToDelete = $_POST['cancel'];
                                mysqli_query($con, "DELETE FROM `uderorder` WHERE orderId = '$orderIdToDelete'");
                                echo "<script>window.location.href = './myorder_details.php';</script>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include "./footer.php"; ?>
</body>
</html>
