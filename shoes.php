<?php session_start(); ?>

<html>
<head>
<style>
body{
     
    background:black;
	   
	
}

div.img {
    margin: 10px 25px 15px 0px;
    border: 2px solid transparent;
    float: left;
    width: 180px;
	transition: width 1s, transform 1s;
}

div.img:hover {
    border: 2px solid silver;
	width: 180px;
    
}

div.img img {
    width: 100%;
    height: 250px;

}

div.desc {
    padding: 15px;
    text-align: center;
	color:white;
	font-size:17px;
	font-weight:bold;
}



</style>
</head>


<body>


<div class="img">
  <a  href="new.php?proid=34">
    <img src="shoes1.jpg"  width="220" height="310">
  </a>
  <div class="desc"><font color="brown">Cooper England Shoes </font>Rs. 1,555</div>
</div>

<div class="img">
  <a  href="new.php?proid=35">
    <img src="shoes2.jpg" width="220" height="500">
  </a>
  <div class="desc">Casual Shoes <font color="brown"> Rs. 499</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=36">
    <img src="shoes3.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="pink">Party Wear Shoes</font> RS. 599</div>
</div>

<div class="img">
  <a  href="new.php?proid=37">
    <img src="shoes4.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="silver">Men's Combo Of 2 Shoes</font> RS. 999</div>
</div>

<div class="img">
  <a  href="new.php?proid=38">
    <img src="shoes5.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="brown">Freedom Daisy 1047 Mens Black </font>RS. 850</div>
</div>

<div class="img">
  <a target="_blank" href="new.php?proid=#">
    <img src="shoes6.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="pink">Basics Men's blazer </font>RS. 3,900</div>
</div>

<div class="img">
  <a target="_blank" href="new.php?proid=#">
    <img src="shoes7.jpg" width="220" height="310">
  </a>
  <div class="desc">Bachini Men's Casual Loafers<font color="brown"> RS. 875</font></div>
</div>

<div class="img">
  <a target="_blank" href="new.php?proid=#">
    <img src="shoes8.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="silver">Sparx Men's Mesh Loafer and Moccassin </font>RS. 1,200</div>
</div>

<div class="img">
  <a target="_blank" href="new.php?proid=#">
    <img src="shoes9.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="brown">REDFOOT Leather look Men's Casual sneakers Shoes</font> RS. 1,499</div>
</div>

<div class="img">
  <a target="_blank" href="new.php?proid=#">
    <img src="shoes10.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="pink">Rockfield Synthetic Leather Men's Comfortable Sneakers </font>RS. 459</div>
</div>




	  
</body>
</html>