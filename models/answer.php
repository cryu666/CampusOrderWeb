<!DOCTYPE html>
<html>
<link rel="stylesheet" href="extrafunction.css">

<?php

require_once dirname(__FILE__)."/checkdb.php";
   
if (isset($_POST['search'])){
  $query = [
    'illness' => htmlspecialchars($_POST['search']),
  ];
 
  $conn = checkdb();

  checkData($query['illness'], $conn);
}

if (isset($_POST['search2'])){
  $query = [
    'illness' => htmlspecialchars($_POST['search2']),
  ];
 
  $conn = checkdb();

  checkData($query['illness'], $conn);
 
}




function checkData($illness, $conn) {
  $sql = "SELECT id, nuneed,searchno,nuno FROM suggestion WHERE illness = '$illness'";
  // $sql = "SELECT id, nuneed FROM suggestion";
  $result = mysqli_query($conn, $sql);

  $sql2=" UPDATE suggestion SET searchno=searchno+1  WHERE illness = '$illness'";
  mysqli_query($conn, $sql2);

  

  if(mysqli_num_rows($result) == 0) {
    echo "no such illness";
    header("no such illness is found");   
  } 
  else {
    echo "<h1> $illness need to be solved by consuming: </h1><br>";
    $x=0;
    
    while($row = mysqli_fetch_assoc($result))
    {
      
        $_SESSION['id'][$x] = $row['id'];
        $_SESSION['nuneed'][$x] = $row['nuneed'];
        $_SESSION['searchno'][$x] =$row['searchno'];
        $y=$row['nuno'];
        // echo "x=".$x;
        // echo '<br>';  
        // echo $_SESSION['id'][$x]."|";
        // echo '<br>';  

        // echo $_SESSION['nuneed'][$x];
        // echo '<br>';
        $temp=$_SESSION['nuneed'][$x];
        
        echo"<a style='background-color:DodgerBlue'> $temp </a><br>";
        // echo"<br>";

        $sql4="SELECT `nuneed`,`food` FROM `nutrition` WHERE ID=$y";
        $result2=mysqli_query($conn, $sql4);
        while($row2 = mysqli_fetch_assoc($result2))
        {
            //for split the string with ,
            $array=explode("，",$row2['food']);
            //print_r($array);
            
            foreach($array as $value) //loop over values
            {
                echo $value . PHP_EOL . "<br>"; //print value
            }
            echo"<br>";
        }
      
        $x+=1;
    }
   

  }

  $conn->close();
}

?>
<style>

a {
  text-decoration: none;
  color: white;
  
  /*background-color: SteelBlue;*/
  padding: 8px 16px;
  text-align: center;
  display: inline-block;
  border-radius: 8px;
  transition-duration: 0.4s;
  cursor: pointer;

}

a:hover {
  background-color: #1b3253;
  color: white;

 
} 
</style>