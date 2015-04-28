<?php

	//setcookie("id","9876",time()+3600);
	
	setcookie("id","9876",time()-3600);
	
		echo $_COOKIE["id"];

?>