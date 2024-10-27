<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #333;
            color: white;
        }
        .form-label {
            color: #ffffff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        a {
            color: white;
        }
        a:hover {
            color: #007bff;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container p-3">
    <div class="row">
        <div class="col-md-6 m-auto border p-3">
            <form action="./login-controler.php" method="POST">
                <h5 class="text-center">Admin Login</h5>
                <div class="mb-3">
                    <label class="form-label">User name</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter User Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input name="Password" type="password" class="form-control" placeholder="Enter password" required>
                </div>
                <button name="login" class="btn btn-warning">Login</button>
                <br><br>
            </form>
        </div>
    </div>
    <center>
        <button class="btn btn-secondary">
            <a href="../user/index.php" class="text-decoration-none">Go to Store</a>
        </button>
    </center>
</div>
</body>
</html>
