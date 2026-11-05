<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$A = 1092;
echo "The prime factors of ".$A." : ";
do{
	$A = $A/2;
	echo "2 ";	
}while($A%2==0);
for($i=3; $i<=$A/2; $i++){
	while($A%$i==0){
		echo $i." ";
		$A = $A/$i;
	}
}
$PC = primeCheck($A);
if($PC==1){
	echo $A;
}

function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}
?>
</body>
</html>