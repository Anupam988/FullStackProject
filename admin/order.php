<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        select.form-select {
            background-color: #343a40;
            color: #ffffff;
            border: 1px solid #495057;
        }

        select.form-select:focus {
            background-color: #495057;
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .table, .card {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <?php include "./header.php"; ?>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12 m-auto">
                <h2 class="text-center mb-4">Order Management</h2>
                <table class="table table-dark table-responsive border my-5 d-none d-md-table">
                    <thead class="text-center">
                        <tr>
                            <th>Order ID</th>
                            <th>User Name</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Payment Method</th>
                            <th>Total Bill</th>
                            <th>Order State</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        include './config.php';

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            if (isset($_POST['cancel'])) {
                                $orderId = intval($_POST['orderId']);
                                mysqli_query($con, "DELETE FROM `uderorder` WHERE orderId = $orderId");
                            } elseif (isset($_POST['update'])) {
                                $orderId = intval($_POST['orderId']);
                                $orderState = mysqli_real_escape_string($con, $_POST['orderState']);
                                mysqli_query($con, "UPDATE `uderorder` SET orderState = '$orderState' WHERE orderId = $orderId");
                            }
                        }

                        $record = mysqli_query($con, "SELECT * FROM `uderorder`");
                        while ($row = mysqli_fetch_array($record)) {
                            echo "
                                <tr>
                                    <td>{$row['orderId']}</td>
                                    <td>{$row['username']}</td>
                                    <td><img src='{$row['Orderimg']}' alt='' width='100' height='100' style='border-radius:50px;'></td>
                                    <td>{$row['orderName']}</td>  
                                    <td>{$row['pQuantity']}</td>
                                    <td>{$row['paymentMethod']}</td>
                                    <td><i class='fa-solid fa-indian-rupee-sign'></i>{$row['Bill']}</td>
                                    <td>
                                        <form action='' method='POST' style='display:inline;'>
                                            <input type='hidden' name='orderId' value='{$row['orderId']}'>
                                            <select name='orderState' class='form-select' onchange='this.form.submit()'>
                                                <option value='pending' " . ($row['orderState'] == 'pending' ? 'selected' : '') . ">Pending</option>
                                                <option value='confirmed' " . ($row['orderState'] == 'confirmed' ? 'selected' : '') . ">Confirmed</option>
                                                <option value='preparing' " . ($row['orderState'] == 'preparing' ? 'selected' : '') . ">Preparing</option>
                                                <option value='out_for_delivery' " . ($row['orderState'] == 'out_for_delivery' ? 'selected' : '') . ">Out for Delivery</option>
                                                <option value='completed' " . ($row['orderState'] == 'completed' ? 'selected' : '') . ">Completed</option>
                                                <option value='cancelled' " . ($row['orderState'] == 'cancelled' ? 'selected' : '') . ">Cancelled</option>
                                            </select>
                                            <input type='hidden' name='update' value='1'>
                                        </form>
                                    </td>
                                    <td>
                                        <form action='' method='POST' style='display:inline;'>
                                            <input type='hidden' name='orderId' value='{$row['orderId']}'>
                                            <button type='submit' name='cancel' class='btn btn-danger'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>

                <div class="d-md-none">
                    <?php
                    $record = mysqli_query($con, "SELECT * FROM `uderorder`");
                    while ($row = mysqli_fetch_array($record)) {
                        echo "
                            <div class='card mb-3'>
                                <div class='card-body'>
                                    <h5 class='card-title'>Order ID: {$row['orderId']}</h5>
                                    <p class='card-text'><strong>User Name:</strong> {$row['username']}</p>
                                    <img src='{$row['Orderimg']}' alt='' class='img-fluid rounded-circle' width='100' height='100'>
                                    <p class='card-text'><strong>Product Name:</strong> {$row['orderName']}</p>
                                    <p class='card-text'><strong>Quantity:</strong> {$row['pQuantity']}</p>
                                    <p class='card-text'><strong>Payment Method:</strong> {$row['paymentMethod']}</p>
                                    <p class='card-text'><strong>Total Bill:</strong> <i class='fa-solid fa-indian-rupee-sign'></i>{$row['Bill']}</p>
                                    <div class='d-flex justify-content-between'>
                                        <form action='' method='POST' class='w-50'>
                                            <input type='hidden' name='orderId' value='{$row['orderId']}'>
                                            <select name='orderState' class='form-select' onchange='this.form.submit()'>
                                                <option value='pending' " . ($row['orderState'] == 'pending' ? 'selected' : '') . ">Pending</option>
                                                <option value='confirmed' " . ($row['orderState'] == 'confirmed' ? 'selected' : '') . ">Confirmed</option>
                                                <option value='preparing' " . ($row['orderState'] == 'preparing' ? 'selected' : '') . ">Preparing</option>
                                                <option value='out_for_delivery' " . ($row['orderState'] == 'out_for_delivery' ? 'selected' : '') . ">Out for Delivery</option>
                                                <option value='completed' " . ($row['orderState'] == 'completed' ? 'selected' : '') . ">Completed</option>
                                                <option value='cancelled' " . ($row['orderState'] == 'cancelled' ? 'selected' : '') . ">Cancelled</option>
                                            </select>
                                            <input type='hidden' name='update' value='1'>
                                        </form>
                                        <form action='' method='POST' class='w-50'>
                                            <input type='hidden' name='orderId' value='{$row['orderId']}'>
                                            <button type='submit' name='cancel' class='btn btn-danger w-100'>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "./footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-6k6ViD7QgCkfPVk3SwXjdB8RI4M2+kOQnxmLg02qGf4sEfIBs6E09giqP9wV9xAA" crossorigin="anonymous"></script>
</body>
</html>
