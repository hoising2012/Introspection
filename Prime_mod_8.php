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

$prime=array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
$S = [];

echo "<table>";
echo "<tr>";
echo "<th>Prime number</th>";
echo "<th>Remainder modulo 8</th>";
echo "</tr>";

for($i = 0; $i<=14; $i++){
	$S[$i] = $prime[$i] % 8;
	echo "<tr>";
	echo "<td>$prime[$i]</td>";
	echo "<td>$S[$i]</td>";
	echo "</tr>";
}
echo "</table>";

$array = array_unique($S);
sort($array);
print_r($array);
echo "</br>";
for($i=0; $i<count($array); $i++){
	$p = $array[$i]%2;
	if($p==0){
		echo $array[$i]." is an even number.";
	}else{
		echo $array[$i]." is an odd number.";
	}
	echo "</br>";
}

?>
</body>
</html>