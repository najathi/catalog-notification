<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SLBI - Notification</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
		<a class="navbar-brand" href="#">
			<img src="assets/slbi_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			SLBI FCM
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://www.slbi.lk/" target="_blank">SLBI</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://catalog.slbi.lk/" target="_blank">Catalog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://github.com/SLBILK/" target="_blank">Github</a>
				</li>
			</ul>
		</div>
	</nav>

<div class="container">

	<h3 class="display-4 mc-2">SLBI Notification Generator</h1>

	<?php
		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if (strpos($fullUrl, "not=added") == true) {
				echo '<div style="margin-top:1rem;" class="alert alert-primary" role="alert">
				<strong>Notification </strong>has been added successfully.
				</div>';
		} elseif (strpos($fullUrl, "err=try") == true) {
				echo '<div style="margin-top:1rem;" class="alert alert-danger" role="alert">
				<strong>Notification</strong> Sorry, that wasn\'t added, <b> Please Try Again</b>  
				</div>';
		}
	?>

	<form action="includes/send.inc.php" method="POST">
		<div class="form-group">
			<label for="title">Notification Title</label>
			<input type="text" class="form-control" name="title" placeholder="Notification title">
		</div>
		<div class="form-group">
			<label for="title">Notification Text</label>
			<textarea type="text" class="form-control" name="message" placeholder="Notification title"></textarea>
		</div>
		<div class="form-group">
			<label for="title">Notification URL</label>
			<input type="url" class="form-control" name="url" placeholder="Notification URL">
		</div>
		<button type="submit" name="submitNoti" class="btn btn-primary mb-2">Send Notification</button>
	</form>
</div>

</body>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>