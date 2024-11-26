<?php
require_once dirname(__FILE__) . "/include/head.php";
require_once dirname(__FILE__) . "/login_nav.php";
?>
    
    <!-- dishes section starts -->  

    <section class="functions" id="functions">
    <?php
      require_once("models/dbtools.inc.php");
      echo "<br><br><br>";

      $records_per_page = 5;

      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;

      $link = create_connection();
      $sql = "SELECT * FROM message ORDER BY date DESC";    
      $result = execute_sql($link, "guestbook", $sql);

      $total_records = mysqli_num_rows($result);
      $total_pages = ceil($total_records / $records_per_page);
      $started_record = $records_per_page * ($page - 1);
      mysqli_data_seek($result, $started_record);

      //color of pages
      $bg[0] = "#D9D9FF";
      $bg[1] = "#FFCAEE";
      $bg[2] = "#FFFFCC";
      $bg[3] = "#B9EEB9";
      $bg[4] = "#B9E9FF";

      echo "<table width='800' align='center' cellspacing='3'>";

      $j = 1;
      while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page)
      {
        echo "<tr bgcolor='" . $bg[$j - 1] . "'>";
        /*echo "<td width='120' align='center'>
              <img src='" . mt_rand(0, 9) . ".gif'></td>";*/
        echo "<td>作者：" . $row["author"] . "<br>";
        echo "主題：" . $row["subject"] . "<br>";
        echo "時間：" . $row["date"] . "<hr>";
        echo $row["content"] . "</td></tr>";
        $j++;
      }
      echo "</table>" ;
      echo "<p align='center'>";

      if ($page > 1)
        echo "<a href='community.php?page=". ($page - 1) . "'>上一頁</a> ";

      for ($i = 1; $i <= $total_pages; $i++)
      {
        if ($i == $page)
          echo "$i ";
        else
          echo "<a href='community.php?page=$i'>$i</a> ";
      }

      if ($page < $total_pages)
        echo "<a href='community.php?page=". ($page + 1) . "'>下一頁</a> ";
      echo "</p>";

      //釋放記憶體空間
      mysqli_free_result($result);
      mysqli_close($link);
    ?>
    </section>
    
  

    <script>
      function check_data()
      {
        if (document.myForm.author.value.length == 0)
          alert("作者欄位不可以空白哦！");
        else if (document.myForm.subject.value.length == 0)
          alert("主題欄位不可以空白哦！");
        else if (document.myForm.content.value.length == 0)
          alert("內容欄位不可以空白哦！");
        else
          myForm.submit();
      }
    </script>
    <section>
    <form name="myForm" method="post" action="post.php">
      <table border="0" width="800" align="center" cellspacing="0">
        <tr bgcolor="#0084CA" align="center">
          <td colspan="2">
            <font color="#FFFFFF">請在此輸入新的文章</font></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">作者</td>
          <td width="85%"><input name="author" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#84D7FF">
          <td width="15%">主題</td>
          <td width="85%"><input name="subject" type="text" size="50"></td>
        </tr>
        <tr bgcolor="#D9F2FF">
          <td width="15%">內容</td>
          <td width="85%"><textarea name="content" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="button" value="張貼留言" onClick="check_data()">　
            <input type="reset" value="重新輸入">
          </td>
        </tr>
      </table>
    </form>  
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
                <a href="tel:+123-456-7890" target="_blank">+123-456-7890</a>
                <a href="tel:+111-222-3333" target="_blank">+111-222-3333</a>
                <a href="mailto:aloha@gmail.com" target="_blank">aloha@gmail.com</a>
                <a href="mailto:sayonara" target="_blank">sayonara@gmail.com</a>
                <a href="https://www.google.com/maps/place/300%E6%96%B0%E7%AB%B9%E5%B8%82%E6%9D%B1%E5%8D%80/@24.7884927,120.9957944,13z/data=!3m1!4b1!4m5!3m4!1s0x3468360f040b14ad:0xcd55cf119bea29e6!8m2!3d24.7920609!4d120.993378" target="_blank">East Dist., Hsinchu City, Taiwan </a>
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
  width: 100%;
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