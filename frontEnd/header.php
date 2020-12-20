<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
?>

<?php 
  session_start();
  if (!isset($_SESSION['email'])){
  	/*$_SESSION['msg'] = "You must log in first";*/
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	unset($_SESSION['email']);
    session_destroy();
    //setcookie('email','$email',date()-1);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopnow</title>
<link rel="stylesheet" type="text/css" href="homepageStyle.css">
<style type="text/css">
  .category{
     text-decoration: none;
     color: black;
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

    <?php  if (isset($_SESSION['email'])) : ?>
    <li> <a href="index.php?logout='1'">Logout</a></li>
    <?php endif ?>
   
    <li><a href ="/shopnow/frontEnd/contactus.php">ContactUs</a></li>
    <li><a href ="/shopnow/frontEnd/aboutus.php">AboutUs</a></li>
  </ul>
    <a href="/shopnow/frontEnd/index.php"><img src="shopnow.png" altr="brand pic" width="140px" height="35px"></a>
    <div class="search">
    <form action="search.php" method="POST">
      <input type="text" placeholder="Input text you want to search..." name="search" required autocomplete="none">
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

  <!-- <div class="categories">
      <ul>
        <li><strong>Categories</strong>
          <ul>
            <li>Electronics
              <ul>
                <li><a href="/shopnow/frontEnd/catePages/Laptop.php" class="category">Laptops</a></li>
                <li><a href="/shopnow/frontEnd/catePages/Desktop.php" class="category">Desktops</a></li>
                <li><a href="/shopnow/frontEnd/catePages/Mobile.php" class="category">Mobiles</a></li>
                <li><a href="/shopnow/frontEnd/catePages/Speaker.php" class="category">Speakers</a></li>
                <li><a href="/shopnow/frontEnd/catePages/LCD.php" class="category">LCD/LED</a></li>
                <li><a href="/shopnow/frontEnd/catePages/Gaming.php" class="category">Gaming Consoles</a></li>
                <li><a href="/shopnow/frontEnd/catePages/Camera.php" class="category">Cameras</a></li>
                <li><a href="/shopnow/frontEnd/catePages/Printer.php" class="category">Printers</a></li>
              </ul>
            <li><a href="/shopnow/frontEnd/catePages/Cosmetic.php" class="category">Cosmetics</a></li>
            <li><a href="/shopnow/frontEnd/catePages/Health.php" class="category">Health & Beauty</a></li>
            <li><a href="/shopnow/frontEnd/catePages/Grocery.php" class="category">Groceries & Pets</a></li>
            <li><a href="/shopnow/frontEnd/catePages/WomenFashion.php" class="category">Women's Fashion</a></li>
            <li><a href="/shopnow/frontEnd/catePages/MenFashion.php" class="category">Men's Fashion</a></li>
            <li><a href="/shopnow/frontEnd/catePages/Sports.php" class="category">Sports & Outdoor</a></li>
            <li><a href="/shopnow/frontEnd/catePages/Automotive.php" class="category">Automotive & Moterbike</a></li>
            <li><a href="/shopnow/frontEnd/catePages/HomeAppliance.php" class="category">TV & Home appliances</a></li>
            </ul>
          </li>
          </ul>
        </li>
      </ul>
    </div> -->
<hr>
</body>
</html>