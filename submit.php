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
	$name=$_GET["name"];
	$email=$_GET["email"];
	$sub=$_GET["subject"];
	$comm=$_GET["comments"];
	$con=mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
					}
	
	
     $sql="INSERT INTO comment(`name`, `e_mail`, `subject`, `comment`) VALUES('$name','$email','$sub','$comm')";
	

				if (mysqli_query($con, $sql)) {
					echo "Your account has been created successfully<br>Redirecting to login page in 3 seconds<br>";
					header("refresh:3; url=right%20frame.html");
					} 
				else {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
					}
									
				mysqli_close($con);
		?>
								

		
	</body>

</html>