<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-dark">

<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto mt-5">
            <h1 class="text-center text-white">Login</h1>
            <form action="./login_controler.php" method="POST" class="border p-3 ">
                <div class="mb-3">
                    <label  class="form-label text-white">User Name or email</label>
                    <input name="userName" type="text" class="form-control"  placeholder="enter user name">
                </div>
                <div class="mb-3">
                    <label  class="form-label text-white">Password</label>
                    <input name="userPassword"  type="password" class="form-control"  placeholder="enter user password">
                </div>
                <button name="login"  type="submit" class="btn btn-warning">Login</button>
                <a href="./ragister.php">i dont have acccount</a>
            </form>
        </div>
    </div>
</div>

    
</body>
</html>