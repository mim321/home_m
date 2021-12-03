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
<div>
<form action="1_6.php">
<input name="customerid" value="">
<input name="companyname" value="">
<input name="contactname" value="">
<input name="contacttitle" value="">
<input name="address" value="">
<input name="city" value="">
<input name="region" value="">
<input name="postalcode" value="">
<input name="country" value="">
<input name="picture" value="">
<input name="fax" value="">
<input type="submit" value="2_6.php">
</form>
<?php
/* updated for php7 and php 5 on 2560-09-13 */
if (!isset($_GET['updid'])) { exit; }
require("1_1.php");
$sql="update $tb set ";
$sql.="customerid='". $_GET['customerid'] ."', ";
$sql.="companyname='". $_GET['companyname'] ."' ";
$sql.="contactname='". $_GET['contactname'] ."' ";
$sql.="contacttitle='". $_GET['contacttitle'] ."' ";
$sql.="address='". $_GET['address'] ."' ";
$sql.="city='". $_GET['city'] ."' ";
$sql.="region='". $_GET['region'] ."' ";
$sql.="postalcode='". $_GET['postalcode'] ."' ";
$sql.="country='". $_GET['country'] ."' ";
$sql.="phone='". $_GET['phone'] ."' ";
$sql.="fax='". $_GET['fax'] ."' ";
$sql.="where customerid='". $_GET['customerid'] ."'";
if((int)phpversion() >= 7) {
	if($connect->query($sql) === FALSE) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";	
	$connect->close();
} else {	
	if(!$result=mysql_db_query($db,$sql)) 
		echo "$sql : failed";
	else 
		echo "<meta http-equiv='refresh' content='0; url=index.php'/>";
	mysql_close($connect);
}
?>
</div>
</body>