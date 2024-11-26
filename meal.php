<?php
require_once dirname(__FILE__) . "/include/head.php";
require_once dirname(__FILE__) . "/login_nav.php";
?>

    
    <!-- dishes section starts -->  


    <section class="functions" id="functions">

        <h3 class="sub-heading"> our functions </h3>
        <br><br>
        <div>
            <label>
                <p class="heading"><b>Search</b></p>
                <input 
                    id="search_text" 
                    type="text" 
                    class="input" 
                    name="search_text"
                    placeholder="餐點名稱、地點條件搜尋"
                    autocomplete="Off" 
                    required=""
                >
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </label>
        </div>
        

        <br><br>
        <div id="search_result"></div>
        </h1>

        <br><br>
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

    <script>
        $(document).ready(function () {

            load_data();

            function load_data(query) {
                $.ajax({
                    url: "models/search.php",
                    method: "GET",
                    data: {
                        s: query
                    },
                    success: function (data) {
                        $('#search_result').html(data);
                    }
                });
            }
            $('#search_text').keyup(function () {
                var search = $(this).val();
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });
    </script>

    <!-- Modal -->
    <div class="modal fade"
        id="protein"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <!-- Add image inside the body of modal -->
                <div class="modal-body">
                    <img id="image" style="width: 100%" src="images/protein.JPG" />
                </div>

                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">
                        Close
                </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade"
        id="fat"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <!-- Add image inside the body of modal -->
                <div class="modal-body">
                    <img id="image" style="width: 100%" src="images/fat.JPG" />
                </div>

                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">
                        Close
                </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade"
        id="carbohydrate"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            
                <!-- Add image inside the body of modal -->
                <div class="modal-body">
                    <img id="image" style="width: 100%" src="images/carbohydrate.JPG" />
                </div>

                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">
                        Close
                </button>
                </div>
            </div>
        </div>
    </div>

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
    
    
 
</body>
</html>

<style>

input {
    width: 1200px;
    padding: 10px;
    background: transparent;
    border: none;
    outline: none;
}

.heading {
    text-align:left;
    margin-bottom: 30px;
    font-weight: bolder;
    color: #192a56;
    font-size: 2.5rem;
}


.line-box {
  position: absolute;
  width: 100%;
  height: 2px;
  background: #c2c2c2;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #27ae60;
  transition: ease .6s;
}

input:focus+.line-box .line {
  width: 100%;
}

</style>