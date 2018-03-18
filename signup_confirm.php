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
	$mobile=$_POST["mobile"];
	$email=$_POST["email"];
	$pass=$_POST["password"];
	$_SESSION["userid"]=$email;
	  $_SESSION["password"]=$pass;
	$con=mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
					}
	
	
     $sql="insert into sign_up (name,mobile,e_mail,password) values ('$name','$mobile','$email','$pass')";
	

				if (mysqli_query($con, $sql)) {
					echo "Your account has been created successfully<br>Redirecting to login page in 3 seconds<br>";
					header("refresh:3; url=right%20frame.html");
					} 
				else {
						if(mysqli_errno($con) == 1062)
						{
							echo '<script type="text/javascript">alert("E-mail address already exits");</script>';
							header("refresh:0; url=reg.html");
						}
						else
							echo "Error: " . $sql . "<br>" . mysqli_error($con);
					}
									
				mysqli_close($con);
		?>
								

		
	</body>

</html>