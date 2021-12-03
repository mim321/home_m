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
<form action="2_4.php">
<input name="customerid" value="">
<input name="companyname" value="">
<input name="contactname" value="">
<input name="contacttitle" value="">
<input name="address" value="">
<input name="city" value="">
<input name="region" value="">
<input name="postalcode" value="">
<input name="country" value="">
<input name="phone" value="">
<input name="fax" value="">
<input type="submit" value="2_4.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['customerid']) || !isset($_GET['fax'])) exit;
require("2_1.php");
$sql="insert into $tb values('".$_GET['customerid']."'
							,'".$_GET['companyname']."'
							,'".$_GET['contactname']."'
                            ,'".$_GET['contacttitle']."'
                            ,'".$_GET['address']."'
                            ,'".$_GET['city']."'
                            ,'".$_GET['region']."'
                            ,'".$_GET['postalcode']."'
                            ,'".$_GET['country']."'
                            ,'".$_GET['phone']."'
                            ,'".$_GET['fax']."')";
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