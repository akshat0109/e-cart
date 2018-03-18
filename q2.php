<?php session_start(); ?>

<html>
<body>
<form method="post" action="q2.php" >
<input type="text" name="password">
<input type="submit" value="change">
</form>
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "online_shopping";

$email=$_SESSION["userid"];
$con = mysqli_connect($server,$username,$password,$database);
if(!$con)
	echo"error";

$sqli="UPDATE 'sign_up' SET password='$_POST[""password''']' WHERE sign_up.e_mail='$email'";
	  
	  if (mysqli_query($con,$sqli)){
		  echo"login done";
	  }
mysqli_close($con);

?>


</body>
</html>