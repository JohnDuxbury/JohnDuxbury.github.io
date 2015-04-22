<?php

	echo "This is a 'while' loop using a variable equal to 1, with a ++ increment<br/>";

	$i=1;
	
	while($i<20){
	
	echo $i." ";
	
	$i++;
	
	}
	
	echo "<br/><br/>";
	
	echo "A while loop running through an array until all array items displayed!<br/>";
	$array=array("apple","pear","custard");

	$j=0;

	while($array[$j]){
	
	//echo $array[$j]." ";
	echo "Key: $j Value: $array[$j] <br/>";
	
	$j++;
	
	}

	echo "<br/><br/>";

	echo "<a href=\"index.html\">Index HTML</a>";
?>