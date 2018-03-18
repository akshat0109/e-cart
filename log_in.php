<?php session_start(); ?>

<html>
<head>
<title>Online Shopping.in</title>
<style>

body{
    background-image:url("white-background-image.png");
}
input[type=text] {
  width: 100px;
  -webkit-transition: width .75s ease-in-out;
 
}
input[type=text]:focus {
  width: 250px;
  background-color:lightblue;
}
.qw{
    margin: 0px 10px 10px 300px;
    border: 1px solid transparent;
    float: left;
    width: 450px;
	padding-left:25px;
	padding-top:20px;
	padding-bottom:80px;
	border-radius:8px;
	outline-style:outset;
	color:blue;
	background:url("12345.jpg") no-repeat;
	 background-size:480px 400px;
}

h2{
    text-align:center;
	font-size:50px;
	padding-top:20px;
	color:red;
}
#sd{
    background-color:brown;
	font-size:15px;
	padding-top:5px;
	padding-bottom:5px;
	margin:6px 0px 0px 70px;
	color:white;
}
#wq{ 
     color:white;
	 background-color:green;
     padding:5px 50px 5px 50px;
	 margin:10px 20px 50px 110px;
	  
}
a{ text-decoration: none;}

</style>

<script>


function validate(){
	          
				    var c=document.sign_in.email.value;
                    var x = c.indexOf("@");
					var y=c.lastIndexOf(".");
				    var d=document.sign_in.password.value;
				   // var e=document.sign_in.cpassword.value;
				
					
				   if(c=="" || x<1 || y<x+2 || y+2>=c.length)
					{
						alert("Please enter valid E-mail");
						//a="";
						document.sign_in.email.focus();
						return false;
					}
					else if(d=="" || d.length<6)
					{
						alert("Enter correct password");
						document.sign_in.password.focus();
						document.sign_in.password.value="";
						//document.sign_in.cpassword.value="";
						return false;
					}
					else
						return true;
}

</script>

</head>

<body>

<h2>Log In</h2>
<form name="sign_in"  method="post" action="log_in_confirm.php" class="qw" onsubmit="return validate()">
E-mail<br>
<input type="text" placeholder="E-mail id" name="email" patter="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"><br><br>
Password<br>
<input type="password" placeholder="password" name="password"><br><br>
<input id="sd" type="submit" value="                        Log In                        " ><br><br>
<a href="reg.html">
<input type="button" value="Create New Account" name="new" id="wq"><br><br>
</a>
</form>
</body>
</html>