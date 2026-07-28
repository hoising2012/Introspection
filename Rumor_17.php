<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>
</head>
<body>
<?php
$Arr = array();
echo "<table>";
echo "<tr>";
echo "<th>a</th>";
echo "<th>Remainder</th>";
echo "</tr>";
for($a = 0; $a<=15; $a++){
	$res = Pow(3,$a)%17;
	$Arr[] = $res;
        echo "<tr>";
	echo "<td>$a</td>";
	echo "<td>$res</td>";
	echo "</tr>";
}
echo "</table>";
echo "3^34 mod 17 = ?";
echo "<br \>";
$j = 34%16;
$Q = $Arr[$j];
echo "The result is : ".$Q;
?>
</body>
</html>
