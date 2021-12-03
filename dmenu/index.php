<body><style>
@font-face{
font-family:TLWGTypewriter;
src:url('rsp_tlwgtypewriter.ttf');
}
</style>
<p style="font-family:TLWGTypewriter;font-size:20px;">
<?php 
for($i=1;$i<=5;$i++){
  for($j=1;$j<=$i;$j++){
    echo $j;
  }
  echo "<br/>";
}
//echo $_SERVER["SERVER_ADDR"];
//echo $_SERVER["REMOTE_ADDR"];
//phpinfo();
?></p></body>
