<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
.active2 {
    background-color: #000000;
}

div {
 /* border: 1px solid black; */
  background-color: lightblue;
  padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 450px;
  padding-left: 100px;
}

</style>
</head>

<body>

<ul>
  <li><a class="active" href="indexN.php">Home</a></li>
  <!-- <li><a href="index.php">ออกจากระบบ</a></li> -->
  <li style="float:right"><a class="active2" href="indexN.php">ออกจากระบบ</a></li>
</ul>

</body>
</html>

<div>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
require("3_1.php");
$sql = "drop database $db";
if((int)phpversion() >= 7) {
	$connect->close();
	$connect = mysqli_connect($host, $uname, $upass);
	if (mysqli_query($connect, $sql)) 
		echo "Drop database : succeeded";
	else 
		echo "Drop database : failed " . mysqli_error($connect);
	$connect->close();
} else {
	if (!$result=mysql_query($sql,$connect))
		echo "Drop database : failed";
	else
		echo "Drop database : succeeded";
	mysql_close($connect);
}
?>
<input type='button' onclick="location.href='index.php'" value='back'>
</div>