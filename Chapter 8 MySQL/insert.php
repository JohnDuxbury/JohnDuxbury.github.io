<?php

	$link=mysqli_connect("217.199.187.196","cl55-examplejd", "MJEJ3GF7/", "cl55-examplejd");
	
	if (mysqli_connect_error()){
		die ("Could not connect to Database");	
	};
	
	
	
	$query ="INSERT INTO `users` (`name`,`email`,`password`) VALUES('Ian','ian@ian.com','password')";
	
	mysqli_query($link, $query);
	
echo '<br/><br/><a href="index.html">Back to Index</a>'
?>