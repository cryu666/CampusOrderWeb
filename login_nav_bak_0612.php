<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NYCU NuA+</title>
    <link rel="icon" type="image/x-icon=" href="images/icon.png">
    
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/project/project/css/style.css">
   
</head>

<body>
<!-- header section starts      -->
<header>

<a href="#" class="logo" onclick="window.location = '/project/project/index.php'"><i class="fas fa-utensils"></i> NYCU NuA+</a>

<nav class="navbar">
    <a class="active" href="#home" onclick="window.location = '/project/project/index.php'">home</a>
    <a href="#functions">functions</a>
    <a href="#about">about</a>
    
</nav>

<div class="icons">
    <i class="fas fa-bars" id="menu-bars"></i>
    <i class="fas fa-search" id="search-icon"></i>
    <a href="#" class="fas fa-user" onclick="window.location = '/project/project/login.php'"></a>
</div>

</header>
<!-- header section ends-->

<style>

a{text-decoration:none}
a:hover{text-decoration:none}    

</style>

<!-- search form  -->

<form action="" id="search-form">
<input type="search" placeholder="Hey, what’s up?" name="" id="search-box">
<label for="search-box" class="fas fa-search"></label>
<i class="fas fa-times" id="close"></i>
</form>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>