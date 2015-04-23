<!doctype html>
<html>
<head>
    <title>PHP My Weather Form</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<style>
		html, body{
			height:100%;
		}
		p{
			padding-top:10px;
			padding-bottom:10px;
		}
		.center{
			text-align:center;
		}
		.white{
			color:white;
		}
		#successDiv{
			margin-top:15px;
			margin-bottom:10px;
			display:none;
		}
		#failDiv{
			margin-top:15px;
			margin-bottom:10px;
			display:none;
		}
		#noCity{
			margin-top:15px;
			margin-bottom:10px;
			display:none;
		}
		#submit{
			margin-top:15px;
		}
		#weatherCont{
			background-image:url("files/pink-sky.jpg");
			width:100%;
			height:100%;
			background-size:cover;
			background-position:center;
			padding-top:150px;
		}
	</style>
</head>

<body>

	<div id="weatherCont" class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">
				<h1 class="center">Weather Vane!</h1>
				<p class="lead center">A Weather vane is an instrument for showing the direction of the wind. This site will not only find the wind direction, but the temperature and the forecasted weather for the city that you select!.</p>
				<form>
						<div class="form-group">
							<input id="city" type="text" class="form-control" name="city" placeholder="Enter Your City E.g. London, Paris, New York"/>
						</div>
						<input type="submit" class="btn btn-success btn-large" id="findMyWeather" value="What's the Weather Like?"/>
				</form>
			</div>		
		</div>
		<div id="successDiv" class="alert alert-success">
			Success!
		</div>
		<div id="failDiv" class="alert alert-danger">
			There is no weather data for that city - Please try again!
		</div>
		<div id="noCity" class="alert alert-danger">
			Please enter a City!
		</div>
	</div>

<script>

	$("#findMyWeather").click(function(event){
	
		event.preventDefault();
			$(".alert").hide();		
		if ($("#city").val()!=""){
			$.get('scraper.php?city='+$('#city').val(), function( data ){
			//alert(data);		
			if (data==""){
				$("#failDiv").fadeIn();
			} else {
				$("#successDiv").html(data).fadeIn();
			}			
		});
			//alert("Clicked");
		} else {
			$("#noCity").fadeIn();
			
		}
	});
	
</script>
</body>
</html>