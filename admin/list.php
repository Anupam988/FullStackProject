<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin - Product List</title>
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
            font-family: Arial, sans-serif; /* Font family for the text */
        }

        .header {
            background-color: #007bff; /* Header background color */
            color: white; /* Text color in header */
            padding: 20px; /* Padding around header */
            text-align: center; /* Center text */
        }

        h2 {
            color: #343a40; /* Dark color for headings */
            margin-bottom: 20px; /* Margin below headings */
        }

        .table {
            background-color: white; /* White background for the table */
            border-radius: 5px; /* Rounded corners for the table */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        }

        .table th, .table td {
            vertical-align: middle; /* Center content in table cells */
        }

        .btn-success {
            background-color: #28a745; /* Green color for update button */
        }

        .btn-danger {
            background-color: #dc3545; /* Red color for delete button */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto; /* Allow horizontal scrolling on small screens */
            }
        }
    </style>
</head>
<body>
<?php 
include "./header.php"; // Include your header
include './config.php'; // Database configuration
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">
            <h2 class="text-center my-4">Product List</h2>
            <div class="table-responsive">
                <table class="table table-dark border">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $record = mysqli_query($con, "SELECT * FROM `products`");
                        while ($row = mysqli_fetch_array($record)) {
                            echo "
                                <tr>
                                    <td>{$row['pid']}</td>
                                    <td>{$row['Pname']}</td>
                                    <td><i class='fa-solid fa-indian-rupee-sign'></i>{$row['Pprice']}</td>
                                    <td><img height='150px' width='150px' src='./product-control/{$row['Pimage']}' alt='Product Image'></td>
                                    <td>{$row['Pcategory']}</td>
                                    <td><a href='./product-control/update.php?ID={$row['pid']}'><button class='btn btn-success'>Update</button></a></td>
                                    <td><a href='./product-control/delete.php?ID={$row['pid']}' onclick='return confirm(\"Are you sure you want to delete this item?\");'><button class='btn btn-danger'>Delete</button></a></td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include "./footer.php";
    ?>  
</body>
</html>
