<?php
require_once dirname(__FILE__) . "/include/head.php";
require_once dirname(__FILE__) . "/login_nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NYCU NuA+</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/363be58aa7.js" crossorigin="anonymous"></script>


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

    <style>
     .button{
          background-color: #c0d4e3; /* Green */
          border: none;
          color: white;
          padding: 8px 16px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: px 2px;
          transition-duration: 0.4s;
          cursor: pointer;
          border-radius: 8px;
      }
      .button4 {
      background-color: white;
      color: black;
      border: 2px solid #e7e7e7;
    }
    .button4:hover {background-color: #e7e7e7;}
    </style>

<body>

    
    
    <!-- dishes section starts -->  
    
    <section class="functions" id="functions">
        <br><br><br><br>
        <fieldset>
             <legend><h2>自我檢測:</h2></legend>

            <form  action="models/answer.php" method="post" target="_blank"> 
                    <!-- <input list="illness" class="search-bar" type="text" name="search" id="search" placeholder="輸入身體狀況"> -->
              
                <select  class="search-bar" name="search"  type=text >
                    <option value="皮膚乾燥">皮膚乾燥</option>
                    <option value="頭髮乾枯">頭髮乾枯</option>
                    <option value="眼睛乾燥、畏光、多淚">眼睛乾燥、畏光、多淚</option>
                    <option value="四肢發麻">四肢發麻</option>
                    <option value="食慾不振">食慾不振</option>
                    <option value="消化不良">消化不良</option>
                    <option value="肌肉軟弱無力">肌肉軟弱無力</option>
                    <option value="易浮腫">易浮腫</option>
                    <option value="嘴唇發紅">嘴唇發紅</option>
                    <option value="口腔潰瘍">口腔潰瘍</option>
                    <option value="出現各種皮膚病">出現各種皮膚病</option>
                    <option value="對光有過度敏感的反應">對光有過度敏感的反應</option>
                    <option value="肌肉失調">肌肉失調</option>
                    <option value="神經障礙">神經障礙</option>
                    <option value="妊娠出現過度的噁心、嘔吐">妊娠出現過度的噁心、嘔吐</option>
                    <option value="貧血">貧血</option>
                    <option value="月經不調">月經不調</option>
                    <option value="食慾不振">食慾不振</option>
                    <option value="記憶力減退">記憶力減退</option>
                    <option value="傷口不易癒合">傷口不易癒合</option>
                    <option value="牙齒出血">牙齒出血</option>
                    <option value="容易感冒">容易感冒</option>
                    <option value="多汗">多汗</option>
                    <option value="心情抑鬱">心情抑鬱</option>
                </select>
                <button class="search-btn" >
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>    
            </form>

            <form  action='models/answer.php' method='post' target='_blank' id="form2"> <form>

            <?php 
            echo"<h3>TRENDING SEARCH:</h3>";
            

            require_once dirname(__FILE__)."/models/answer.php";

            $conn = mysqli_connect("localhost","root","root","guestbook");

            $sql3="SELECT DISTINCT illness FROM `suggestion`
            WHERE `searchno` IN 
            (SELECT `searchno` 
             FROM `suggestion` 
             ORDER BY `id` DESC
            ) 
            LIMIT 5";

            $result = mysqli_query($conn,$sql3);
            if(mysqli_num_rows($result) == 0) {
                echo "no recommedation";
                header("no recommedation");   
              } 
              else {
                $x=0;
                while($row = mysqli_fetch_assoc($result))
                {
                    $_SESSION['illness'][$x] = $row['illness'];

                    $temp2=$_SESSION['illness'][$x];
                  
                    echo "<button class='button button4'type='submit' form='form2' name= 'search2' value='$temp2'> $temp2 </button>";
                }
              }
            ?>
        </fieldset>
    </section>

    <!-- dishes section ends -->

    

    
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
    <!--
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>
    -->
    
    





    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>


 
</body>
</html>