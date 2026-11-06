<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
echo "<h3>Decimal to Octal number</h3>";
$A = 2026;
echo "The Dec: ".$A;
echo "<br \>";
$Octal = "";
do{
	$quotient = intdiv($A, 8); 
	$remainder = $A % 8; 
	$Octal = $remainder.$Octal;
	$A = $quotient;
}while($A!=0);
echo "The Oct: ".$Octal; 
?>
</body>
</html>