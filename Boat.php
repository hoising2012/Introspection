<!DOCTYPE html>
<html>
<body>
<?php
echo "&nbsp;&nbsp;*";
echo "<br \>";
for($i=1; $i<=5; $i++){
	for($j=0; $j<=$i; $j++){
    	echo "&nbsp;&nbsp;*";
    }
    echo "<br \>";
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "**";
echo "<br \>";
$N = 10;
$count = 0;
	while($N>5){
    		if($count!=0){
    		print_space($count);
            }
    		for($j=1; $j<=$N; $j++){
            echo " *";
            }
            $N=$N-2;
            $count++;
            echo "<br \>";
	}
    
    function print_space($n){
    	if($n==1){
        	echo "&nbsp;&nbsp;";
        }else{
        	echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    }
?>
</body>
</html>
