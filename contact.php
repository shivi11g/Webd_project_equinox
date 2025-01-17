<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header" style="background-color: black;">

   <a href="home.html" class="logo"> <img src="images/equinox_logo.jpg" alt="" ></i> EQUINOX </a>
   <nav class="navbar" >
   <div id="close-navbar" class="fas fa-times"></div>
      <a  style=" color: white;" href="index.php">home</a>
      <a  style=" color: white;" href="about.php">about</a>
      <a  style=" color: white;" href="gallery.php">gallery</a>
      <a  style=" color: white;" href="contact.php">contact</a>
      <a  style=" color: white;" href="blog.php">Blog</a>
   </nav>
   <div class="icons">
      <div id="account-btn" class="fas"></div>
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>


</header>

<!-- account form section starts  -->

<div class="account-form">

   <div id="close-form" class="fas fa-times"></div>

   <div class="buttons">
      <span class="btn active login-btn">login</span>
      <span class="btn register-btn">Register</span>
   </div>

   <form class="login-form active" action="">
      <h3>login now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <!-- <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div> -->
      <input type="submit" value="login now" class="btn">
   </form>

   <form class="register-form" action="">
      <h3>register now</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <input type="password" placeholder="confirm your password" class="box">
      <input type="submit" value="register now" class="btn">
   </form>

</div>

<!-- account form section ends -->

<!-- header section ends -->

<section class="heading-link">
   <h3 style="color: blueviolet;">contact us</h3>
   <p> <a href="home.html">home</a> / contact </p>
</section>

<!-- contact section starts  -->

<section class="contact">

   <h1 class="heading"> get in touch </h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours :</h3>
         <p>10:00am to 08:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone :</h3>
         <p>7597575966</p>
         <p>9460505344</p>
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> email : </h3>
         <p>guptaratnesh75975@gmail.com</p>
         <p>lcb2021006@iiitl.ac.in</p>
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address :</h3>
         <p>Chak Ganjaria, C. G. City
            Lucknow – 226002</p>
      </div>

   </div>

   <div class="row">

      <div class="image">
         <img src="images/photo gallery/contact us.jpeg" alt="">
      </div>

      <form action="">
         <h3>send us a message</h3>
         <input type="text" placeholder="name" class="box">
         <input type="email" placeholder="email" class="box">
         <input type="number" placeholder="phone" class="box">
         <textarea name="" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq">

   <h1 class="heading">frequently asked questions</h1>

   <div class="accordion-container">

      <div class="accordion active">
         <div class="accordion-heading">
            <h3>how to contact for help?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
            You can email us on the mail id give above and feel free to call on above given numbers from 10 am to 8 pm.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>What are the timings of events?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
           Information related to iming is given on home page in our events section, you can refer that :) .
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Is there any fees to participate in events</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
           No fees is required to participate in events, we just seek for your zeal :) .
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>How can I register for the events</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
           In navigation menu click on user icon to register or yyou can simply do it by clicking on the name of the events.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>who are the speakers in the event?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
          In about us section we have mentioned our speakers.
         </p>
      </div>

      <div class="accordion">
         <div class="accordion-heading">
            <h3>Can students of other colleges come to fest?</h3>
            <i class="fas fa-angle-down"></i>
         </div>
         <p class="accordion-content">
           Yes, they are allowed.
         </p>
      </div>

   </div>

</section>

<!-- faq section ends -->

<!-- logo slider starts  -->

<section class="logo-container">
   <h1>Our Sponsers</h1>
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
        
         <div class="swiper-slide"> <img src="images/github.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/polygon.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/devfolio.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/cc-logo.png" alt=""> </div>
         <div class="swiper-slide"> <img src="images/HackerEarth_logo.png" alt=""> </div>
        
      </div>
   </div>
</section>

<!-- logo slider ends -->







<!-- footer section starts  -->


<section class="footer" style="background-color: black; ">

   <div class="box-container">

      <div class="box">
         <h3 style="color: white;"> <i class="fas fa-lightbulb"></i> Equinox </h3>
         <p>Embracing the nostalgia</p>
         <div class="share">
            <a href="https://www.facebook.com/equinox22/" target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/equinoxiiitl?t=MyAHmBD7mQertlMXa3PNsA&s=08" target="_blank" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/equinoxiiitl/" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/equinox-iiitl/" target="_blank" class="fab fa-linkedin"></a>
         </div>
      </div>

      <div class="box">
         <h3 style="color: white;">quick links</h3>
         <a href="home.html" class="link">Home</a>
         <a href="about.html" class="link">About</a>
         <a href="gallery.html" class="link">Gallery</a>
         <a href="contact.html" class="link">Contact</a>
         <a href="blog.html" class="link">Blog</a>
      </div>

      <div class="box">
         <h3 style="color: white;">Useful inks</h3>
         <a href="#" class="link">Help center</a>
         <a href="#" class="link">Ask questions</a>
         <a href="#" class="link">Send feedback</a>
         <a href="#" class="link">Private policy</a>
         <a href="#" class="link">Terms of use</a>
      </div>

      <div class="box">
         <h3 style="color: white;">newsletter</h3>
         <p>subscribe for latest upadates</p>
         <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscribe" class="btn">
         </form>
      </div>

   </div>

   <div class="credit" style="color: white;"> created by <span>Webd Crow team</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>