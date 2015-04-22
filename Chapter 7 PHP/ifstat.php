<?php
	$number=1;
	
	$anotherNumber=2;
	
	$thirdNumber=2;
	
	echo "Are Number 1, 2 AND 3 all the same? =  ";
	
	if ($thirdNumber==$anotherNumber AND $number==$anotherNumber){
		echo "True";
	}else{
		echo "False";
	}
	
	echo "<br/><br/>";
		
	echo "Are Number 1 & 2 OR 2 & 3 the same? =  ";
	
	if ($thirdNumber==$anotherNumber OR $number==$anotherNumber){
		echo "True";
	}else{
		echo "False";
	}
	
	echo "<br/><br/>";


?>