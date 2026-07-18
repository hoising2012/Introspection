<!DOCTYPE html>
<html>
<body>
<?php
$A = 5;
$B = array_fill(0, 4, 0); 
echo "Integer partition on 5: ";
echo "<br \>";
echo $A;
echo "<br \>";
for($i=0; $i<=3; $i++){
	if($B[$i]!=1){
		$B[$i] = $B[$i] + 1;
		$A = $A - 1;
	}
	$sum_B = array_sum($B);
	if($sum_B == 2){
		echo $A.", ";
		echo "2";
		echo "<br \>";
	}elseif($sum_B == 3){
		echo $A.", ";
		echo "2, 1";
		echo "<br \>";
	}	
		echo $A.", ";
		$keys = array_keys($B, 1, true);
		for($j=0; $j<count($keys); $j++){
			  $k = $keys[$j];
			  if ($j === count($keys) - 1) {
				echo $B[$k];
			  }else{	
			  	echo $B[$k].", ";
			  }
		}
	echo "<br \>";
}
?>
</body>
</html>