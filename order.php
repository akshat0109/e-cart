<?php session_start(); ?>

<html>
<head>
<title>Online Shopping.in</title>

<style>
 
 div.order input{
               width:300px;
			   height:40px;
			   border-radius:3px;
			    resize:both;
				overflow:auto;

 }
div.order input:hover{
      border: 2px solid lightblue;
    width: 300px;

}

span{
    color:grey;
	padding:8px;
	background-color:lightgrey;
	border:1px solid silver;
	border-radius:4px;
}
div.order input#rt{
       font-size:23px;
	   background-color:orange;
	   color:white;
	   margin:20px 0px 0px 95px;
}

</style>

<script>


function validate(){
    
	                var a=document.order.name.value;
					var b=document.order.phone.value;
				    var c=document.order.email.value;
                    var x = c.indexOf("@");
					var y=c.lastIndexOf(".");
				    
				    
				    var f=document.order.pincode.value;
					var g=document.order.address.value;
					if(a=="")
					{
						alert("Please enter correct Name");
						//a="";
						document.order.name.focus();
						return false;
					}
					else if(b=="")
					{
						alert("Please enter Contact number ");
						//b="";
						document.order.phone.focus();
						return false;
					}
					else if(c=="" || x<1 || y<x+2 || y+2>=c.length)
					{
						alert("Please enter valid E-mail");
						//a="";
						document.order.email.focus();
						return false;
					}
					else if(f=="")
					{
					  alert("Please fill Pincode ");
						//b="";
						document.order.pincode.focus();
						return false;
					}
					else if(g=="")
					{
					  alert("Please fill Address ");
						//b="";
						document.order.address.focus();
						return false;
					}
					else
						return true;
}

</script>

</head>

<body>
	
	
<div class="order">
<form name="order" method="post" action="order_confirm.php" onsubmit="return(validate())">

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name  &nbsp     
<input type="text" name="name" ><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbspE-mail      &nbsp&nbsp    

<input type="text" name="email" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$"><br><br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Pincode &nbsp&nbsp         
<input type="text" name="pincode"  maxlength="6" pattern="[1-8]{1}[0-9]{5}"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Address  &nbsp&nbsp  <br>  
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<textarea name="address"> </textarea><br><br>

&nbsp&nbsp&nbsp Landmark &nbsp&nbsp

<input type="text" name="landmark" placeholder="(Optional)" style="padding-left:10px"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCountry &nbsp&nbsp&nbsp <b>India</b> (Service available only in India)<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPhone   &nbsp&nbsp   <span> +91</span>

<input type="text" name="phone" maxlength="10" pattern="[7-9]{1}[0-9]{9}"><br><br>

<input type="submit" value="SAVE & CONTINUE" name="details" id="rt"><br>

</form>
</div>
</body>
</html>