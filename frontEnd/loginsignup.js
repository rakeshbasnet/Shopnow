 function validation1(){
    var user = document.getElementById("user").value;
    var mobile = document.getElementById("mobile").value;
    var temporary = document.getElementById("temporary").value;
    var email = document.getElementById("e-mail").value;
    var pass = document.getElementById("pass").value;
    var conpass = document.getElementById("conpass").value;
    var male= document.getElementById("male").checked;
    var female=document.getElementById("female").checked;

    var patt=/^[a-zA-Z ]+$/;

      if(user== ""){
        document.getElementById("username").innerHTML= "**please enter username";
        document.getElementById("username").focus();
        return false;
      }
       if( (user.length <3) || (user.length >20)){
        document.getElementById("username").innerHTML="**username length must be between 3 and 20"
        document.getElementById("username").focus();
        return false;
      }
      if(!user.match(patt)){
        document.getElementById("username").innerHTML="**only characters are allowed"
        document.getElementById("username").focus();
        return false;
      }
      else{
      document.getElementById("username").innerHTML="";
    }
       
       if(mobile== ""){
        document.getElementById("mobilenumber").innerHTML= "**please enter mobilenumber";
        document.getElementById("mobilenumber").focus();
        return false;
      }
      if(isNaN(mobile)){
        document.getElementById("mobilenumber").innerHTML="**please enter the digits only";
        document.getElementById("mobilenumber").focus();
        return false;
      }
      if(mobile.length !=10){
        document.getElementById("mobilenumber").innerHTML="**mobile number must be of 10 digits"
        document.getElementById("mobilenumber").focus();
        return false;
      }
      else{
      document.getElementById("mobilenumber").innerHTML="";
    }

       if(temporary== ""){
        document.getElementById("temporaryaddress").innerHTML= "**please insert your address";
        document.getElementById("temporaryaddress").focus();
        return false;
      }
      else{
      document.getElementById("temporaryaddress").innerHTML="";
    }

       if(email== ""){
        document.getElementById("email").innerHTML= "**please insert emailID";
        document.getElementById("email").focus();
        return false;
      }
      if(email.indexOf('@')<=0){
        document.getElementById("email").innerHTML= "**invalid '@' position";
        document.getElementById("email").focus();
        return false;
      }
      if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
        document.getElementById("email").innerHTML="**invalid '.' position"
        document.getElementById("email").focus();
        return false;
      }
      else{
      document.getElementById("email").innerHTML="";
    }


       if(pass== ""){
        document.getElementById("password").innerHTML= "**please insert password";
        document.getElementById("password").focus();
        return false;
      }
      if( (pass.length <8) || (pass.length >20)){
        document.getElementById("password").innerHTML= "**password length must be between 8 and 20"
        document.getElementById("password").focus();
        return false;
      }
      else{
      document.getElementById("password").innerHTML="";
    }

      if(conpass== ""){
        document.getElementById("conpassword").innerHTML= "**please confirm your password";
        document.getElementById("conpassword").focus();
        return false;
      }
      if(pass!=conpass){
        document.getElementById("conpassword").innerHTML= "**password donot match";
        document.getElementById("conpassword").focus();
        return false;
      } 
      else{
      document.getElementById("conpassword").innerHTML="";
    } 

      if((male== false) && (female== false)){
        document.getElementById("gender").innerHTML= "**please select gender";
        document.getElementById("gender").focus();
        return false;
      }
      else{
      document.getElementById("gender").innerHTML="";
    }
  }