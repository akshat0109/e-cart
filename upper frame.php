<html>
<head>
<style>
body{
     
    background:black url("index.jpe") no-repeat left top;
    margin:48px 0px 0px 530px;	
}

div.yu a:link, a:visited {
    background-color: black;
	font-size:20px;
    color: white;
	width:200px 50px;
    padding:12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:5px;
}
div.yu a:hover, a:active {
    background-color:silver;
	
}

ul.er {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#333;
	font-weight:bold;
	font-size:20px;
	
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: black;
}

.active {
    background-color:black;
}

</style>

</head>


<body>


<ul class="er">

<li><a class="active" href="right%20frame.html" target="connect">Home</a></li>
<li><a href="slideshow.php" target="connect">Today's Offer</a></li>
<li><a href="3.html" target="connect">Contact</a></li>
<li><a href="about.php" target="connect">About</a></li>
<div class="yu">
<li style="float:right"><a href="reg.php" id="er" target="connect">Sign Up</a></li>
<?php

if(!isset($_SESSION['userid']))
 {
	?>
	<li style="float:right"><a href="log_in.php" id="er" target="connect">Log In</a></li>
<?php
 }
else
 {
?>	
<li style="float:right"><a href="" id="er" target="connect">Log Out</a></li>

<?php
session_unset();
header("location:rightframe.html");
 }
?>
</div>

</ul>



</body>
</html>