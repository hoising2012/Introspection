<!DOCTYPE html>
<html>
<body>
<?php
echo "<h3>Star５</h3>";
echo star_head();
echo star_middle();
echo star_bottom();
function star_head(){
	print_space(8);
	echo "*";
	echo "<br \>";
        print_space(7);
	echo "***";
        echo "<br \>";
        print_space(6);
	echo "*****";
        echo "<br \>";
}
function star_middle(){
	print_star(17);
        echo "<br \>";
	print_space(2);
	print_star(13);
	echo "<br \>";
	print_space(4);
	print_star(9);
	echo "<br \>";
	print_space(4);
	print_star(9);
	echo "<br \>";
}
function star_bottom(){
	print_space(3);
	print_star(4);
	print_space(3);
	print_star(4);
	echo "<br \>";
	print_space(2);
	print_star(3);
	print_space(7);
	print_star(3);
	echo "<br \>";
	print_space(1);
	print_star(2);
	print_space(11);
	print_star(2);
	echo "<br \>";
}
function print_space($n){
    	for($i=1; $i<=$n; $i++){
		echo "&nbsp;&nbsp;";
	}
}
function print_star($n){
    	for($i=1; $i<=$n; $i++){
		echo "*";
	}
}
?>
</body>
</html>
