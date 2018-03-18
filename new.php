<?php session_start(); ?>
<html>

<head>
<title>Online Shopping.in</title>

<style>
body{
      background:aqua;
 
}
.gh{
     color:white;
     margin:50px 0px 0px 400px;

}

.dropbtn {
    background-color:white ;
    color: grey;
    padding: 5px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:lightblue;
	color:black;
    
}


 div.qw{
	 border:1px solid transparent;
	 background-color:black;
	 margin:50px;
	 float: left;
     width: 400px;
 }
div.qw img{
	 border:3px solid aqua;
	 margin-bottom:40px;
	
 }

div.remain{
	background:black;
	color:white;
}

div.remain input#add {
	background-color:green;
	border:2px solid red;
	margin:150px;
	padding:8px;
	border-radius:5px;
	color:white;
	font-weight:bold;
	font-size:15px;
}
 
</style>

<script>

function validate(){
	     <?php echo $_SESSION["cart"][5] ?>
	     var a=document.form.quantity.value;
		 if(a><?php $_SESSION["cart"][5] ?>)
		 {
			 alert("Only <?php $_SESSION["cart"][5] ?> IN Stock");
			 return false;
		 }
		 else
			 true;
		 
  }

</script>

</head>


<body>

<h1 align="center"><font color="red">Shopping Cart</font></h1>
<?php

//session_start();
   $con=mysqli_connect("localhost","root","","online_shopping");
   if(!$con)
   {
	  echo"not ok";
   }
   $var=$_GET["proid"];
   
?>

<?php
     $query="select * from product where id=$var";
	 $result=mysqli_query($con,$query);
	 if(mysqli_num_rows($result)>0)
	 {
		 
		 $row=mysqli_fetch_array($result);
		 $_SESSION["cart"]=$row;
		// echo $_SESSION["cart"][1];
		// echo $_SESSION["cart"][2];echo $_SESSION["cart"][3];echo $_SESSION["cart"][4];echo $_SESSION["cart"][5];
?>
<form method="post" action="value.php" name="form" onsubmit="return validate();" >
	<div class="qw">
		     <img src="<?php echo $row["image"]; ?>" >
		</div>
		
		<div class="remain">
			  <h2><?php echo $row["name"]; ?> </h2>
	    <?php 
               if($row["stock"]>0){
	    ?>
			<b><font color="green">In Stock</font></b>
		<?php
		
			   }
			   else
			   {
		?>
             		
			<b><font color="red" >Out Of Stock</font></b>
<?php			
			   }
		?>
		  
			 <h4>Suggested price:  Rs. <?php echo $row["suggested_price"]; ?> <br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Price: Rs. <?php echo $row["price"]; ?> <br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp You save: Rs. <?php echo ($row["suggested_price"]-$row["price"]); ?> <br>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Inclusive of all taxes<br><br>
&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbspSize:
&nbsp &nbsp 
           <div class="dropdown">
           <select class="dropbtn" name="size">
              <div class="dropdown-content">
                 <option value="30Wx33L">30Wx33L</option>
                 <option value="32Wx33L">32Wx33L</option>
                 <option value="34Wx33L">34Wx33L</option>
	             <option value="36Wx33L">36Wx33L</option>
             </div>
			 </select>
           </div><br>
		   <ul>
           <li>100% Cotton</li>
           <li>Button closure</li>
           <li>Slim fit</li>
           <li>Gentle machine wash</li>
           <li>Made in India</li>
           </ul>
          </h4>
		  Quantity:&nbsp &nbsp
			 <select name="quantity"><font color="white"></font> 
			 <option value="1">1</option>
			  <option value="2">2</option>
			  
			   
			 </select>
			 
			 <input type="submit"  style="margin-top:5px;" value="Buy Now" id="add" >
		   </div>
		</form>
	 
<?php
         
		 
	 }
?>




</body>
</html>
