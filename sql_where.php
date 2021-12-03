<header>
<title>โฮมเพจของข้าพเจ้า:การสร้างตาราง</title>
<title>admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</header>

<style>
header {
  text-align: center;
  padding: 0px;
  background-color: #FFDAB9;
  color: #000000;
}
</style>

<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
footer 
	{
   position:absolute;
   position:absolute;
   bottom:0;
   left:0;
   width:100%;
   height:100%
   height:50px;
   text-align: center;
   color: #ffffff;
   font-weight:bold;
   background-color: #FFDAB9;
}

    </style>
<!DOCTYPE html>
<html>

<title>admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  

<head>

<style>
.w3-button {width:150px}
body {background-color: WhiteSmoke;}
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
</style>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
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
</style>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
footer 
	{
   position:absolute;
   position:absolute;
   bottom:0;
   left:0;
   width:100%;
   height:100%
   height:50px;
   text-align: center;
   color: #ffffff;
   font-weight:bold;
   background-color: #2F4F4F;
}
    </style>
    <style>
.w3-button {width:150px}
body {background-color:#ffffff;;}
h1   {color: blue;}
p    {color: white;}

h1  {
    border: 1px solid powderblue;
    padding: 35px;
}

p::first-letter {
  color: #000000;
  font-size: xx-large;
}

</style>

    </head>
<body>
<ul>
  <li><a class="active" href="admin_page.php">Home</a></li>
  <!-- <li><a href="index.php">ออกจากระบบ</a></li> -->
  <li style="float:right"><a class="active2" href="index.php">ออกจากระบบ</a></li>
</ul>
<br>
    <div class="gallery">
  <a target="_blank" href="sql1.png">
    <img src="sql1.png" alt="Cinque Terre" width="1000" height="800">
  </a>
  <div class="desc">▶ ตาราง orderdetails</div>
</div>

<div class="gallery">
  <a target="_blank" href="sql2.png">
    <img src="sql2.png" alt="Forest" width="1000" height="800">
  </a>
  <div class="desc">คำสั้งที่ใช่ SELECT * FROM `orderdetails` WHERE quantity < "11"</div>
</div>

<div class="gallery">
  <a target="_blank" href="sql3.png">
    <img src="sql3.png" alt="Northern Lights" width="1000" height="800">
  </a>
  <div class="desc">ค้นหา quantity ที่น้อยกว่า 11 ปรากฏว่ามีอยู่1 คือ 10 ของ orderid 300</div>
</div>
<!--------------------------------------------->
<div class="gallery">
  <a target="_blank" href="sql4.png">
    <img src="sql1.png" alt="Cinque Terre" width="1000" height="800">
  </a>
  <div class="desc">▶ ตาราง orders</div>
</div>

<div class="gallery">
  <a target="_blank" href="sql5.png">
    <img src="sql2.png" alt="Forest" width="1000" height="800">
  </a>
  <div class="desc">คำสั้งที่ใช่ SELECT * FROM `orders` WHERE orderdate = "7/27/20"</div>
</div>

<div class="gallery">
  <a target="_blank" href="sql6.png">
    <img src="sql3.png" alt="Northern Lights" width="1000" height="800">
  </a>
  <div class="desc">ค้นหา orderdate ในวันที "7/27/20"</div>
</div><br>
<!--------------------------------------------->
<div class="gallery">
  <a target="_blank" href="sql7.png">
    <img src="sql1.png" alt="Cinque Terre" width="1000" height="800">
  </a>
  <div class="desc">▶ ตาราง customers</div>
</div>

<div class="gallery">
  <a target="_blank" href="sql8.png">
    <img src="sql2.png" alt="Forest" width="1000" height="800">
  </a>
  <div class="desc">คำสั้งที่ใช่ SELECT * FROM `customers` WHERE fax = "12"</div>
</div>

<div class="gallery">
  <a target="_blank" href="sql9.png">
    <img src="sql3.png" alt="Northern Lights" width="1000" height="800">
  </a>
  <div class="desc">ค้นหา fax "12" ในตาราง customers</div>
</div>

<tr>

</pre>
<footer><div class="w3-container ">
  <p>CONTACT<br>
  <a href="https://www.facebook.com/mim.suchicha"><img src="8.gif" width="60" height="50" alt=""></a>
  <a href="https://github.com/mim321"><img src="7.gif" width="60" height="50" alt=""></a>
  <a href="https://twitter.com/mymimmmm1"><img src="5.gif" width="60" height="50" alt=""></a>
  <a href="https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber"><img src="9.gif" width="60" height="50" alt=""></a></p>
</footer>
</body>