<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

</style>

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
  padding-top: 50px;
  padding-right: 30px;
  padding-bottom: 450px;
  padding-left: 100px;
}
</style>
<style>
.w3-button {width:150px}
body {background-color: WhiteSmoke;}
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

</head>

<body>
<table width="600" border="0" align="center" class="square">
  <tr><td colspan="3" bgcolor="#CCCCCC"><b>Product</b></td></tr>
  
  <ul>
  <li><a class="active" href="admin_page.php">Home</a></li>
  <!-- <li><a href="index.php">ออกจากระบบ</a></li> -->
  <li style="float:right"><a class="active2" href="index.php">ออกจากระบบ</a></li>
</ul>


<?php
//connect db
    include("connect.php");
	$p_id = $_GET['p_id']; //สร้างตัวแปร p_id เพื่อรับค่า
	
	$sql = "select * from product where p_id=$p_id";  //รับค่าตัวแปร p_id ที่ส่งมา
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	//แสดงรายละเอียด
	echo "<tr>";
  	echo "<td width='85' valign='top'><b>Title</b></td>";
    echo "<td width='279'>" . $row["p_name"] . "</td>";
    echo "<td width='70' rowspan='4'><img src='c1.jpg'" . $row["p_pic"] . " ' width='100'></td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>Detail</b></td>";
    echo "<td>" . $row["p_detail"] . "</td>";
  	echo "</tr>";
  	echo "<tr>";
    echo "<td valign='top'><b>Price</b></td>";
    echo "<td>" .number_format($row["p_price"],2) . "</td>";
  	echo "</tr>"; 
  	echo "<tr>";
    echo "<td colspan='2' align='center'>";
    echo "<a href='cart.php?p_id=$row[p_id]&act=add'> เพิ่มลงตะกร้าสินค้า </a></td>";
    echo "</tr>";
?>
</table>
</div>
<p><center><a href="product.php">back</a></center>

</body>
</html>