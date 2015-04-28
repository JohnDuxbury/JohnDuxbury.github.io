<?php

	$link=mysqli_connect("217.199.187.196","cl55-examplejd", "MJEJ3GF7/", "cl55-examplejd");
	
	if (mysqli_connect_error()){
		die ("Could not connect to Database");	
	};
	
	
	
	$query = "UPDATE `users` SET `email` = 'ian@hotmail.com' WHERE `id`=3 LIMIT 1";
	
	mysqli_query($link, $query);
	
	$query = "UPDATE `users` SET `name` = 'Tom' WHERE `name`='Ian' LIMIT 1";
	
	mysqli_query($link, $query);
	
echo '<br/><br/><a href="index.html">Back to Index</a>'
?>