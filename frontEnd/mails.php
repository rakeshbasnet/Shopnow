
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];

	$user_check_query = "SELECT * FROM users WHERE email='$email'  LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  	
    if ($user) { // if user exists
        if ($user['email'] === $email) {
            echo '<script> alert("Email already exist. Recover password");</script>';
            include ('login.php');
        }
      }

       else{

       		$_SESSION['username']=$_POST['username'];
			$_SESSION['mobileNumber']=$_POST['mobilenumber'];
			$_SESSION['tempAddress']=$_POST['temporaryaddress'];
			$_SESSION['email']=$_POST['email'];
			$_SESSION['password']=$_POST['password_1'];
			$_SESSION['gender']=$_POST['gender'];

			
        	$msg = rand(1000,9999);

			/*$md=$_POST['email'];*/
			mail($email," ShopNow verification code","Your verification code for ShopNow is: ".$msg);
			$sql = "INSERT INTO tab(vp)
			VALUES ($msg)";

			if ($conn->query($sql) === FALSE) {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			} 
			include('verify.php');
        }

$conn->close();
?>


	 