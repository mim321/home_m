<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
<head>

<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">pro_s1connect</a>
  <a href="pro_s2crtdb.php" class="w3-bar-item w3-button">pro_s2crtdb</a>
  <a href="pro_s3select.php" class="w3-bar-item w3-button">pro_s3select</a>
  <a href="pro_s4insert.php" class="w3-bar-item w3-button">pro_s4insert</a>
  <a href="pro_s5delete.php" class="w3-bar-item w3-button">pro_s5delete</a>
  <a href="pro_s6update.php" class="w3-bar-item w3-button">pro_s6update</a>
  <a href="pro_s7drop.php" class="w3-bar-item w3-button">pro_s7drop</a>
</div>
<?php 
  if(file_exists("s3select.php")) include("s3select.php"); 
?>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Manage data in mysql</h1>
  </div>
</div>

<img src="11.jpg" alt="Car" style="width:100%">

<div class="w3-container">
</div>

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

</body></html>