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
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>

    <!-- header section starts      -->
    <header>

        <a href="#" class="logo" onclick="window.location = '/project/project/index.php'"><i class="fas fa-utensils"></i> NYCU NuA+</a>
        
        <nav class="navbar">
            <a class="active" href="#home">home</a>
            <a href="#functions">functions</a>
            <a href="#about">about</a>
            <a href="meal.php">meal</a>
            <a href="suggestion.php">suggestion</a>
            <a href="community.php">community</a>

        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-user" onclick="window.location = '/project/project/login.php'"></a>
        </div>

    </header>
    <!-- header section ends-->
    
    <!-- search form  -->

    <form action="" id="search-form">
        <input type="search" placeholder="Hey, what’s up?" name="" id="search-box">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper-container home-slider">
    
            <div class="swiper-wrapper wrapper">
    
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our College Cafeteria and Food Court</span>
                        <h3>Second Student Cafeteria</h3>
                        <p>國立陽明交通大學學生第二餐廳</p>
                        <a href="https://m.facebook.com/nctu.secondrestaurant/?locale2=zh_TW" target="_blank" class="btn">learn more</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-1.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our College Cafeteria and Food Court</span>
                        <h3>First Student Cafeteria</h3>
                        <p>國立陽明交通大學學生第一餐廳</p>
                        <a href="https://www.google.com/maps/place/%E5%9C%8B%E7%AB%8B%E4%BA%A4%E9%80%9A%E5%A4%A7%E5%AD%B8%E7%AC%AC%E4%B8%80%E9%A4%90%E5%BB%B3/@24.786524,120.9993977,15z/data=!4m2!3m1!1s0x0:0x3953d996be9468dd?sa=X&ved=2ahUKEwisoMKowOT3AhUWA94KHabeD0oQ_BJ6BAhREAU" target="_blank" class="btn">learn more</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-2.png" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our College Cafeteria and Food Court</span>
                        <h3>Graduate Dorm 3 Cafeteria</h3>
                        <p>國立陽明交通大學研 廳</p>
                        <a href="https://www.google.com/maps/place/%E4%BA%A4%E5%A4%A7%E7%A0%94%E4%B8%89%E8%88%8D/@24.7837412,120.997059,15z/data=!4m2!3m1!1s0x0:0x8b6a48e81b9133fd?sa=X&hl=zh-TW&ved=2ahUKEwj97cH6wOT3AhUMIIgKHSMgBP4Q_BJ6BAhHEAU" target="_blank" class="btn">learn more</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="">
                    </div>
                </div>
    
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Our College Cafeteria and Food Court</span>
                        <h3>Female Dorm 2 Cafeteria</h3>
                        <p>國立陽明交通大學女二舍餐廳</p>
                        <a href="https://www.google.com/maps/place/%E4%BA%A4%E9%80%9A%E5%A4%A7%E5%AD%B8%E5%A5%B3%E4%BA%8C%E5%AE%BF%E8%88%8D/@24.7846096,120.999461,15z/data=!4m2!3m1!1s0x0:0xbae16308385a4239?sa=X&ved=2ahUKEwiAr5iRweT3AhV4Q_UHHSKuA0wQ_BJ6BAhUEAU" target="_blank" class="btn">learn more</a>
                    </div>
                    <div class="image">
                        <img src="images/home-img-4.png" alt="">
                    </div>
                </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            </div> 
    
    </section>
    
    <!-- home section ends -->
    
    
    <!-- dishes section starts -->  

    <section class="functions" id="functions">

        <h3 class="sub-heading"> our functions </h3>
        <h1 class="heading">3 major features </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/function-1.png" alt="">
                <h3>calories calculation</h3>
                <a href="#" class="btn">Go !</a>
            </div>

            <div class="box">
                <img src="images/function-2.png" alt="">
                <h3>record analysis</h3>
                <a href="#" class="btn">Go !</a>
            </div>

            <div class="box">
                <img src="images/function-3.png" alt="">
                <h3>discussion form</h3>
                <a href="#" class="btn">Go !</a>
            </div>

        </div>

    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h3 class="sub-heading"> about us </h3>
        <h1 class="heading"> why choose us? </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.png" alt="">
            </div>

            <div class="content">
                <h3>best nutrition assistant</h3>
                <p>	&emsp; 面對如此難題，我們必須設想周全。胡適曾經認為，發明不是發財，是為人類。這激勵了我。在這種困難的抉擇下，本人思來想去，寢食難安。

                    世界上若沒有營養幫手，對於人類的改變可想而知。如果仔細思考營養幫手，會發現其中蘊含的深遠意義。培根人說過一句發人省思的話，閱讀使人充實，會談使人敏捷，寫作使人精確。這段話雖短，卻足以改變人類的歷史。營養幫手絕對是史無前例的。富蘭格林說過，擇友宜慎，棄之更宜慎。這段話非常有意思。對於營養幫手，我們不能不去想，卻也不能走火入魔。我以為我了解營養幫手，但我真的了解營養幫手嗎？仔細想想，我對營養幫手的理解只是皮毛而已。
            
                    培根曾講過，要追求真理，認識真理，更要依賴真理，這是人性中的最高品德。這段話可說是震撼了我。富蘭克林說過一句很有意思的話，惟堅韌者始能遂其志。這段話看似複雜，其中的邏輯思路卻清晰可見。愛獻生講過，思想重複一百遍也還有獨到之處。希望各位能用心體會這段話。所謂營養幫手，關鍵是營養幫手需要如何解讀。拉斯金在不經意間這樣說過，年輕時代是培養、希望及信仰的一段時光。這句話幾乎解讀出了問題的根本。</p>    
            </div>

        </div>

    </section>

    <!-- about section ends -->

    
    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#functions">functions</a>
                <a href="#about">about</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+886-3-5712121" target="_blank">+886-3-5712121</a>
                <a href="tel:+886-3-5729915" target="_blank">+886-3-5729915</a>
                <a href="https://www.nycu.edu.tw/" target="_blank">nycu.edu.tw</a>
                <a href="https://imf.nctu.edu.tw/" target="_blank">imf.nctu.edu.tw</a>
                <a href="https://goo.gl/maps/hz1Vc85b7J9hMEAN9" target="_blank">No. 1001, Daxue Rd. East Dist., Hsinchu City, Taiwan </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/" target="_blank">facebook</a>
                <a href="https://www.twitter.com/" target="_blank">twitter</a>
                <a href="https://www.instagram.com" target="_blank">instagram</a>
            </div>

        </div>

        <div class="credit"> Database Management final project @ 2021 by <span>Group 11</span> </div>

    </section>

    <!-- footer section ends -->
    
    <!-- loader part -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>
    





    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>
 
</body>
</html>