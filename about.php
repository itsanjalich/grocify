<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Credibility and Convenience – Your Trusted Grocery Partner</p>
         <p>Quality Selection: Handpicked products ensuring the finest quality for you.
Easy Shopping: Hassle-free online shopping experience at your fingertips.
Quick Delivery: Timely delivery to your doorstep, saving you time and effort.
Affordable Prices: Competitive prices without compromising on quality.
Variety: A wide range of products to cater to your diverse needs.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Enhancing Your Experience Through</p>
         <p>Quality Assurance: Offering fresh, top-quality products for your health and satisfaction.
Diverse Selection: Explore a variety of items, from fresh produce to household essentials, all conveniently available.
Effortless Delivery: Experience doorstep convenience, saving you time and effort.
Budget-Friendly: Competitive pricing ensures excellent value for your money.
Exceptional Care: Our customer-centric approach guarantees a seamless shopping experience.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/LINA1.png" alt="">
         <p>GROCIFY has revolutionized my grocery shopping experience. The extensive range of products they offer, from farm-fresh produce to everyday essentials, is impressive. Navigating the user-friendly website and placing orders is a breeze. Prompt deliveries and quality products make it my top choice!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>LINA</h3>
      </div>

      <div class="box">
         <img src="images/LINA2.png" alt="">
         <p>As a busy professional, GROCIFY has been a lifesaver for me. The convenience of shopping for groceries online and having them delivered to my doorstep is unbeatable. The website's interface is intuitive, and the prices are competitive. GROCIFY is my reliable partner in healthy living!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>LINA</h3>
      </div>

      <div class="box">
         <img src="images/LINA3.png" alt="">
         <p>GROCIFY has truly elevated my grocery shopping game. The diverse selection of items, coupled with their commitment to quality, sets them apart. From pantry staples to fresh produce, their offerings are a testament to their dedication. I'm a satisfied customer who trusts GROCIFY for all my grocery needs!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>LINA</h3>
      </div>
   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>