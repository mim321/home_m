<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product List</title>
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

<style>
footer {
  text-align: center;
  padding: 3px;
  background-color: DarkSalmon;
  color: white;
}
</style>

</head>

<body>

<ul>
  <li><a class="active" href="admin_page.php">Home</a></li>
  <!-- <li><a href="index.php">ออกจากระบบ</a></li> -->
  <li style="float:right"><a class="active2" href="index.php">ออกจากระบบ</a></li>
</ul>

<div class="w3-display-container w3-text-white">


<table width="600" border="1" align="center" bordercolor="#666666">
  <tr>
    <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพประกอบ</strong></td>
    <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อสำอาง</strong></td>
    <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคาสินค้า</strong></td>
    <td width="100" align="center" bgcolor="#CCCCCC"><strong>รายละเอียดสินค้า</strong></td>
  </tr>
  
  
  <?php
  //connect db
  include("connect.php");
  $sql = "select * from product order by p_id";  //เรียกข้อมูลมาแสดงทั้งหมด
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result))
  {
  	echo "<tr>";
	echo "<td align='center'><img src='c1.jpg'" . $row["p_pic"] ." ' width='80'></td>";
	echo "<td align='left'>" . $row["p_name"] . "</td>";
    echo "<td align='center'>" .number_format($row["p_price"],2). "</td>";
    echo "<td align='center'><a href='product_detail.php?p_id=$row[p_id]'>คลิก</a></td>";
	echo "</tr>";
  }

  ?>
</table>
</div>

<footer>
  <p>CONTACT<br>
<a href="https://www.facebook.com/mim.suchicha"><img src="8.gif" width="60" height="50" alt=""></a>
  <a href="https://github.com/mim321"><img src="7.gif" width="60" height="50" alt=""></a>
  <a href="https://twitter.com/mymimmmm1"><img src="5.gif" width="60" height="50" alt=""></a>
  <a href="https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber"><img src="9.gif" width="60" height="50" alt=""></a></p>
  </footer>

</body>
</html>