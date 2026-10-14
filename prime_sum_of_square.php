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
$prime = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
echo "<h1>Sum of square equal to prime</h1>";
echo "<table>";
echo "<tr>";
echo "<th>4n+1</th>";
echo "<th>a^2</th>";
echo "<th>b^2</th>";
echo "</tr>";
for($i=0; $i<=24; $i++){
	echo "<tr>";
	$I = $prime[$i] % 4;
	if($I==1){
		[$m,$n] = sum_of_square($prime[$i]); 
		$str = $m."^2";
		$str1 = $n."^2";
		echo "<td>$prime[$i]</td>";
                echo "<td>$str</td>";
                echo "<td>$str1</td>";
	}
	echo "<tr>";
}
echo "</table>";
function sum_of_square($N) {
	for($x=1; $x<=10; $x++){
		for($y=1; $y<=10; $y++){
			$F = pow($x,2) + pow($y,2);
		if($F==$N){
			return [$x, $y];
			}
		}
	}
}          
?>
</body>
</html>