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
	  $email=$_POST["email"];
	  $pass=$_POST["password"];
	  $_SESSION["userid"]=$email;
	  $_SESSION["password"]=$pass;
	  $con=mysqli_connect($servername,$username,$password,$dbname);
	  
	  if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
					}
		
	  
	  $sqli="SELECT * FROM `sign_up` WHERE e_mail='$email' and password='$pass'";
	  $result=mysqli_query($con,$sqli);
	  
	  if (mysqli_num_rows($result)>0){
		  
		  header("refresh:3; url=right%20frame.html");
	  }
	  else
	  {
		  ?>
		  
	<script>
	    alert("Wrong password");
		
		
	</script>
	
	<?php
     header("refresh:3; url=log_in.php");
	  }
	  
	  mysqli_close($con);
   ?>

   	</body>

</html>