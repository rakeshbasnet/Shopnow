<?php
  // Create database connection
  session_start();
  $db = mysqli_connect("localhost", "root", "", "shopNowDB");
  $result = mysqli_query($db, "SELECT * FROM Latest_product");
?>

<!DOCTYPE html>
<html>
<head>
<title>ShopNow Products</title>
<link rel="stylesheet" type="text/css" href="topnav.css">
<link rel="stylesheet" type="text/css" href="slide.css">
<style type="text/css">
  body{
    background-color: #FFE4B5;
  }
   #content{
    width: 100%;
    height: auto;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   
   #img_div{
    float: left;
    width: 17%;
    height: 20%
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   button{
    background-color:#E0FFFF;
   }
   img{
   /* float: left;*/
    margin: 5px;
    width: 200px;
    height: 140px;
   }
  span{
    display: inline-block;
    width: 180px;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
  }
</style>
</head>
<body>
<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      echo "<form action='description.php' method='POST'>";
      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
      echo "<button type='submit' name='desButton'>";
        echo "<img src='../admin/Latest_product/".$row['Image']."' >";
         echo "<center><p>".$row['PName']."</p></center>";
        echo "<center><span>Description: ".$row['Description']."</span></center>";
         echo "<center><p> Price: ".$row['Price']."</p></center>";
      echo "</button></form></div>";
    }
  ?>
  <a href=""><button>Return</button></a>
</div>
</body>
</html>