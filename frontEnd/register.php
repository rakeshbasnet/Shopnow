<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopnow</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="loginsignup.js"></script>
<style>
body{
background-image: url("logbac.jpg");
background-repeat: no-repeat;
background-attachment: fixed;
}
.formcontent{
  width:400px;
  height:auto;
  margin-left:400px;
  margin-top:60px;
  padding:5px;
  color:rgb(25,25,112);
  border:1px solid blue;
  background-color: white;
}
.formcontent input{
  width:300px;
  height:60px;
  margin:15px 20px 20px 40px;
}
.formcontent input:hover{
  background-color:rgb(212,212,212);
  }
.formcontent span{
  margin-left:40px;
}
.formcontent1{
  width:400px;
  height:auto;
  margin-left:400px;
  padding:5px;
  color:rgb(25,25,112);
  border:1px solid blue;
  background-color: white;
}
.formcontent1 input{
  width:300px;
  height:60px;
  margin:15px 20px 20px 40px;
}
.formcontent1 input:hover{
  background-color:rgb(212,212,212);
  }
.formcontent1 .radio{
  height:25px;
  display:block;
  margin-top:-20px;
}
.formcontent1 span{
  margin-left:40px;
}
</style>
</head>
<body>	
  <form method="post" action="mails.php">
  	<div id="new" class="formcontent1">
      <img src="logimg.png" width="100px" height="100px" style="margin-left:140px; margin-top:10px">
    <h3 style="margin-left:30px"> You are requested to enter valid data</h3>
 	 <input type="text" name="username" id="user" autocomplete="off" placeholder="Username" onchange="validation1()"><br>
    <span id="username" style="color:red"></span>
    <br>
    
    <input type="text" name="mobilenumber" id="mobile" autocomplete="off" placeholder="Mobile Number" onchange="validation1()"><br>
    <span id="mobilenumber" style="color:red"></span>
    <br>
   
    <input type="text" name="temporaryaddress" id="temporary" autocomplete="off" placeholder="Temporary Address" onchange="validation1()"><br>
    <span id="temporaryaddress" style="color:red"></span>
    <br>
  
    <input type="email" name="email" id="e-mail" autocomplete="off" placeholder="E-mail ID" onchange="validation1()"><br>
    <span id="email" style="color:red"></span>
    <br>
    
    <input type="password" name="password_1" id="pass" autocomplete="off" placeholder="Password" onchange="validation1()"><br>
    <span id="password" style="color:red"></span>
    <br>
     
    <input type="password" name="password_2" id="conpass" autocomplete="off" placeholder="Confirm Password " onchange="validation1()"><br>
    <span id="conpassword" style="color:red"></span>
    <br><br>
    Male:
    <input class="radio" type="radio" name="gender" value="Male" id="male" onchange="validation1()">
    Female:
    <input class="radio" type="radio" name="gender" value="Female" id="female" onchange="validation1()">
    <br>
    <span id="gender" style="color:red"> </span> 
    <input type="Submit" name="reg_user" value="Register" style="background-color:rgb(25,25,112); color:white ;font-size:20px"><br>

</form>
</div>
</body>
</html>