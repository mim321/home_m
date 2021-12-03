<?php
ini_set('display_errors', 0); // 0 =  'Off'
$db     = "id14699626_login"; // will be created in s2crtdb.php
$host   = "localhost";
$uname  = "id14699626_login_db";
$upass  = "lv5pxcZ[psJ#vvlo";
$tb     = "productsTest";
if (!$connect = mysql_connect($host,$uname,$upass)){
 die('connect : failed');
}
?>