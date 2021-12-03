<header>
<marquee direction ="right">PyramidPHP</marquee>
  <p>....</p>
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
    <pre style="font-family:TLWGTypewriter;font-size:40px;">
        <?php echo "<br/>";
            for($mim=1;$mim<=4;$mim++)
            {
                for($kajan=1;$kajan<=$mim;$kajan++)
                {
                    echo " ";
                }
                echo $mim ,$mim;
                for($kajan=3;$kajan>=$mim;$kajan--)
                {
                    echo "**";
                }
                echo $mim ,$mim;
                echo "<br/>";               
            }
        ?>
    </pre>

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


</style>

<title></title>
</head>
<body>
<footer>

  <a href="mim_all.php"> ▶Home◀</a>
  <p>CONTACT<br>
  <a href="https://www.facebook.com/mim.suchicha"><img src="8.gif" width="60" height="50" alt=""></a>
  <a href="https://github.com/mim321"><img src="7.gif" width="60" height="50" alt=""></a>
  <a href="https://twitter.com/mymimmmm1"><img src="5.gif" width="60" height="50" alt=""></a>
  <a href="https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber"><img src="9.gif" width="60" height="50" alt=""></a></p>
</footer>
</body>

