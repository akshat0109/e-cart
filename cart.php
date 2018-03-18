<?php session_start(); ?>

<html>


<head>
<title>Online Shopping.in</title>

<style>
     div.qw{
	       border:1px solid #333;
		   background-color:#f1f1f1;
		   border-radius:5px;
    }
</style>

</head>

<body>
<h3 align="center">Shopping Cart</h3>
<?php

//session_start();
   $con=mysqli_connect("localhost","root","","online_shopping");
   if(!$con)
   {
	  echo"not ok";
   }
?>
<?php
     $query="select * from product order by id";
	 $result=mysqli_query($con,$query);
	 if(mysqli_num_rows($result)>0)
	 {echo"in";
		 while($row=mysqli_fetch_array($result))
		 {
?>
     <div class="col">
	    <form method="post" action"cart.php?action=add&id= <?php echo $row["id"]; ?>">
	
		   <div class="qw">
		     <img src="<?php echo$row["image"]; ?>">
			 <h4> <?php echo $row["name"]; ?> </h4>
			 <h4>$ <?php echo $row["price"]; ?> </h4>
			 <input type="text" name="quantity" value="1">
			 <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" >
			 <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
			 <input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" >
		   </div>
		</form>
	 </div>
<?php
         }
		 
	 }
?>
</body>
</html>