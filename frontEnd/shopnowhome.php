<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "shopNowDB");

  $hotsaleresult = mysqli_query($db, "SELECT * FROM table_hotsale");
  $productresult = mysqli_query($db, "SELECT PName,CName,Price,Description,Image FROM Products WHERE CName='Latest Product' ");
  $specialSale=mysqli_query($db, "SELECT * FROM tbl_specialSale");
  $specialSale1 = mysqli_query($db, "SELECT * FROM tbl_specialSale");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopnow</title>
<link rel="stylesheet" type="text/css" href="homepageStyle.css">
<style>
.dashain{
  width:auto;
  height:600px;
  position: relative;
  animation: myfirst 1s linear 1s infinite alternate;
}
@keyframes myfirst {
  0%   {background-color:pink;}
  10%  {background-color:yellow;}
  20%  {background-color:orange;}
  30%  {background-color:blue;}
  40% {background-color:purple;}
  50% {background-color:red;}
  60% {background-color:grey;}
  70% {background-color:white;}
  80% {background-color:cyan;}
  90% {background-color:orange;}
  100% {background-color:red;}
}
* {box-sizing: border-box;}
body {font-family: arial, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 100%;
  position: relative;
  margin:auto;
}
.active {
  background-color: #717171;
}
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .8} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .8} 
  to {opacity: 1}
}

span{
    display: inline-block;
    width: 180px;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
  }
  .catButton{
     background:none;
    border:none;
    margin:0;
    padding:0;
    cursor: pointer;
    font-size: 16px;
  }

</style>
</head>
<body>
    <div class="upper">
    <ul class="up">
    <li><a href ="Registration/login.php">Login&Signup</a></li>
    <li><a href ="ContactUs.html">ContactUs</a></li>
    <li><a href ="aboutus.html">AboutUs</a></li>
  </ul>
    <a href="shopnowhome.php"><img src="shopnow.png" altr="brand pic" width="140px" height="35px"></a>
    <div class="search">
    <form>
      <input type="text" placeholder="Input text you want to search..." name="search">
      <button type="submit">Search</button>
    </form>
  </div>
  </div>
  <div class="categories">
      <ul>
        <li><strong>Categories</strong>
          <ul>
            <li><button class="catButton">Electronics</button>
              <ul>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Laptop'/>
                    <button class=catButton type='submit' name='desButton'>laptops</button>
                  </form> 
                </li>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Desktop'/>
                    <button class=catButton type='submit' name='desButton'>Desktops</button>
                  </form> 
                </li>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Mobile'/>
                    <button class=catButton type='submit' name='desButton'>Mobiles</button>
                  </form> 
                </li>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Speaker'/>
                    <button class=catButton type='submit' name='desButton'>Speakers</button>
                  </form> 
                </li>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='LED/LCD'/>
                    <button class=catButton type='submit' name='desButton'>LED/LCD</button>
                  </form> 
                </li>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='GamingConsole'/>
                    <button class=catButton type='submit' name='desButton'>Gaming Consoles</button>
                  </form> 
                </li>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Camera'/>
                    <button class=catButton type='submit' name='desButton'>Cameras</button>
                  </form> 
                </li>
                <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Printer'/>
                    <button class=catButton type='submit' name='desButton'>Printers</button>
                  </form> 
                </li>
              </ul>
            </li>

              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Cosmetic'/>
                    <button class=catButton type='submit' name='desButton'>Cosmetics</button>
                  </form> 
              </li>
              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='HealthBeauty'/>
                    <button class=catButton type='submit' name='desButton'>Health & Beauty</button>
                  </form> 
              </li>
              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='GroceryPet'/>
                    <button class=catButton type='submit' name='desButton'>Groceries & Pets</button>
                  </form> 
              </li>
              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='WomenFashion'/>
                    <button class=catButton type='submit' name='desButton'>Women's Fashion</button>
                  </form> 
              </li>
              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='MenFashion'/>
                    <button class=catButton type='submit' name='desButton'>Men's Fashion</button>
                  </form> 
              </li>
              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Sports'/>
                    <button class=catButton type='submit' name='desButton'>Sports & Outdoor</button>
                  </form> 
              </li>
              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='Automotive'/>
                    <button class=catButton type='submit' name='desButton'>Automotive & Moterbike</button>
                  </form> 
              </li>
              <li> 
                  <form action='catProducts.php' method='POST'>
                    <input type='hidden' name='cname' value='HomeAppliance'/>
                    <button class=catButton type='submit' name='desButton'>TV & Home appliances</button>
                  </form> 
              </li>
            </ul>
          </li>
        </ul>
</div>
<hr>
<div class="dashain">
<div class="slideshow-container">

  <?php
    while ($row = mysqli_fetch_array($hotsaleresult)) {
      echo "<div class='mySlides fade'>";
        echo "<img src='../admin/Hotsales/".$row['Image']."' style='width:100%;' height= '600px'>";
        /*echo "<div class='text'>".$row['Description']."</div>";*/
      echo "</div>";
    }
  ?>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 4000);
}
</script>

  <div class="teej">
    <?php
      $row = mysqli_fetch_array($specialSale1);
       echo "<h3>".$row['Name']."</h3>";
    ?>
   <!--  <h3>Teej Special</h3> -->
 </div>
<div class="body">
  <ul>
      <?php
    while ($row = mysqli_fetch_array($specialSale)) {
      echo "<li>";
      echo "<form action='description.php' method='POST'>";
      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
      echo "<input type='hidden' name='cname' value='Special Sale'/>";
      echo "<button type='submit' name='desButton'>";
      echo "<img src='../admin/tbl_specialSale/".$row['Image']."' width='200px' height='180px'>";;
      echo "<h4>".$row['PName']."</h4>";
      echo "<span>".$row['Description']."</span>";
      echo "<p> Price: ".$row['Price']."</p>";
      echo "</button></form>";
      echo "</li>";
    }
  ?>
    </ul>
    </div>

  <div class="foryou">
  	<h3>Latest Items</h3>
    <ul>

      <?php
    while ($row = mysqli_fetch_array($productresult)) {
      echo "<li>";
      echo "<form action='description.php' method='POST'>";
      echo "<input type='hidden' name='pname' value='".$row['PName']."'/>";
      echo "<input type='hidden' name='cname' value='Latest Product'/>";
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

  <div class="bot">   
    <ul class="left">
      <h3>Customer Care</h3> 
      <li>Help Desk</li>
      <li>How to Buy</li>
      <li>Track Our Order</li>
      <li>Returns and Refunds</li>
      <li>Contack Us</li>
    </ul>
    <ul class="middle">
      <h3>Shopnow</h3> 
      <li>About Us</li>
      <li>Careers</li>
      <li>Shopnow Cares</li>
      <li>Shopnow Blog</li>
      <li>Digital Payment</li>
    </ul>   
    <ul class="right">
      <h3>Available On</h3>
      <li><img src="google.png" width="200px" height="60px"> </li>
      <li><img src="apple.jpg" width="200px" height="60px"> </li>
    </ul>
   <div class="barcode">
    <img src="barcode.jpg" width="200px" height="200px" style="margin-top:25px"> 
  </div>
  </div>
<p id="copy">&#169Shopnow 2019</p>
</body>
</html>
