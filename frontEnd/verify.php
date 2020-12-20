
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
  <form method="post" action="final.php">
  	<div class="formcontent">
    <input type="text" name="verify" autocomplete="off" placeholder="Email verification Code">
    <input type="Submit" value="Verify Code" style="background-color:rgb(25,25,112); color:white ;font-size:20px">
	</div>
  </form>
</body>
</html>