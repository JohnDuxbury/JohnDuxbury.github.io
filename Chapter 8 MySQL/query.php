<?php

	$link=mysqli_connect("217.199.187.196","cl55-examplejd", "MJEJ3GF7/", "cl55-examplejd");
	
	if (mysqli_connect_error()){
		die ("Could not connect to Database");	
	};
	
	//$query ="SELECT * FROM users";
	//$query ="SELECT * FROM users WHERE name='John'";
	//$query ="SELECT * FROM users WHERE email LIKE'%h%'";
	//$query ="SELECT * FROM users WHERE name LIKE'j%'";
	//$query ="SELECT * FROM users WHERE name LIKE'%an'";
	//$query ="SELECT * FROM users WHERE id >3";
	//$query ="SELECT * FROM users WHERE id<4 AND password!=''";
	// to query names etc with escape characters i.e. ' or " etc
	//$query ="SELECT `name` FROM users WHERE name='".mysqli_real_escape_string($link, $name)."'";
	$name="Ian O'Neil";
	$query ="SELECT `name` FROM users WHERE name='".mysqli_real_escape_string($link, $name)."'";
	
	if ($result=mysqli_query($link, $query)){
	
		echo mysqli_num_rows($result);
		
		while	($row=mysqli_fetch_array($result)){
		
			print_r($row);
			
		}
	
	} else {
		echo "It failed";
	}
	
	
	echo '<br/><br/><a href="index.html">Back to Index</a>'
?>