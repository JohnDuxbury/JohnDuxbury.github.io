<!doctype html>
<html>
<head>
    <title>Chapter 7 PHP - GET</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="A journey of a thousand miles begins with a single step."/>
    
</head>
<body>
<div>
	<?php
	
		if ($_GET["submit"]){
		
			if($_GET["name"]){
		
				echo "Your name is ".$_GET.('name'); 
		
			}else{
				echo "Please enter your name";
			}
		}	
	
	?>

	<form method="post">
		<label for="name">Name</label>
		<input name="name "type="text" />
		<input type="Submit" name="submit" value="Submit your name"/>
	</form>
</div>
</body>
</html>