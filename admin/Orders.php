<?php
   $db = mysqli_connect("localhost", "root", "", "shopNowDB");
   $orders = mysqli_query($db, "SELECT * FROM Orders");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="topnav.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #008B8B
}
 
 #orderbox { 
  float:left; 
  width:auto; 
  height:auto; 
  background-color:rgb(25,25,112); 
  border:solid black; 
padding-top:10px;
margin-top: 10px;
margin-left: 25px;
color: white;
        } 

</style>
</head>
<body>
  <div class="topnav">
    <center><h1 style="font-family: 'Californian FB'; font-size: 70px; color: brown;">Shopnow Admin Panel</h1></center><hr>
  <a href="LatestProduct.php">New Product</a>
  <a href="slideContent.php">Slide Show Content</a>
  <a href="SpecialSaleContent.php">Special Sale Content</a>
  <a href="Orders.php">Orders</a>  
  </div> 
  <div class="container">
      <?php
      $count=1;
    while ($row = mysqli_fetch_array($orders)) {
      echo "<div id='orderbox'>";
      echo "Order No: ".$count;
      echo "<br>";
      echo "<b>Name of Customer: </b>".$row['CustName'];
      echo "<br>";
      echo "<b>Email: </b>".$row['Email'];
      echo "<br>";
      echo "<b>Contact No: </b>".$row['MobileNumber'];
      echo "<br>";
      echo "<b>Address of Delivery: </b>".$row['Address'];
      echo "<br>";
      echo "<b>Name Of Product: </b>".$row['PName'];
      echo "<br>";
      echo "<b>Name of Category: </b>".$row['CName'];
      echo "<br>";
      echo "<b> Price: </b>".$row['Price'];
      echo "<br>";
      echo "<b>Payment Method: </b>".$row['PaymentMethod'];
      echo "<br>";
      echo "<b>Ordered Date and Time: </b>".$row['Order_time'];
      echo "</div>";
      $count=$count+1;
    }
  ?>
</body>
</html>
