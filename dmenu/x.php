<html><header><style>
.mytable{margin-left:auto;margin-right:auto;}
.mytable tr:nth-child(even){background-color:#ddffdd;}
.mytable tr:nth-child(odd){background-color:#ffffdd;}
</style></header></html>

<body>
<table class="mytable">
<?php
for ($i= 1; $i <= 12; $i++){
	echo "<tr><td>";
	echo $_GET["line"] . "*" . $i . "=" . ($i * $_GET["line"]);
	echo "</td></tr>";
	}
?>
</table>
</body>
