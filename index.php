<!DOCTYPE html>
<html lang="da">

<head>
    <title>Vikingeborgen Trelleborg</title>

    <!--Meta tags etc. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Forside med introvideo, kort oversigt over mulige aktiviteter og et lille skriv om skoleudflugter." />
    <meta name="keywords" content="sommerferie, museum, familie" />
    <meta name="robots" content="index,follow" />


    <meta property="og:title" content="Vikingeborgen Trelleborg" />
    <meta property="og:image" content="https://astelun.dk/traelseborg/images/trelleborg.jpeg" />
    <meta property="og:description"
        content="Trelleborg er et vikingmuseum for familien i sommerferien. Vi render rundt under åben himmel. Tag et smut ind i vores langhus, eller på toppen af vores velbevarede vikingeborg." />

    <!--Slut på meta -->

    <?php include "./includes/dependencies.php"; ?>
</head>

<body>
    <?php include "./includes/header.php";?>
    <header>
        <div class="overlay"></div>
        <video id="heroVideo" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source id="heroVideoSource" src="" type="video/mp4">
        </video>
        </span>
        <div class="container h-100">
            <div class="heroText-container">
                <div class="heroText">
                    <h1>Sommer på Trelleborg</h1>
                    <h5 class="heroText-subheader">Tag hele familien med</h5>
                </div>
            </div>
        </div>
    </header>

    <!-- TRELLEBORG BYDER PÅ -->

    <div class="contentBox-container featuresBox overlay-container">
        <div class="container">
            <div class="row ">
                <div class="overlay bg-dark"></div>
                <div class="col col-12 overlay-text">
                    <h1 class="section-header">Trelleborg byder på</h1>
                </div>
                <div class="col col-12 col-lg-4">
                    <div class="card card--fullHeight overlay-text">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fab fa-fort-awesome text-primary"></i>
                                <br>
                                Velbevaret vikingeborg
                            </h4>
                            <p itemscope itemtype="https://schema.org/LandmarksOrHistoricalBuildings" class="card-text">
                                <span class="card-text-section">
                                    <span itemprop="name">Vikingeborgen Trelleborg</span> er <span
                                        itemprop="description">
                                        en af
                                        de absolut bedst bevarede
                                        vikingeborge i verden.</span>
                                </span>
                                <span class="card-text-section">
                                    Kom helt tæt på og udforsk vikingeborgen, som har ansøgt om optagelse på UNECO's
                                    liste.
                                </span>
                            </p>
                            <a href="fejl404.html" class="btn btn-primary">Læs mere</a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-lg-4">
                    <div class="card card--fullHeight  overlay-text">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-campground text-primary"></i>
                                <br>Kom på oplevelse
                            </h4>
                            <p class="card-text">
                                <span class="card-text-section">
                                    Få <a href="familier_boern.php#">krigertræning</a> , tilbered et <a
                                        href="familier_boern.php#">vikingemåltid</a> over bål, overnat i <a
                                        href="familier-og-grupper.php">langhuset</a>, hold
                                    <a href="foedselsdag.php">børnefødselsdag</a>.
                                </span>
                                <span class="card-text-section">
                                    Skal du på oplevelse med familien, skolen eller andre, så har vi et velrettelagt
                                    forløb
                                    fyldt med eventyr.<br>
                                </span>
                            </p>
                            <a href="/familier-og-grupper.php" class="btn btn-primary">Læs mere</a>
                        </div>

                    </div>
                </div>
                <div class="col col-12 col-lg-4">
                    <div class="card card--fullHeight  overlay-text">
                        <div class="card-body">
                            <h4 class="card-title"> <i class="fas fa-walking text-primary"></i>
                                <br>
                                Kom på rundvisning
                            </h4>
                            <p class="card-text">
                                <span class="card-text-section">Få en <a href="/rundvisninger.php">rundvisning</a> på
                                    Vikingeborgen Trelleborg med vores
                                    dygtige instruktører.</span>
                                <span class="card-text-section">Bliv vist rundt både ved ringborgen, i langhuset, i
                                    vores
                                    museumsudstillinger og flere andre steder.</span>
                            </p>
                            <a href="fejl404.html" class="btn btn-primary">Læs mere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AKTIVITETER DENNE SOMMER -->

    <div class="bg-light">
        <div class="container">
            <div class="contentBox-container">
                <div class="row">



                    <h1 class="section-header text-primary">Aktiviteter denne sommer</h1>
                    <div class="col col-12 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/rundtur.jpg" alt="Card image cap">
                            <div class="card-body" itemscope itemtype="https://schema.org/Event">
                                <h4 itemprop="about" class="card-title">Rundvisning</h4>
                                <h5 class="card-subtitle mb-2 text-muted">Fra 100 DKK,-</h5>
                                <p class="card-text"><span itemprop="description">Få en rundvisning på Vikingeborgen
                                        Trelleborg.
                                        I bliver vist rundt både ved
                                        ringborgen, i langhuset, og i vores museumsudstillinger.</span></p>
                                <a href="rundvisninger.php" class="btn btn-primary">Læs mere</a>
                            </div>
                        </div>
                    </div>
                    <div class=" col col-12 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="./images/dyr.JPG" alt="dyr">
                            <div class="card-body" itemscope itemtype="https://schema.org/Event">
                                <h4 class="card-title" itemprop="name"> Vikingesommer</h4>
                                <h5 class="card-subtitle mb-2 text-muted"><span itemprop="startDate">27/06 </span>-
                                    <span itemProp="endDate">15/08</span>
                                </h5>
                                <p itemprop="description" class="card-text">Sommeren står for døren og der er mange
                                    planlagte aktiviteter som tekstilhåndværk, vikingemad og meget mere.</p>
                                <a href="det-sker.php" class="btn btn-primary">Læs mere</a>
                            </div>
                        </div>
                    </div>

                    <div class=" col col-12 col-lg-4">
                        <div class="card">

                            <img class="card-img-top" src="./images/mini_vikinger.jpg" alt="Card image cap">

                            <div class="card-body">
                                <h4 class="card-title">Børneaktiviteter</h4>
                                <h5 class="card-subtitle mb-2 text-muted">For de mindste vikinger</h5>
                                <p class="card-text">Trelleborg er for <strong>hele</strong> familien, også de mindste.
                                    Vi
                                    har
                                    børnefødselsdage, krigertræning og Ester & Vester's Oplevelsesjagt.</p>
                                <a href="familier_boern.php" class="btn btn-primary">Læs mere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- SKOLER OG INSTITUTIONER + YOUTUBE VIDEO -->

    <div class="bg-primary pb-4">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <h1 class="section-header section-header--half text-light">Skoler og institutioner</h1>
                    <div class="card" style="height:unset">
                        <img class="card-img-top" src="./images/trelleborg.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Undervisningsforløb</h4>
                            <p class="card-text">
                                Vikingeborgen Trelleborg tilbyder mange spændende <a href="/familier-og-grupper.php"
                                    class="text-dark text-decoration-none"> <strong>undervisningsforløb</strong></a>
                                tilpasset alle
                                klassetrin.
                                <br>
                                Undervisningen foregår primært udendørs i den rekonstruerede landsby eller i langhuset.
                                Der er mulighed for rundvisninger, undervisning frs 1½ times forløb, til hele dage, samt
                                lejrskoler.
                                Undervisningen inddrager
                                eleverne og
                                er
                                genstands- og dialogbaseret med fokus på et <strong>højt fagligt niveau</strong>,
                                <strong>bevægelse</strong> og <strong>praktisk håndværk</strong>.
                            </p>
                            <a href="familier-og-grupper.php" class="btn btn-primary">Læs mere</a>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 col-12">
                    <h1 class="section-header section-header--half  text-light">Se vores video</h1>
                    <div>

                        <div class="youTube-container">
                            <iframe src="https://www.youtube.com/embed/2r4km-3K3Fk" allowfullscreen
                                class="youTube-video" title="YouTube video player"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./includes/footer.php";?>

    <script>
    // Funktion til at tjekke, om enheden er en mobil enhed;
    const tjekForMobil = () => window.innerWidth < 992

    videoElement = document.getElementById('heroVideo');
    sourceElement = document.getElementById('heroVideoSource');

    const VideoPause = () => {
        document.getElementById('heroVideo').pause();
    }

    // Funktionen tager en boolean som parameter, som fortæller, om videoen skal vises til en mobil enhed;
    const AfspilVideo = (erMobilEnhed) => {
        videoElement.pause();
        sourceElement.src = erMobilEnhed ? "./videos/trelleborg_hero.mp4" : "./videos/trelleborg_hero_desktop.mp4";
        videoElement.load();
        videoElement.play();
    }

    // Event listener, som kalder en funktion, når window-objectet skifter størrelse;
    // Dette er for at sikre, at den rigtige video bliver vist, hvis fx inspector mode bliver brugt til at ændre til mobilvisning;
    window.onresize = opdaterVideoSrc;

    // Det er denne funktion, som bliver kaldt af ovennævnte event listener;
    function opdaterVideoSrc() {
        erMobilEnhed = tjekForMobil();
        AfspilVideo(tjekForMobil());
    }

    // Når siden indlæses, skal funktionen kaldes;
    AfspilVideo(tjekForMobil());
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>

</body>

</html>