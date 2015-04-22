<!doctype html>
<html>
<head>
 	<meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>



<body>



	<div>
		<?php

			$emailTo="";
			$subject="I hope this works";
			$body="I think you're great";
			$header="From: john@jditc.com";
			
			if (mail($emailTo, $subject, $body, $header)){
			
				echo "Mail Sent Successfully!";
			
			}else {
			
				echo "Mail Not Sent!";
			
			}

		?>


	</div>

</body>
