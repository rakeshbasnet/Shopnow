<?php
session_start();
 $db = mysqli_connect("localhost", "root", "", "shopNowDB");
 $con= mysqli_connect("localhost", "root", "", "registration");
/*echo "<script> history.go(-2);</script>";*/
$cname= $_POST['cname'];

$pname= $_POST['pname'];

$address= $_POST['address'];

$mobileNo= $_POST['mobileNo'];

$pay=$_POST['payMethod'];

$email=$_SESSION['email'];


$user=mysqli_query($con, "SELECT * FROM users WHERE email='$email' ");
$product=mysqli_query($db, "SELECT * FROM Products WHERE PName='$pname' ");

$row=mysqli_fetch_array($user);
$CustName=$row['username'];

$row1=mysqli_fetch_array($product);
$price=$row1['Price'];

echo $price;
echo $CustName;
$sql2 = "INSERT INTO Orders (Email,CustName,PName,CName,Price,Address,MobileNumber,PaymentMethod) VALUES ('$email','$CustName','$pname','$cname','$price','$address','$mobileNo','$pay')";
 mysqli_query($db, $sql2);

 /*echo $cname;
echo "<br>";
echo $pname;
echo "<br>";
echo $address;
echo "<br>";
echo $mobileNo;
echo "<br>";
echo $pay;
echo "<br>";
echo $email;*/

echo "<script> history.go(-2);</script>";
?> 