<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Admin - Add Product</title>
</head>
<body>
    <?php include "./header.php"; ?>
    
    <div class="container p-3">
        <div class="row">
            <div class="col-md-8 col-lg-6 m-auto border p-4">
                <form action="./product-control/insert.php" method="POST" enctype="multipart/form-data">
                    <h5 class="text-center mb-4">Product Details</h5>
                    
                    <div class="mb-3">
                        <label class="form-label" for="productName">Product Name</label>
                        <input id="productName" name="Pname" type="text" class="form-control" placeholder="Enter product name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="productPrice">Product Price</label>
                        <input id="productPrice" name="Pprice" type="number" class="form-control" placeholder="Enter product price" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="productImage">Product Image</label>
                        <input id="productImage" name="Pimg" type="file" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="productCategory">Product Category</label>
                        <select id="productCategory" name="pcategory" class="form-select">
                            <option value="pizza" selected>Pizza</option>
                            <option value="beverage">Beverage</option>
                            <option value="burger">Burger</option>
                        </select>
                    </div>

                    <button type="submit" name="upload" class="btn btn-primary w-100">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "./footer.php";
    ?>
</body>
</html>
