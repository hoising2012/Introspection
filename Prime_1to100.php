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
echo "<h1>Prime 1-100</h1>";
echo "<table>";
echo "<tr>";
echo "<th>A</th>";
echo "<th>B</th>";
echo "<th>C</th>";
echo "<th>D</th>";
echo "<th>E</th>";
echo "<th>F</th>";
echo "<th>G</th>";
echo "<th>H</th>";
echo "<th>I</th>";
echo "<th>J</th>";
echo "</tr>";
$F = 0;
for($x=1; $x<=10; $x++){
	echo "<tr>";
	for($y=1; $y<=10; $y++){
		$F++;			
		if($F==1){
			echo "<td style=\"background-color:#DC143C;\">$F</td>";
		}elseif(($F!=2)&&($F%2==0)){
			echo "<td style=\"background-color:#DC143C;\">$F</td>";
		}elseif(($F!=3)&&($F%3==0)){
			echo "<td style=\"background-color:#DC143C;\">$F</td>";
		}elseif(($F!=5)&&($F%5==0)){
			echo "<td style=\"background-color:#DC143C;\">$F</td>";
		}elseif(($F!=7)&&($F%7==0)){
			echo "<td style=\"background-color:#DC143C;\">$F</td>";
		}else{
			echo "<td>$F</td>";
		}
	}
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
