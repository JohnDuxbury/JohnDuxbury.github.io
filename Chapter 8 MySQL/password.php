<?php

	

	echo "(L2) This is a well know password hidden with MD5 - this can be hacked using CrackStation! Not Secure <br /><br />";
	
	echo md5("password");

	echo "<br/><br/>(L3) This is a well know password hidden with MD5 - But this time it has been salted via fixed keyphrase! <br /><br />";
	
	$salt="aealkjh325weq312413lkjfnr0";
	
	echo md5($salt."password");
	
	echo "<br/><br/>(L4) This is a well know password hidden with MD5 - But this time it has been salted via unique to the customer variable and double hashed! <br /><br />";
	
	echo md5(md5($row['id'])."password");
?>