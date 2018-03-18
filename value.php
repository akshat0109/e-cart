<?php session_start(); ?>

<html>

<head>
<title>Online Shopping.in</title>

</head>

<body>

<?php

    $con=mysqli_connect("localhost","root","","online_shopping");
   if(!$con)
   {
	  echo"not ok";
   }
   $size=$_POST["size"];
   $quantity=$_POST["quantity"];
   $userid=$_SESSION['userid'];
   $_SESSION["size"]=$size;
   $_SESSION["quantity"]=$quantity;
   $var= $_SESSION["cart"][1];
   if(!isset($_SESSION['userid'])) {
		header("location:reg.php");
		}
    else
	{
		$sql="INSERT INTO `cart`(`name`, `e_mail`, `size`, `quantity`) VALUES('$var','$userid','$size','$quantity')";
	 
	 if (mysqli_query($con, $sql)) {
					header("refresh:3; url=order.php");
					}
	}
    mysqli_close($con);					
?>


</body>
</html>