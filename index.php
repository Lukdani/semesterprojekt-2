<!DOCTYPE html>
<html lang="da">
<head>
<title>Vikingeborgen Trelleborg</title>
<?php include "./includes/dependencies.php"; ?>
</head>

<body>
	<?php include "./includes/header.php";?>

	  <!-- <div class="hero-section index-hero"> -->
		  <!-- <h1>
			  Åbent 10-17
			  <br/>
			  Tirsdag - Søndag
</h1> -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
	<i class="fas fa-circle"></i>
	</button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"><i class="fas fa-circle"></i></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"><i class="fas fa-circle"></i></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/seniorer.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Familie og grupper</h5>
        <p>Skal du holde <strong>børnefødselsdag</strong>, <strong>firmaarragement</strong>, <strong>klubtur</strong> eller noget andet? <br> Så hold dit næste arragement i Vikingeborgen Trelleborg. </p>
		<a href="./familier-og-grupper.php">
		<button class="btn btn-primary">Læs mere</button>	
		</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/familier_boern.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Skoler og institutioner</h5>
		<p>Prøv vores et af vores tilrettelagte undervisningsforløb.</p>
		<button class="btn btn-primary">Læs mere</button>	
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/langhuset.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
	  <h5>Trelleborgs historie</h5>
	  <p>Læs alt om Vikingeborgen Trelleborgs historie</p>
		<button class="btn btn-primary">Læs mere</button>	

      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
	  </div>
	  <div class="section">
		  <h1 class="section-header">Aktiviteter</h1>
		  <div class="activity-card-container">
		  <div class=" card-33">
		  <div class="card">
  <img class="card-img-top" src="./images/rundtur.jpg" class="activity-card-image" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Rundvisning</h4>
	<h5 class="card-subtitle mb-2 text-muted">Fra 100 DKK,-</h5>
    <p class="card-text">Få en rundvisning på Vikingeborgen Trelleborg. I bliver vist rundt både ved ringborgen, i langhuset, og i vores museumsudstillinger.</p>
    <a href="rundvisninger.php" class="btn btn-primary">Læs mere</a>
  </div>
</div>
</div>

<div class=" card-33">
		  <div class="card">
  <img class="card-img-top" src="./images/de_doede.jpeg" class="activity-card-image" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Vikingesommer</h4>
	<h5 class="card-subtitle mb-2 text-muted">27/06 - 15/08</h5>
    <p class="card-text">Sommeren står for døren, og der er masser af planlagte aktiviteter.</p>
    <a href="det-sker.php#vikingesommer" class="btn btn-primary">Læs mere</a>
  </div>
</div>
</div>

<div class=" card-33">
		  <div class="card">
  <img class="card-img-top" src="./images/mini_vikinger.jpg" class="activity-card-image" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Børneaktiviteter</h4>
	<h5 class="card-subtitle mb-2 text-muted">For de mindste vikinger</h5>
    <p class="card-text">Trelleborg er for <strong>hele</strong> familien, også de mindste. Vi har børnefødselsdage, krigertræning og Ester & Vester's Oplevelsesjagt</p>
    <a href="familier_boern.php" class="btn btn-primary">Læs mere</a>
  </div>
</div>
</div>
		  
</div>
</div>
<!-- </div> -->
<div class="section">
<h1 class="section-header">Skoler og institutioner</h1>
<div class="row">
	<div class="col col-lg-8 col-12 m-2">
	Vikingeborgen Trelleborg tilbyder mange spændende undervisningsforløb tilpasset alle klassetrin.
	<br></br>

Undervisningen foregår primært udendørs i den rekonstruerede landsby eller i langhuset og strækker sig fra rundvisninger, 1½ times forløb til hele dage og lejrskoler. Undervisningen inddrager eleverne og er genstands- og dialogbaseret med fokus på et højt fagligt niveau, bevægelse og praktisk håndværk.
<br></br>
<button class="btn btn-primary" >Læs mere om vores tilbud for skoler her</button>	
</div>
	<div class="col col-lg-4 col-12">
		<img src="./images/trelleborg.jpeg"/>
	</div>
</div>
</div>
	  <?php include "./includes/footer.php";?>
<script>console.log("test 2")</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>
</html>
