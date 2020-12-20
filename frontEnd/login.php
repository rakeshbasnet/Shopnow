<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopnow</title>
<link rel="stylesheet" type="text/css" href="style.css">
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
  margin-top:180px;
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
  	<div class="formcontent">
  <img src="logimg.png" width="100px" height="100px" style="margin-left:140px; margin-top:10px">
  <h3 style="margin-left:80px">Not yet a member? <a href="register.php">Click here</a></h3>
  <form action="server.php" method="post" onsubmit="return validation()">
    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email Address" autofocus="" required><br>
    <span id="email" style="color:red"></span>
    <br>
    <input type="password" name="password" id="pas" autocomplete="off" placeholder="Password" required><br>
    <span id="pasword" style="color:red"></span>
    <br>
    <input type="Submit" name="login_user" value="Log In" style="background-color:rgb(25,25,112); color:white ;font-size:20px">
  </form>
</div>
<script type="text/javascript">
  function validation(){
    var pass=document.getElementById("pas").value;

    if((pass.length<8) || (pass.length>20)){
      document.getElementById("pasword").innerHTML="**password length should be in between 8 and 20 ";
      return false;
    }
    else{
      document.getElementById("pasword").innerHTML="";
      
    }

  }
</script>
</body>
</html>