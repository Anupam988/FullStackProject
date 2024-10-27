<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome - BiteBuzz</title>
    <link rel="stylesheet" href="./style.css">

    <style>
        .welcome-container {
            padding: 40px;
            text-align: center;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            background: url(./assets//bg.jpg);
            background-size: cover;

        }
        .welcome-container img {
            max-width: 100px;
            height: auto;
            border-radius: 100px;
            margin-bottom: 20px;
            transition: 0.5s;
        }
        .welcome-container img:hover {
            transform: scale(1.2);
        }
        .welcome-container h1 {
            color: #ffc107;
            margin-bottom: 20px;
        }
        .welcome-container p {
            font-size: 1.2rem;
            color: white;
        }
    </style>
</head>
<body>
<div class="container welcome-container">
    <img src="./assets/logo.png" alt="Welcome to BiteBuzz">
     <span>
     <h1>Welcome to BiteBuzz!</h1>
     <p>We are thrilled to have you here. At BiteBuzz, we pride ourselves on serving delicious food in a warm and inviting atmosphere. Explore our menu and discover your new favorite dish!</p>
     <button class="btn btn-warning text-black">Explore Our Menu</button>
     </span>
    
</div>
</body>
</html>
