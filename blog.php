<?php
//require_once dirname(__FILE__). "/login_status.php";
//require_once dirname(__FILE__). "/blog_nav.php";
//require_once dirname(__FILE__). "/animations/box_anime.php";
//require_once $_SERVER["DOCUMENT_ROOT"]. "/php_project_demo/models/db_check.php";
//$conn = db_check();
$conn = mysqli_connect('localhost', 'root', '','user'); 
session_start();
//$article_sql = "SELECT id, title, content, username, img, reg_date FROM user_article ORDER BY id DESC;";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>109705013_賴郁忻</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="csss.css">
    </head>

    <body>
    <header >
        <div class="user">
            <img src="img/1.jpg" alt="">
            <h3 class="name"><?php echo $_SESSION['username'];?></h3>
            <p class="post">student</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="menu" class="fas fa-bars"></div>

    <button 
        class="btn"
        onclick="window.location = '/HW3_109705013_賴郁忻/change_password.php'"
    >
        <b>修改密碼</b>
    </button>
    <button 
        class="btn" 
        onclick="window.location = '/HW3_109705013_賴郁忻/index.php'"
    >
        <?php setcookie("user", "", time()-3600);?>  
        <b>登出</b>
    </button>
    

    <section class="home" id="home">

        <h1>I'm <span>Crystal</span></h1>
        <p></p>
        <a href="#about"><button class="btn">about me <i class="fas fa-candy-cane"></i></button></a>
    
    </section>

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> me </h1>
        
        <div class="row">
        
            <div class="info">
                <h3> <span> Name : </span> 賴郁忻 </h3>
                <h3> <span> Age : </span> 20 </h3>
                <h3> <span> Gender : </span> female </h3>
                <h3> <span> College : </span> <a href="https://www.nycu.edu.tw/">National Yang Ming Chiao Tung University</a> </h3>
                <h3> <span> Department : </span> <a href="https://imf.nctu.edu.tw/">Information Management and Finance</a></h3>
                <h3> <span> Language : </span> Chinese , English</h3>
            </div>
        
            <div class="counter">
        
                <div class="box">
                    <span>TOEIC</span>
                    <h3>910</h3>
                </div>
        
                <div class="box">
                    <span>TOEFL</span>
                    <h3>95</h3>
                </div>
        
            </div>
        
        </div>
        
    </section>

    <section class="education" id="education">

        <h1 class="heading"> my <span>education</span> </h1>
        
        <div class="box-container">
        
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2017</span>
                <h3>Taipei First Girls High School</h3>
                <p></p>
            </div>
        
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2020</span>
                <h3>National Yang Ming Chiao Tung University</h3>
                <p>Department of Information Management and Finance</p>
            </div>
        
        </div>
        
    </section>

    <section class="portfolio" id="portfolio">

        <h1 class="heading"> my <span>portfolio</span> </h1>
        
        <div class="box-container">
        
            <div class="box">
                <img src="img/2.jpg" alt="">
            </div>
        
            <div class="box">
                <img src="img/3.jpg" alt="">
            </div>
        
            <div class="box">
                <img src="img/4.jpg" alt="">
            </div>
        
            <div class="box">
                <img src="img/5.jpg" alt="">
            </div>
        
            <div class="box">
                <img src="img/6.jpg" alt="">
            </div>
        
            <div class="box">
                <img src="img/7.jpg" alt="">
            </div>
        
        </div>
        
    </section>

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> me </h1>
        
        <div class="row">
        
            <div class="content">
        
                <h3 class="title">contact Information</h3>
        
                <div class="info">
                    <h3> <i class="fas fa-envelope"></i> debra901211@gmail.com </h3>
                    <h3> <i class="fas fa-phone"></i> 0922746632 </h3>
                    <h3> <i class="fas fa-phone"></i> 033186464 </h3>
                    <h3> <i class="fas fa-map-marker-alt"></i> Taipei, Taiwan  </h3>
                </div>
        
            </div>
        
        </div>
        
    </section>
        
    <a href="#home" class="top">
        
        <i class='fas'>&#xf102;</i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js.js"></script>
    </body>
</html>

