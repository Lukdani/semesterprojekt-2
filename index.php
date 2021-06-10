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
                    <h5>Tag hele familien med</h5>
                </div>
            </div>
        </div>
    </header>
    <div>

    </div>
    <div class="container-fluid p-0">


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
                        <p itemscope itemtype="https://schema.org/LandmarksOrHistoricalBuildings" class="card-text">
                            <span class="card-text-section">
                                <span itemprop="name">Vikingeborgen Trelleborg</span> er <span itemprop="description">
                                    en af
                                    de absolut bedst bevarede
                                    vikingeborge i verden.</span>
                            </span>
                            <span class="card-text-section">

                                Kom helt tæt på og udforsk vikingeborgen, som er opført på UNECO's liste.
                            </span>
                        </p>
                        <a href="fejl404.html" class="btn btn-primary">Læs mere</a>
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
                            <span class="card-text-section">
                                Få <a href="familier_boern.php#">krigertræning</a> , tilbered et <a
                                    href="familier_boern.php#">vikingemåltid</a> over bål, overnat i <a
                                    href="familier-og-grupper.php">langhuset</a>, hold
                                <a href="foedselsdag.php">børnefødselsdag</a>.
                            </span>
                            <span class="card-text-section">
                                Skal du på oplevelse med familien, skolen eller andre, så har vi et velrettelagt forløb
                                fyldt med eventyr.<br>
                            </span>
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
                            <span class="card-text-section">Få en <a href="/rundvisninger.php">rundvisning</a> på
                                Vikingeborgen Trelleborg med vores
                                dygtige instruktører.</span>
                            <span class="card-text-section">Bliv vist rundt både ved ringborgen, i langhuset, i vores
                                museumsudstillinger og flere andre steder.</span>
                        </p>
                        <a href="fejl404.html" class="btn btn-primary">Læs mere</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row contentBox-container bg-light">
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
                        <h5 class="card-subtitle mb-2 text-muted"><span itemprop="startDate">27/06 </span>- <span
                                itemProp="endDate">15/08</span></h5>
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
                        <p class="card-text">Trelleborg er for <strong>hele</strong> familien, også de mindste. Vi har
                            børnefødselsdage, krigertræning og Ester & Vester's Oplevelsesjagt.</p>
                        <a href="familier_boern.php" class="btn btn-primary">Læs mere</a>
                    </div>

                </div>

            </div>
        </div>

        <div class="row contentBox-container bg-primary">

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
                            <iframe src="https://www.youtube.com/embed/q1mObF2eLvU" allowfullscreen
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
    //Kredit til: https://stackoverflow.com/questions/3514784/what-is-the-best-way-to-detect-a-mobile-device
    const tjekForMobil = () =>
        /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i
        .test(navigator.userAgent) ||
        /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i
        .test(navigator.userAgent.substr(0, 4))
    const erMobilEnhed = tjekForMobil();

    function isMobile() {

    }
    videoElement = document.getElementById('heroVideo');
    sourceElement = document.getElementById('heroVideoSource');

    const VideoPause = () => {
        document.getElementById('heroVideo').pause();
    }

    const AfspilVideo = () => {
        videoElement.pause();
        sourceElement.src = erMobilEnhed ? "./videos/trelleborg_hero.mp4" : "./videos/trelleborg_hero_desktop.mp4";
        videoElement.load();
        videoElement.play();
    }

    AfspilVideo();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>

</body>

</html>