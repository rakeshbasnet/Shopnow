<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "shopNowDB");

  $result = mysqli_query($db, "SELECT * FROM table_product");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shopnow SlideShow</title>
<link rel="stylesheet" type="text/css" href="topnav.css">
<link rel="stylesheet" type="text/css" href="slide.css">
<style type="text/css">
body{
		margin: 0;
		font-family: Arial, Helvetica, sans-serif;
		background: #6495ED;
	}
</style>
</head>
<body>

<!-- Top Navigation-->
<div class="topnav">
 	<a href="homePage.html">Home</a>
 	<a href="AboutUs.html">About us</a>
 	<a href="Contact.html">Contact</a>
</div>


<!-- First Silde Show Part-->
<div class="slideshow-container">

<?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div class='mySlides fade'>";
        echo "<img src='../admin/ProductImages/".$row['Image']."'style='width:100%;'>";
        echo "<div class='text'>".$row['Description']."</div>";
      echo "</div>";
    }
  ?>

 <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<script src="slide.js"></script>
</body>
</html>