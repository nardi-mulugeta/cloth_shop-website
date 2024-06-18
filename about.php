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
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/cloth5.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>This website showcases a stunning assortment of traditionally-woven, beautiful Habesha cloths.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>At our cloth shop, we take great pride in curating an exquisite collection of traditional Habesha clothing. Habesha culture is renowned for its rich textile heritage, featuring intricate, vibrant patterns and luxurious fabrics that have been meticulously crafted for generations.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/cloth2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/cloth7.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a traditional cloth seller based in Adama, Ethiopia. Our family-owned business has been creating stunning, high-quality Habesha clothing for generations.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/review2.avif" alt="">
            <p>I had a fantastic experience shopping on this Habesha clothing website.I was incredibly impressed by the stunning quality and authenticity of the garments they offer.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Yonnas Eshetu</h3>
        </div>

        
        

        <div class="box">
            <img src="images/review3.avif" alt="">
            <p>The clothes themselves are truly exquisite. The intricate, vibrant patterns and luxurious fabrics showcase the skilled artistry of the Habesha weavers and tailors.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ellena</h3>
        </div>

        <div class="box">
            <img src="images/images.jpeg" alt="">
            <p>የሚገርም ልብሶች ነዉ ያገኝዉት ሁላችዉም እድትወስዱ እድታዙ አበርታታለዉ እና በርቱ ደስ ይላል፡፡ Do yourself a favor and check out this Habesha clothing website - your wardrobe (and your heart) will thank you!                                                    
                 
            </p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hellen Bedilu</h3>
        </div>

        

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>