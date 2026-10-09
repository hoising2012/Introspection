<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
echo "<h1>Twin Prime Conjecture</h1>";
$prime = array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97);
$n = 0;
for($i = 0; $i<=24; $i++){
	if(($i!=0)&&($B==$prime[$i])){
		echo "(".$prime[$i-1].",".$prime[$i].")";
		echo "</br>";
		$n++;
	}
	$A = $prime[$i];
	$B = $prime[$i]+2;
}
echo "There are ".$n." pairs of twin prime between 1-100.";
?>
</body>
</html>
