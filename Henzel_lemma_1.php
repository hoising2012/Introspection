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
echo "Use Hensel's Lemma to find a solution to x^3−2x≡1(mod125).";
echo "<table>";
echo "<tr>";
echo "<th>f(x)</th>";
echo "<th>Remainder</th>";
echo "</tr>";
for($x=0; $x<=4; $x++){
	$f_x = Pow($x,3)-2*$x-1;
	$R = $f_x%5;
	if($R<0){
	 	$R += 5;
	}
	echo "<tr>";
	echo "<td>$x</td>";
	echo "<td>$R</td>";
 	echo "</tr>";
}
echo "</table>";
echo "f'(3) = ".(f_dash(3)%5)." ≡ 0(mod5)";
echo "<br \>";
echo "f'(4) = ".(f_dash(4)%5)." ≢ 0(mod5)";
echo "<br \>";
echo "Taking a = 4; a_2 = ";
$a_2 = 4 - f(4)*1;
$a_2 = $a_2%25;
if($a_2<0){
	$a_2 += 25;
}
echo $a_2." mod 5^2; ";
$a_3 = 24 - f(24)*1;
$a_3 = $a_3%125;
if($a_3<0){
	$a_3 += 125;
}
echo "a_3 = ".$a_3." mod 5^3";
echo "<br \>";
echo "So x=124 is a solution to x^3−2x≡1(mod125).";
function f_dash($x){
	$res = 3*Pow($x,2)-2;
	return $res;
}
function f($x){
	$res = Pow($x,3)-2*$x-1;
	return $res;
}
?>
</body>
</html>