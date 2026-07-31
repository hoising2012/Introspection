<!DOCTYPE html>
<html>
<body>
<?php
$A = 343;
$last_digit = $A%10;
$front_digits = floor($A / 10);
$Double_x = 2*$last_digit;
$Sub = $front_digits - $Double_x;
$res = $Sub / 7;
$checker = is_decimal($res);
if($checker == true){
	echo $A." is not divisible by 7.";
}else{
	echo $A." is divisible by 7.";
}
echo "<br \>";
$B = 934;
$last_digit = $B%10;
$front_digits = floor($B / 10);
$Double_x = 2*$last_digit;
$Sub = $front_digits - $Double_x;
$res = $Sub / 7;
$checker = is_decimal($res);
if($checker == true){
	echo $B." is not divisible by 7.";
}else{
	echo $B." is divisible by 7.";
}
function is_decimal($val) {
    return is_numeric($val) && floor($val) != $val;
}
?>
</body>
</html>