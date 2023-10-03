<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p> Clinte's website design is clean and intuitive. Navigating through the categories and products was a breeze. I could easily find what I was looking for, and the search functionality was efficient</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p> Clinte offers a wide range of products, but I would love to see even more variety in certain categories. However, their selection is still impressive, and I managed to find most of what I needed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Adam Miller</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p> I was pleasantly surprised by the quality of the products I purchased. Everything was exactly as described on the website, and the items were well-packaged to ensure they arrived in perfect condition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Julia Ace</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>Clinte consistently offers competitive prices, and I found some great deals during my shopping spree. Plus, they frequently have sales and promotions, making it even more budget-friendly.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>David</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p> The checkout process was quick and hassle-free. I appreciated the various payment options available, which made it convenient for me to choose my preferred method.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Hallie Ray</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p> I had a minor issue with one of my orders, but Clinte's customer support team was responsive and resolved the issue promptly. I would have given a perfect score if not for the initial hiccup.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
      
         </div>
         <h3>Jason Wan</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-6.png" alt="">
         <p>My orders arrived within the estimated delivery time frame, and I received timely updates on the status of my shipments. The packaging was secure, and everything arrived in excellent condition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Lexie Jay</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>