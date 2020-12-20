<?php
session_start();
// connect to the database
$db = new mysqli('localhost', 'root', '', 'registration');

  $email =  $_POST['email'];
  $pass = $_POST['password'];
  	$password = md5($pass);
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
    $row=mysqli_fetch_array($results);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['name']=$row['username'];
  	  $_SESSION['email'] = $email;
      //setcookie('email',$email,date()+5);
  	  header('location: index.php');
      //echo '<script>location.href = "index.php";</script>';

  	}
    else {
      include('login.php');
      echo '<script> alert("Wrong email/password combination")</script>';
  	}

?>