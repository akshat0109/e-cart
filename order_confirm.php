<?php session_start(); ?>

<html >
	<head>
		
		
		<title>Online Shopping.in</title>
		

	</head>


	<body>
		
								
							


		<?php
				$servername="localhost";
	$username="root";
	$password="";
	$dbname="online_shopping";
	$name=$_POST["name"];
	$mobile=$_POST["phone"];
	$email=$_POST["email"];
	$pincode=$_POST["pincode"];
	$address=$_POST["address"];
	$landmark=$_POST["landmark"];
	$pro_name=$_SESSION["cart"][1];
	$_SESSION["mobile"]=$mobile;
	$con=mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
					}
	
	//echo $name.$mobile.$email.$pincode.$address.$landmark;
     $sql="INSERT INTO `order`(`name`, `product_name`, `e_mail`, `pincode`, `address`, `mobile`, `landmark`) VALUES  ('$name','$pro_name','$email','$pincode','$address','$mobile','$landmark')";
	

				if (mysqli_query($con, $sql)) {
					
					header("refresh:3; url=last.php");
					} 
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
					}
									
				mysqli_close($con);
		?>
								

		
	</body>

</html>