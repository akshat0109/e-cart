<?php session_start(); ?>

<html>

<head>
<title>Online Shopping.in</title>

<style>

body{
	 background: linear-gradient(red,pink,black);
}


</style>
</head>

<body>

<?php
   $con=mysqli_connect("localhost","root","","online_shopping");
   if(!$con)
   {
	  echo"not ok";
   }
   
   $var =$_SESSION["mobile"];
   //$var2=$_SESSION["quantity"];
   //$var3=$_SESSION["cart"][0];
  
   $query="SELECT * FROM `order` WHERE mobile='$var'";
   
   //$sql="UPDATE `product` SET  stock=stock-'$var2' WHERE name='$var3'";
	 $result=mysqli_query($con,$query);
	 
	 //$result2=mysqli_query($con,$sql);
	 //echo "$result2";
	 if(mysqli_num_rows($result)>0)
	 {
		 $row=mysqli_fetch_array($result);
	 }
?>

  <div class"qw" > 
  &nbsp&nbsp&nbsp 1.&nbsp&nbsp LOGIN ID &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><?php echo $_SESSION["userid"]; ?></b>
  <br><br><br>
  <hr>
  &nbsp&nbsp&nbsp 2.&nbsp&nbsp ADDRESS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b> <?php echo $row["name"]; ?></b>&emsp;&emsp;  <?php echo $row["mobile"]; ?>
  <br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $row["address"]; ?>
  <br><br>
  <hr>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span style="text-decoration:underline"> ITEM</span>
  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <span style="text-decoration:underline"> QTY</span>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <span style="text-decoration:underline">PRICE</span><br><br>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $_SESSION["cart"][1]; ?> 
  &emsp;&emsp;&emsp;&nbsp&nbsp <?php echo $_SESSION["quantity"]; ?>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;MRP:<span style="text-decoration:line-through"> Rs.&nbsp<?php echo $_SESSION["cart"][3]; ?></span><br>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 &emsp;&emsp;&emsp;&nbsp&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 Selling price: Rs.&nbsp<?php echo $_SESSION["cart"][4]; ?><br>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 &emsp;&emsp;&emsp;&nbsp&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp
 <span style="color:green">(-)Saving: Rs.&nbsp<?php echo $_SESSION["cart"][3]-$_SESSION["cart"][4]; ?> </span><br>
 
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<span style="text-decoration:underline"> DELIVERY DETAILS</span><br><br>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <b>Delivery in two days</b>: Rs.&nbsp40 <br><br>
 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <span style="font-size:20px; color:red"> Amount Payable: </span> <span style="font-size:28px;"> RS.&nbsp<?php echo $_SESSION["cart"][4]+40; ?> </span>
 
  </div>

</body>
</html>
<span style="border:1px solid red; margin:15px;"><img src="<?php echo $_SESSION["cart"][2]; ?>" id="er" /> </span>