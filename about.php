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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
   
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We have: Highly-Personalized Design and Stunning gifts, Impeccable Quality, Exceptional Service, Attention to Detail, all occasions.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We provide a wide range of gift options for various occasions such as birthdays, 
               weddings, and anniversaries. Our collection includes personalized gifts, flowers, 
               chocolates, and gift hampers. We ensure timely delivery of your gifts to your loved 
               ones anywhere in the world. Our website offers easy navigation and secure payment 
               options for a hassle-free gifting experience.<br>         
               <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about3.png" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a leading online gifting portal, offering a diverse range of unique and personalized gifts for all occasions. Our team is passionate about helping you express your love and gratitude through thoughtful gifts. With a commitment to quality and timely delivery, we strive to make every gifting experience a memorable.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>The Best gifting portal I have ever seen! Thank you for an excellent service. They have everything we could have hoped for.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 1</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>Always available to answer any questions.very good products.I love this Website.Very knowledgeable about the services they provide.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 2</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>They were all so helpful and the gifts were amazing!! The packaging was so beautiful, stunning.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Client 3</h3>
        </div>

        

       

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>