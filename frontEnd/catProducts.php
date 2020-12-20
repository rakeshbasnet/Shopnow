<?php
$db = mysqli_connect("localhost", "root", "", "shopNowDB");

$cname=$_POST['cname'];

$productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='$cname'");
?>
<?php include ('header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopnow</title>
<link rel="stylesheet" type="text/css" href="homepageStyle.css">
</head>
<body>
<div class="foryou">
    <h3>Latest Items</h3>
    <ul>

      <?php
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
  ?>
</ul>
</div>
<?php include ('footer.php') ?>
</body>
</html>
