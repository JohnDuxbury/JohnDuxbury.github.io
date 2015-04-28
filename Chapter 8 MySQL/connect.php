<?php

	$link=mysqli_connect("217.199.187.196","cl55-examplejd", "MJEJ3GF7/", "cl55-examplejd");
	
	if (mysqli_connect_error()){
		die ("Could not connect to Database");	
	};
	
	$query ="SELECT * FROM users";
	
	if ($result=mysqli_query($link, $query)){
		$row=mysqli_fetch_array($result);
		print_r($row);
	} else {
		echo "It failed";
	}
echo '<br/><br/><a href="index.html">Back to Index</a>'
?>