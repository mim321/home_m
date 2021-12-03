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
  padding-bottom: 480px;
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

<div>
<body>
<form action="3_4.php">
<input name="employeeid" value="">
<input name="firstname" value="">
<input name="lastname" value="">
<input name="title" value="">
<input type="submit" value="2_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['employeeid']) || !isset($_GET['title'])) exit;
require("3_1.php");
$sql="insert into $tb values('".$_GET['employeeid']."'
							,'".$_GET['firstname']."'
							,'".$_GET['lastname']."'
							,'".$_GET['title']."')";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "$sql : succeeded";
	mysql_close($connect);
}
?>
</div>
</body>