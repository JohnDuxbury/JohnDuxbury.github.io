<?php

	session_start();
	
		$_SESSION['id']=1234;
		
		print_r($_SESSION);
		
		//session_destroy();
	

?>