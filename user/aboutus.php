<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>About Us - BiteBuzz</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .about-section {
            padding: 40px 0;
            text-align: center;
        }
        .about-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .about-section h2 {
            margin-top: 20px;
        }
        .about-section p {
            margin-top: 15px;
            font-size: 1.2rem;
            color: #343a40;
        }
    </style>
</head>
<body>
<?php include"./header.php";?>
<div class="container about-section" style="margin-top: 100px;">
    <h2 style="color: #ffc107;">About Us</h2>
    <img src="./assets/menu_1.png" alt="BiteBuzz Restaurant">
    
    <p style="color: #f8f9fa;">At BiteBuzz, we are passionate about bringing you the best dining experience with our delicious food and vibrant atmosphere. Our menu is crafted with the finest ingredients, showcasing a diverse range of dishes that cater to all tastes and preferences. From mouthwatering burgers to exquisite pizzas and refreshing beverages, we ensure that every bite is a celebration of flavor. Whether you're here for a quick bite or a special occasion, our friendly staff is dedicated to making every moment memorable. Join us at BiteBuzz, where great food meets great company, and let us take you on a culinary journey that delights the senses and creates lasting memories.</p>
    <button class="btn btn-warning mt-4"><a style="color: black;" href="./pizza.php">See menu</a></button>
</div>
<?php include"./footer.php";?>
</body>
</html>
