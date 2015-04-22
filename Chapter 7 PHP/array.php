<?php

	$myArray=array("pizza","tomato","pepperoni");
	
	print_r($myArray);
	echo "<br/></br>";	
	echo $myArray[2];
	
	echo "<br/><br/>";
	
	$anotherArray[0]="pizza";
	$anotherArray[1]="cheese";
	print_r($anotherArray);

	echo "<br/><br/>";
	
	$thirdArray=array(
	
		"France" => "French",
		"USA" => "English",
		"Germany" => "German"
	);
	
	print_r($thirdArray);

	$anotherArray[]="basil";
	
	echo "<br/><br/>";
	print_r($anotherArray);
	
	echo "<br/><br/>";
	
	unset($thirdArray["Germany"]);
	print_r($thirdArray);
	
	echo "<br/><br/>";
	
	echo "<a href=\"index.html\">Index HTML</a>";

	
?>