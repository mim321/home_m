<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product Detail</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  

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
	session_start();
	
	$p_id = $_GET['p_id']; 
	$act = $_GET['act'];

	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
</head>

<body>
<form id="frmcart" name="frmcart" method="post" action="?act=update">
  <table width="600" border="0" align="center" class="square">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC">
      <b>ตะกร้าสินค้า</span></td>
    </tr>
    <tr>
      <td bgcolor="#EAEAEA">สินค้า</td>
      <td align="center" bgcolor="#EAEAEA">ราคา</td>
      <td align="center" bgcolor="#EAEAEA">จำนวน</td>
      <td align="center" bgcolor="#EAEAEA">รวม(บาท)</td>
      <td align="center" bgcolor="#EAEAEA">ลบ</td>
    </tr>
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	include("connect.php");
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = "select * from product where p_id=$p_id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['p_price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'>" . $row["p_name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["p_price"],2) . "</td>";
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$p_id]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='right'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' align='center'><a href='cart.php?p_id=$p_id&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
<tr>
<td><a href="product.php">back</a></td>
<td colspan="4" align="right">
    <input type="submit" name="button" id="button" value="ปรับปรุง" />
    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
</td>
</tr>
</table>
</div>
</form>
</body>
</html>