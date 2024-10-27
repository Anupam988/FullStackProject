<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>slider</title>
</head>
<body>
      <!-- slider -->
  <div  id="carouselExampleRide" class="carousel col-12 m-auto slider slide" data-bs-ride="carousel" data-bs-interval="5000">
  <div class="carousel-inner">
    <div class="carousel-item active slide-img">
      <img src="./assets/slide_1.jpg" class="d-block w-100" alt="...">
      <div class="slide-text">
        <h2>Pizza Lovers, Welcome Home</h2>
        <p style="color:wheat ;">Bringing People Together, One Slice at a Time.</p>
        <a href="./pizza.php"><button class="btn btn-warning">Order Now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/slide_2.jpg" class="d-block w-100" alt="...">
      <div class="slide-text">
        <h2>Scoops of Happiness Await!</h2>
        <p style="color:wheat ;">Where Every Scoop is a Sweet Escape.</p>
        <a href="./baverage.php"><button class="btn btn-warning">Order Now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/slide_3.jpg" class="d-block w-100" alt="...">
      <div class="slide-text">
        <h2>Bite into Bold Burgers!</h2>
        <p style="color:wheat ;">Where Every Burger Bite is a Flavor Explosion!</p>
        <a href="./burger.php"><button class="btn btn-warning">Order Now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/slide_4.jpg" class="d-block w-100" alt="...">
      <div class="slide-text">
        <h2>Sip Into Refreshment!
        </h2>
        <p style="color:wheat ;">Where Every Sip is a Celebration!.</p>
        <a href="./baverage.php"><button class="btn btn-warning">Order Now</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./assets/slide_5.jpg" class="d-block w-100" alt="...">
      <div class="slide-text">
        <h2>Delicious Combos for Every Craving!</h2>
        <p style="color:wheat ;">Indulge in Flavorful Combos, Made for You!        </p>
        <a href="./pizza.php"><button class="btn btn-warning order-btn">Order Now</button></a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 

</body>
</html>