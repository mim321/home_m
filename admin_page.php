<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>

<!DOCTYPE html>
<html>

<title>admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  

<head>

<style>
.w3-button {width:150px}
body {background-color: MistyRose;}
h1   {color: blue;}
p    {color: white;}

h1  {
    border: 1px solid powderblue;
    padding: 35px;
}

p::first-letter {
  color: #ff0000;
  font-size: xx-large;
}

</style>

<title></title>
</head>
<body>

<div class="w3-container w3-teal">
  <ul>
<button class="w3-button w3-pink w3-round-large"><a href="Pyramid/mimall1.php">Pyramid</a></button>
<button class="w3-button w3-pink w3-round-large"><a href="indexN.php">Nothwind</a></button>
	<button class="w3-button w3-pink w3-round-large"><a href="Pro_s0-s7/pro_s0index.php">Pro_s0-s7</a></button>
  <button class="w3-button w3-pink w3-round-large"><a href="northwind.php">Relation</a></button>
  <button class="w3-button w3-pink w3-round-large"><a href="stock/product.php">Stock</a></button> 
</ul>
</div>

<!-- <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="https://mim321.github.io/joom/joom.htm" class="w3-bar-item w3-button">web joom</a>
  <a href="https://mim321.github.io/adminLTE/index.html" class="w3-bar-item w3-button">Gallery adminLTE</a>  
</div> -->

<!-- <div id="main">
<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container"> -->

<!-- <div class="w3-container w3-teal">
<div class="topnav">
  <a href="Pyramid/mimall1.php">Pyramid</a>
  <a href="indexN.php">Nothwind</a>
  <a href="Pro_s0-s7/pro_s0index.php">Pro_s0-s7</a>
  <a href="create5tb.php">Orders</a>
</div>
</div> -->

</div>
</div>
 
 <div class="w3-display-container w3-text-white">
    <img src="22.jpg" alt="Lights" style="width:100%">


<div class="w3-padding w3-display-middle w3-xlarge">


<div style="border:16px solid white" class="w3-panel w3-hover-border-green">
<article class="w3-container">
	<form action="logout.php">
	<h1 style="text-shadow:1px 1px 0 #444">Admin Page</h1>
</div>
<div class="w3-panel w3-teal w3-card-4">
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
        <p>????????????????????????????????????????????????????????????????????? Admin</p>
</div>
	</form>

</article>
</div>


<div class="w3-padding w3-display-topright">
<form action="index1.php">
<!--	<h3>  <?php echo $name; ?>  <?php echo $level; ?> </h3> -->
<button class="w3-button w3-purple w3-round-large">edit Infomation</button>
	</form></p>
<form action="sql_where.php">	
<button class="w3-button w3-purple w3-round-large">where ?????? sql</button>
</form></p>
<form action="logout.php">	
<button class="w3-button w3-purple w3-round-large">??????????????????????????????... </button>
</form>

</div>


<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>


<div class="w3-container w3-teal">
  <h style="text-shadow:1px 1px 0 #444">CONTACT</h4>
<a href="https://www.facebook.com/mim.suchicha"><img src="8.gif" width="60" height="50" alt=""></a>
  <a href="https://github.com/mim321"><img src="7.gif" width="60" height="50" alt=""></a>
  <a href="https://twitter.com/mymimmmm1"><img src="5.gif" width="60" height="50" alt=""></a>
  <a href="https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber"><img src="9.gif" width="60" height="50" alt=""></a></p>
</div>

</body>
</html>


<?php } ?>