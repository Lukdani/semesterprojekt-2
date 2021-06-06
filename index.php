<!DOCTYPE html>
<html lang="da">

<head>
    <title>Vikingeborgen Trelleborg</title>

    <!--Meta tags etc. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Forside med introvideo, kort oversigt over mulige aktiviteter og et lille skriv om skoleudflugter">
    <meta name="keywords" content="sommerferie, museum, familie">


    <meta property="og:title" content="Vikingeborgen Trelleborg"/>
    <meta property="og:image" content="https://astelun.dk/traelseborg/images/trelleborg.jpeg"/>
    <meta property="og:description" content="Trelleborg er et vikingmuseum, under åben himmel. Der er plads til hele familien, i vores langhus, samt på toppen af vores velbevarede vikingeborg."/>

    <!--Slut på meta -->

    <?php include "./includes/dependencies.php"; ?>
</head>

<body>
    <?php include "./includes/header.php";?>
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="./videos/trelleborg_hero.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="heroText-container">
                <div class="heroText">
                    <h1>Sommer på Trelleborg</h1>
                    <h5>Tag hele familien med</h5>
                </div>
            </div>
        </div>
    </header>
    <div>

    </div>
    <div class="row contentBox-container featuresBox overlay-container">
        <div class="overlay bg-dark"></div>
        <div class="col col-12 overlay-text">
            <h1 class="section-header">Trelleborg byder på</h1>
        </div>
        <div class="col col-12 col-lg-4">
            <div class="card overlay-text">
                <div class="card-body">


                    <h4 class="card-title">
                        <i class="fab fa-fort-awesome text-primary"></i>
                        <br>
                        Velbevaret vikingeborg
                    </h4>
                    <p class="card-text">
                        <span>
                            Trelleborg er en af de absolut bedst bevarede vikingeborge i verden.
                        </span>
                        <span>

                            Kom helt tæt på og udforsk vikingeborgen, som er opført på UNECO's liste.
                        </span>
                    </p>
                    <a href="#" class="btn btn-primary">Læs mere</a>
                </div>
            </div>
        </div>
        <div class="col col-12 col-lg-4">
            <div class="card overlay-text">
                <div class="card-body">
                    <h4 class="card-title">
                        <i class="fas fa-campground text-primary"></i>
                        <br>Kom på oplevelse
                    </h4>
                    <p class="card-text">
                        <span>
                            Få <a href="familier_boern.php#">krigertræning</a> , tilbered et <a
                                href="familier_boern.php#">vikingemåltid</a> over bål, overnat i <a
                                href="familier-og-grupper.php">langhuset</a>, hold
                            <a href="foedselsdag.php">børnefødselsdag</a>.
                        </span>
                        <span>
                            Skal du på oplevelse med familien, skolen eller andre, så har vi et velrettelagt forløb
                            fyldt med oplevelser<br>
                            <span>
                    </p>
                    <a href="/familier-og-grupper.php" class="btn btn-primary">Læs mere</a>
                </div>

            </div>
        </div>
        <div class="col col-12 col-lg-4">
            <div class="card overlay-text">
                <div class="card-body">


                    <h4 class="card-title"> <i class="fas fa-walking text-primary"></i>
                        <br>
                        Kom på rundvisning
                    </h4>
                    <p class="card-text">
                        <span>Få en <a href="/rundvisninger.php">rundvisning</a> på Vikingeborgen Trelleborg af vores
                            dygtige instruktører.</span>
                        <span>Bliv vist rundt både ved ringborgen, i langhuset, i vores museumsudstillinger og meget
                            andet.</span>
                    </p>
                    <a href="#" class="btn btn-primary">Læs mere</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row contentBox-container bg-light ">
        <h1 class="section-header mb-0 text-primary">Aktiviteter denne sommer</h1>
    </div>


    <div class="row contentBox-container activitiesBox overlay-container">
        <div class="overlay bg-dark"></div>

        <div class="col col-12 col-lg-4">
            <div class="card overlay-text">

                <img class="card-img-top" src="./images/rundtur.jpg" class="activity-card-image" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Rundvisning</h4>
                    <h5 class="card-subtitle mb-2 text-muted">Fra 100 DKK,-</h5>
                    <p class="card-text">Få en rundvisning på Vikingeborgen Trelleborg. I bliver vist rundt både ved
                        ringborgen, i langhuset, og i vores museumsudstillinger.</p>
                    <a href="rundvisninger.php" class="btn btn-primary">Læs mere</a>
                </div>
            </div>
        </div>



        <div class=" col col-12 col-lg-4">
            <div class="card overlay-text">
                <img class="card-img-top" src="./images/dyr.JPG" class="activity-card-image" alt="dyr">
                <div class="card-body">
                    <h4 class="card-title">Vikingesommer</h4>
                    <h5 class="card-subtitle mb-2 text-muted">27/06 - 15/08</h5>
                    <p class="card-text">Sommeren står for døren, og der er masser af planlagte aktiviteter.</p>
                    <a href="det-sker.php" class="btn btn-primary">Læs mere</a>
                </div>
            </div>
        </div>

        <div class=" col col-12 col-lg-4">
            <div class="card overlay-text">

                <img class="card-img-top" src="./images/mini_vikinger.jpg" class="activity-card-image"
                    alt="Card image cap">

                <div class="card-body">
                    <h4 class="card-title">Børneaktiviteter</h4>
                    <h5 class="card-subtitle mb-2 text-muted">For de mindste vikinger</h5>
                    <p class="card-text">Trelleborg er for <strong>hele</strong> familien, også de mindste. Vi har
                        børnefødselsdage, krigertræning og Ester & Vester's Oplevelsesjagt</p>
                    <a href="familier_boern.php" class="btn btn-primary">Læs mere</a>
                </div>

            </div>

        </div>
    </div>

    <div class="row contentBox-container bg-primary ">
        <h1 class="section-header mb-0 text-light">Skoler og institutioner</h1>
    </div>


    <div class="row contentBox-container activitiesBox overlay-container">
        <div class="overlay bg-dark"></div>
        <div class="row">
            <div class="col col-lg-7 col-12 textContainer textContainer overlay-text">
                Vikingeborgen Trelleborg tilbyder mange spændende <a
                    href="/familier-og-grupper.php">undervisningsforløb</a> tilpasset alle klassetrin.
                <br></br>
                Undervisningen foregår primært udendørs i den rekonstruerede landsby eller i langhuset og strækker sig
                fra rundvisninger, 1½ times forløb til hele dage og lejrskoler. Undervisningen inddrager eleverne og er
                genstands- og dialogbaseret med fokus på et <strong>højt fagligt niveau</strong>,
                <strong>bevægelse</strong> og <strong>praktisk håndværk</strong>.
                <br></br>
                <button class="btn btn-primary">Læs mere</button>
            </div>
            <div class="col col-lg-5 col-12 overlay-text">
                <img src="./images/trelleborg.jpeg" />
            </div>
        </div>
    </div>

    <?php include "./includes/footer.php";?>
    <script>
    console.log("test 2")
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>

</body>

</html>