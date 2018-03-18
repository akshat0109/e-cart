<?php session_start(); ?>

<html>
<head>
<style>
body{
     
    background:black;
	   
	
}

div.img {
    margin: 10px 25px 15px 0px;
    border: 4px solid transparent;
    float: left;
    width: 180px;
	 transition: width 1s, transform 1s;
}

div.img:hover {
    border: 4px solid white;
	 
}

div.img img {
    width: 100%;
    height: 250px;

}

div.desc {
    padding: 15px;
    text-align: center;
	color:white;
	font-size:18px;
	font-weight:bold;
}



div.yu a:link, a:visited {
    background-color: black;
	font-size:20px;
    color: white;
	width:200px 20px;
    padding:10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius:10px;
}
div.yu a:hover, a:active {
    background-color:silver;
	color:red;

</style>
</head>


<body>


<div class="img">
  <a  href="new.php?proid=39">
    <img src="jeans1.jpg"  width="220" height="310">
  </a>
  <div class="desc">Ripped Skinny Jeans <font color="lightblue"> Rs. 3000</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=40">
    <img src="jeans2.jpg" width="220" height="500">
  </a>
  <div class="desc">Washed Skinny Jeans <font color="lightblue"> Rs. 3500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=41">
    <img src="jeans3.jpg" width="220" height="310">
  </a>
  <div class="desc">Vintage Skinny Jeans <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=42">
    <img src="jeans4.jpg" width="220" height="310">
  </a>
  <div class="desc">Mega Ripped Jeans <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=43">
    <img src="jeans5.jpe" width="220" height="310">
  </a>
  <div class="desc">Vintage Fit Jeans <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=44">
    <img src="jeans1.jpg" width="220" height="310">
  </a>
  <div class="desc">Slim Fit Jeans <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=45">
    <img src="jeans6.jpe" width="220" height="310">
  </a>
  <div class="desc">Relaxed Fit Trousers <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=46">
    <img src="jeans7.jpe" width="220" height="310">
  </a>
  <div class="desc">Selvedged Slim <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=47">
    <img src="jeans8.jpe" width="220" height="310">
  </a>
  <div class="desc">Corduroy Trousers <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=48">
    <img src="jeans9.jpe" width="220" height="310">
  </a>
  <div class="desc">Levi's Slim Fit <font color="lightblue"> RS. 2500</font></div>
</div>

<div  href="new.php?proid=49">
    <img src="jeans6.jpe" width="220" height="310">
  </a>
  <div class="desc">Relaxed Fit Jeans <font color="lightblue"> RS. 2500</font></div>
</div>

<div class="img">
  <a  href="new.php?proid=50">
    <img src="jeans1.jpg"  width="220" height="310">
  </a>
  <div class="desc">Ripped Jeans <font color="lightblue"> Rs. 3000</font></div>
</div>


	  
</body>
</html>