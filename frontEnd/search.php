<?php include ('header.php') ?>
<?php
	$db = mysqli_connect("localhost", "root", "", "shopNowDB");
	$search=strtolower($_POST['search']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopnow</title>
<link rel="stylesheet" type="text/css" href="../homepageStyle.css">
</head>
<body>
	<div class="foryou">
    <h3>Search Products</h3>
    <ul>

      <?php
      if($search=='laptop'||$search=='laptops'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Laptop'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Laptop'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	 else if($search=='desktop'||$search=='desktops'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Desktop'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Desktop'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='mobile'||$search=='mobiles'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Mobile'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Mobile'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='speaker'||$search=='speakers'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Speaker'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Speaker'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='lcd'||$search=='led'||$search=='lcd/led'||$search=='led/lcd'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='LED/LCD'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='LED/LCD'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='gaming console'||$search=='gaming consoles'||$search=='gaming'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='GamingConsole'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='GamingConsole'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='camera'||$search=='cameras'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Camera'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Camera'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='printers'||$search=='printer'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Printer'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Printer'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='cosmetics'||$search=='cosmetic'||$search=='cosmetic products'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Cosmetic'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Cosmetic'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='health and beauty'||$search=='health products'||$search=='beauty products'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='HealthBeauty'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='HealthBeauty'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='grocery'||$search=='pet'||$search=='groceries'||$search=='pets'||$search=='grocery and pet'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='GroceryPet'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='GroceryPet'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=="women's fashion"||$search=='women wear'||$search=='women fashion'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='WomenFashion'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='WomenFashion'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=="men's fashion"||$search=='men wear'||$search=='men fashion'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='MenFashion'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='MenFashion'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='sports and outdoor'||$search=='sports wear'||$search=='sports'||$search=='outdoor wear'||$search=='outdoor'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Sports'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Sports'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='automotive'||$search=='automotives'||$search=='car'||$search=='cars'||$search=='bikes'||$search=='bike'||$search=='motorbikes'||$search=='motorbike'){

      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Automotive'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Automotive'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='tv'||$search=='tvs'||$search=='televisions'||$search=='home appliances'||$search=='homeappliances'){

      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='HomeAppliance'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='HomeAppliance'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='latest products'||$search=='latestproduct'||$search=='latest'||$search=='latest product'||$search=='latestproducts'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Latest Product'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Latest Product'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else if($search=='winter sale'||$search=='wintersale'||$search=='winter sales'||$search=='wintersales'){
      	$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM tbl_specialSale WHERE Name='Winter Sale'");

    	while ($row = mysqli_fetch_array($productresult)) {
	     	echo "<li>";
	      echo "<form action='description1.php' method='POST'>";
	      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
	      echo "<input type='hidden' name='tname' value='Products'/>";
	      echo "<input type='hidden' name='cname' value='Winter Sale'/>";
	      echo "<button type='submit' name='desButton'>";
	      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
	      echo "<h4>".$row['PName']."</h4>";
	      echo "<span>".$row['Description']."</span>";
	      echo "<p> Price: ".$row['Price']."</p>";
	      echo "</button></form>";
	      echo "</li>";
    	}
  	}

  	else{
  		$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE PName='$search'");

  		if(mysqli_num_rows($productresult)==1)
  		{

	    	while ($row = mysqli_fetch_array($productresult)) {
		     	echo "<li>";
		      echo "<form action='description1.php' method='POST'>";
		      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
		      echo "<input type='hidden' name='tname' value='Products'/>";
		      echo "<input type='hidden' name='cname' value='".$row['CName']."'/>";
		      echo "<button type='submit' name='desButton'>";
		      echo"<img src='../admin/Products/".$row['Image']."' width='200px' height='180px'>";;
		      echo "<h4>".$row['PName']."</h4>";
		      echo "<span>".$row['Description']."</span>";
		      echo "<p> Price: ".$row['Price']."</p>";
		      echo "</button></form>";
		      echo "</li>";
    		}
    	}
    	else{
    		echo '<script> alert("The product You entered is not available")</script>';
    		echo "<script> history.go(-1);</script>";
    		
    	}
  	}

  ?>

</ul>
</div>
<hr>
<?php include ('footer.php') ?>
</body>
</html>