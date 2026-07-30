<!DOCTYPE html>
<html>
<body>
<?php
$count = 0;
$str = "";
echo "<h3>(Sum of Digits = 8)</h3>";
for($i = 1; $i<=8; $i++){
	echo $i."00s: ";
	for($j = 0; $j<=8; $j++){
		for($k = 0; $k<=8; $k++){
			$F = $i + $j + $k;
			if($F==8){
				$str .= $i.$j.$k;
				$str .= ", ";
				$count++;	
			}
		}
	}
	$newstr = rtrim($str, ", ");
	echo $newstr;
	echo "<br \>";
	$str = "";
}
echo "There are ".$count." possible numbers.";
?>
</body>
</html>
