<!DOCTYPE html>
<html>
<body>
<?php
$matrix = array(
	array(5,0,0,0,0),
	array(0,0,0,0,0),
	array(0,0,0,0,0),	
	array(0,0,0,0,0),
	array(0,0,0,0,0),
	array(0,0,0,0,0),
	array(0,0,0,0,0)
);

$firstRow = $matrix[0] ?? [];
$filtered = array_filter($firstRow, fn($v) => $v !== 0);
$lastNonZero = !empty($filtered) ? end($filtered) : null;

$matrix[1][0] = $lastNonZero - 1;
$matrix[1][1] = 1;

$secondRow = $matrix[1] ?? [];
$filtered = array_filter($secondRow, fn($v) => $v !== 0);
$lastNonZero = !empty($filtered) ? end($filtered) : null;

$matrix[2][0] = $matrix[1][0] - $lastNonZero;
$matrix[2][1] = 1 + $lastNonZero;

$thridRow = $matrix[2] ?? [];
$filtered = array_filter($thridRow , fn($v) => $v !== 0);
$lastNonZero = !empty($filtered) ? end($filtered) : null;

$matrix[3][0] = $matrix[2][0];
$matrix[3][1] = $lastNonZero - 1;
$matrix[3][2] = 1;

$fourthRow = $matrix[3] ?? [];
$filtered = array_filter($fourthRow, fn($v) => $v !== 0);
$lastNonZero = !empty($filtered) ? end($filtered) : null;

$matrix[4][0] = $matrix[3][0] - 1;
$matrix[4][1] = $lastNonZero + 1;
$matrix[4][2] = 1;

$fifthRow = $matrix[4] ?? [];
$filtered = array_filter($fifthRow, fn($v) => $v !== 0);
$lastNonZero = !empty($filtered) ? end($filtered) : null;

$matrix[5][0] = $matrix[4][0];
$matrix[5][1] = $matrix[4][1] - 1;
$matrix[5][2] = $lastNonZero;
$matrix[5][3] = 1;

$matrix[6][0] = 1;
$matrix[6][1] = 1;
$matrix[6][2] = 1;
$matrix[6][3] = 1;
$matrix[6][4] = 1;

echo "<pre>";
print_r($matrix);
echo "</pre>";
?>
</body>
</html>