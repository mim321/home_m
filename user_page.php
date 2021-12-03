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

* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: null;
}



/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

p::first-letter {
  color: #ff0000;
  font-size: xx-large;
</style>

<title></title>
</head>
<body>


<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="https://mim321.github.io/joom/joom.htm" class="w3-bar-item w3-button">web joom</a>
  <a href="https://mim321.github.io/adminLTE/index.html" class="w3-bar-item w3-button">Gallery adminLTE</a>  
  <a href="https://mim321.github.io/home/" class="w3-bar-item w3-button">adminLTE</a> 
</div>

<div id="main">
<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container"> 

<div class="w3-container w3-teal">
<div class="topnav">
  <a href="Pyramid/mimall1.php">Pyramid</a>
 <!-- <a href="indexN.php">Nothwind</a> -->
  <a href="northwind.php">Relation</a>
  <div class="w3-padding w3-display-topright">
  <form action="index2.php">
<!--	<h3>  <?php echo $name; ?>  <?php echo $level; ?> </h3> -->
<a href="index2.php" >Infomation</button>
	</form>
  <a href="logout.php" >ออกจากระบบ...</a>
	</div>

</div>
</div>

</div>
</div>
 
 <div class="w3-display-container w3-text-white">
    <img src="11.jpg" alt="Lights" style="width:100%">

<div class="w3-padding w3-display-middle w3-xlarge">

 <div style="border:16px solid white" class="w3-panel w3-hover-border-green">
<article class="w3-container">
	<form action="logout.php">
        <h1 style="text-shadow:1px 1px 0 #444">Member Page</h1>
        </div>
<div class="w3-panel w3-teal w3-card-4">
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>
        <p>ยินดีต้องรับเข้าสู่หน้า Member</p>
        </div>
	</form>
</article>
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
<marquee direction="right">
  <h style="text-shadow:1px 1px 0 #444">CONTACT</h4>
<a href="https://www.facebook.com/mim.suchicha"><img src="8.gif" width="60" height="50" alt=""></a>
  <a href="https://github.com/mim321"><img src="7.gif" width="60" height="50" alt=""></a>
  <a href="https://twitter.com/mymimmmm1"><img src="5.gif" width="60" height="50" alt=""></a>
  <a href="https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber"><img src="9.gif" width="60" height="50" alt=""></a></p>
  </marquee>
</div>

</div>
    
</body>
</html>


<?php } ?>