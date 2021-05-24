<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">

	<title>DMI - vejret</title>

	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css?v=2" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php include "./include/navigation.php"; ?>
<div class="container-fluid bg-customLight">
	<h3>VEJRET</h3>
	<br>

	<!-- Vejrkort -->
	<div class="container"><h5>Vejrkort</h5>
		<br>
		<div class="row">
			<div class="col">
				<div class="d-flex justify-content-center"><img src="images/DkVejrkort.jpg" alt="Vejrkort Danmark"></div>

			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">

			<div class="text-center">
				<img src="images/GreenlandMap.jpg" alt="Vejrkort Grønland">
				<img src="images/FaroeMap.jpg" alt="Vejrkort Færøerne">
			</div>
		</div>
	</div>


	<br>
	<!-- Beskrivelse af vejret -->
	<div class="container ">
		<p>Dette er en kort beskrivelse af vejret over Danmark</p>
	</div>
	<br><br>
	<!-- Prognose -->
	<div class="container"><h5> 5 døgnsprognose</h5>

<div class="d-flex justify-content-center">
	<img src="images/5days.png" alt="">
	</div>
</div>


<!-- Beskrivelse af prognosen -->
<div class="container">
	<p>Dette er en kort beskrivelse af 5 døgnsprognose over Danmark</p>

</div>
</div>

<?php include "./include/footer.php"; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
