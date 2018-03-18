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
}

div.img:hover {
    border: 4px solid silver;
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



</style>
</head>


<body>


<div class="img">
  <a  href="new.php?proid=24">
    <img src="dress1.jpg"  width="220" height="310">
  </a>
  <div class="desc"><font color="olive">Runako Almond Pathani Suit For Men</font> Rs. 1,999</div>
</div>

<div class="img">
  <a  href="new.php?proid=25">
    <img src="dress2.jpg" width="220" height="500">
  </a>
  <div class="desc"><font color="olive">New Looks Men's Linen Kurta Pyjama</font> Rs. 955</div>
</div>

<div class="img">
  <a  href="new.php?proid=26">
    <img src="dress3.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="olive">Masculine Affair Black Nehru Jacket</font> RS. 1,099</div>
</div>

<div class="img">
  <a  href="new.php?proid=27">
    <img src="dress4.jpg" width="220" height="310">
  </a>
  <div class="desc"><font color="olive">Royal Men's Navy Tericott Pathani suit</font> RS. 999</div>
</div>



	  
</body>
</html>