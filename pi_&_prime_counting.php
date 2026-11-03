<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$Q = 4;
$S = 0;
for($i=1; $i<=50; $i++){
	$F = 2*$i;
	$P = product($F);
	$S = $S + $Q/$P;
	$Q = $Q*-1;
}
echo "Pi is irrational and the value equal to ".round(3+$S,5);
echo "<br \>";
echo "Prime number counting function π(x): ";
echo "<br \>";
echo "π(10): ".Pi_x(10).", ";
echo "π(100): ".Pi_x(100).", ";
echo "π(1000): ".Pi_x(1000);
function Pi_x($m){
	$count = 0;
	for($j=1; $j<=$m; $j++){
		$F = Factor_num($j);
			if($F==2){
			$count++;	
		}
	}
	return $count;
}
function Factor_num($N){
	$count = 0;
	for($k=1; $k<=$N; $k++){
		if($N%$k==0){
			$count++;
		}
	}
	return $count;
}
function product($n){
	$A = $n;
	$B = $n + 1;
	$C = $n + 2;
	$result = $A*$B*$C;
	return $result;
}
?>
</body>
</html>