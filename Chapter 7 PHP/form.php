<?php

	if ($_POST['submit']){
	}
	
	if (!$_POST['yourname']){
		$error="<br/>Please enter your name";
	}
	if (!$_POST['email']){
		$error.="<br/>Please enter your email address";
	}
	if (!$_POST['comment']){
		$error.="<br/>Please enter your comment";
	}
	
	if ($_POST['email']!="" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
    	$error.="<br/>Please enter a valid email address";
	} 
	
	
	if ($error){
		$result='<div class="alert alert-danger"><strong>There were error(s) with your form:</strong>'.$error.'</div>';	
	}else{
	
		if(mail("", "Comment from website!", "Name: ".$_POST['name']."Email: ".$_POST['email']."Comment: ".$_POST['comment'])) {
			
			$result='<div class="alert alert-success"><strong>Thank You!</strong> Speak to you soon</div>';		
		
		}else{
			$result='<div class="alert alert-danger"><strong>Oops something went wrong</strong> Please try again later</div>';	
		}
	}


?>

<!doctype html>
<html>
<head>
    <title>PHP My Email Form</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<style>
		.emailForm{
			border:1px solid grey;
			border-radius:10px;
			margin-top:20px;
		}
		
		textarea{
			height:120px;
		}
		
		form{
			padding-bottom:20px;
		}
	</style>   
</head>

<body>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 emailForm">
					<h1>My Email Form</h1>
					<?php
						echo $result."<br />";
					?>
					<p class="lead">Please get in touch and I'll get back to you ASAP!</p>
					<form class="form-inline" method="post">
						<div class="form-group">
							<label for="yourname">Your Name</label>
							<input id="yourname" type="text" class="form-control" name="yourname" placeholder="Your Name" value="<?php echo $_POST['yourname']; ?>"/>
						</div>
						<div class="form-group">
							<label for="email">Your Email</label>
							<input id="email" type="email" class="form-control" name="email" placeholder="Your Email" value="<?php echo $_POST['email']; ?>" />
						</div>
						<div class="form-group">
							<label for="comment">Your Comment</label>
							<textarea class="form-control" name="comment" ><?php echo $_POST['comment']; ?></textarea>
						</div>	
							<input type="submit" class="btn btn-success btn-large" name="submit" value="Submit"/>
					</form>
				</div>
			</div>
		</div>
	<a href="index.html">Index HTML</a>
	<script>

	
	</script>

</body>
</html>