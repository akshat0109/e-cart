<html>
<head>
<title>Online Shopping.in</title>

<style>

body{
    background-image:url("background.jpg");
   
}
input[type=text] {
  width: 150px;
  transition: width .75s ease-in-out;
 
}
input[type=text]:focus {
  width: 250px;
  background-color:lightblue;
}
.qw{
    margin: 0px 10px 10px 350px;
    border: 1px solid transparent;
    width: 380px;
	padding-left:30px;
	padding-top:20px;
	padding-bottom:30px;
	outline-style:outset;
	color:black;
	 background: linear-gradient(to bottom right,yellow,red,black);
	    
    
}

h2{
    text-align:center;
	font-size:50px;
	padding-top:20px;
	color:white;
}
#sd{
    background-color:orange;
	font-size:15px;
	padding-top:5px;
	padding-bottom:5px;
}

</style>

<script>


function validate(){
	                var a=document.sign_in.name.value;
					var b=document.sign_in.mobile.value;
				    var c=document.sign_in.email.value;
                    var x = c.indexOf("@");
					var y=c.lastIndexOf(".");
				    var d=document.sign_in.password.value;
				    var e=document.sign_in.cpassword.value;
				
					if(a=="")
					{
						alert("Please enter correct Name");
						//a="";
						document.sign_in.name.focus();
						return false;
					}
					else if(b=="")
					{
						alert("Please enter Contact number ");
						//b="";
						document.sign_in.mobile.focus();
						return false;
					}
					else if(c=="" || x<1 || y<x+2 || y+2>=c.length)
					{
						alert("Please enter valid E-mail");
						//a="";
						document.sign_in.email.focus();
						return false;
					}
					else if(d=="" || d!=e || d.length<6)
					{
						alert("Enter correct password, password must be of at least 6 length");
						document.sign_in.password.focus();
						document.sign_in.password.value="";
						document.sign_in.cpassword.value="";
						return false;
					}
					else
						return true;
}

</script>

</head>

<body>

<h2>Create Account</h2>
<form name="sign_in"  method="post" action="signup_confirm.php" onsubmit="return(validate());" class="qw">
Your name<font color="red">*</font><br>
<input type="text" placeholder="FIRST           LAST" name="name" pattern="[A-Za-z-']+" width="500"><br><br>
Mobile number<font color="red">*</font><br>
<input type="text" placeholder="Mobile no." name="mobile" pattern="[7-9]{1}[0-9]{9}"><br><br>
E-mail<font color="red">*</font><br>
<input type="text" placeholder="E-mail id" name="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"><br><br>
Password<br>
<input type="password" placeholder="password" name="password"><br><br>
Confirm Password<br>
<input type="password" placeholder="Retype password" name="cpassword"><br><br>
<input id="sd" type="submit" value="                        Submit                        " ><br><br>
Already have an account? <a href="log_in.php" target="connect"><font color="red"> Log in </font></a>

</form>
</body>
</html>