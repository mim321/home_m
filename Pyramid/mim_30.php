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
</head>
<body>
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:40px;">
        <?php echo "<br/>";
            for ($mim=1; $mim <= 5; $mim++)
            {
                for ($kajan=1; $kajan <= $mim; $kajan++)
                {
                    echo (" ");
                }
                for ($kajan=$mim; $kajan <= 5; $kajan++)
                {
                    echo ("*");
                }
                for ($kajan=$mim; $kajan <= 4; $kajan++)
                {
                    echo ("*");
                }
                for ($kajan=$mim; $kajan >= 1; $kajan--)
                {
                    echo ($kajan);
                }
            echo ("\n");
            }
        ?>
    </pre>
<footer>
  <p>CONTACT<br>
  <a href="https://www.facebook.com/mim.suchicha"><img src="8.gif" width="60" height="50" alt=""></a>
  <a href="https://github.com/mim321"><img src="7.gif" width="60" height="50" alt=""></a>
  <a href="https://twitter.com/mymimmmm1"><img src="5.gif" width="60" height="50" alt=""></a>
  <a href="https://www.youtube.com/channel/UCHqdeiHTJPLjayV1gW-2Y7A?view_as=subscriber"><img src="9.gif" width="60" height="50" alt=""></a></p>
</footer>
</body>