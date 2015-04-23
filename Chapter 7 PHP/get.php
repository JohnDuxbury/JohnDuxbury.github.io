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

<?php
	$names = array(“Fred”, “Rob”, “Ian”);
    	if ($_POST["submit"]) {
        if ($_POST["name"]) {
            foreach ($names as $name) {
￼￼￼
￼￼￼			$name;
				$knowYou = 1;
			}
		if ($POST[‘name’] == $name) echo “I know you! Your name is “.
			if (!$knowYou) echo “I don’t know you, “.$name;
			} else {
      		echo "Please enter your name";
			}
		}
?>

	<form>
		<label for="name">Name</label>
		<input name="name "type="text" />
		<input type="Submit" name="submit" value="Submit your name"/>
	</form>

</body>
</html>