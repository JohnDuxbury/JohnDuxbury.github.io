<?php

	echo "This is a 'for' loop using a variable equal to 1, with a ++ increment<br/>";
	for($i=1;$i<=10;$i++){
	
		echo $i."<br/>";
	
	}
	
	echo "<br/><br/>";
	echo "This is a 'for' loop using a variable equal to 00, with a -100 decrement<br/>";
	for($j=500;$j>=10;$j=$j-100){
	
		echo $j."<br/>";
	
	}
	
	echo "<br/><br/>";
	
	echo "This is a print_r($array) output!<br/>";
	$array=array("cat","dog","turtle","kangaroo");
	
	print_r($array);
	
	echo "<br/><br/>";
	echo "This is a 'foreach' loop<br/>";
	foreach ($array as $key => $value){
	
		echo "Key: $key Value: $value <br/>";
	
	}

?>