<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>DMI - vejret</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
	<link href="css/styles.css?v=2" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/17c6d1b25b.js" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php include "./include/navigation.php"; ?>

<div class="container-fluid indhold">
<div class="row">
  <div class="col-sm-12 col-lg-6">

    <div class="container vejret">

        <div class="row">
        <h3 class="mt-3 mb-3">Vejret i dag</h3>
            <div class="col-6 bg-customBlue text-white p-2 vejret-idag">
                <div class="row">
                    <div class="col-6 Vejrettop d-flex"> 
                      <img src="./images/sky.png"> 
                    </div>
                    <div class="col-6 Vejrettop d-flex">
                      <h1 class="display-1 ml-3">7°</h1>
                    </div>
                  </div>
                  <hr></hr>
                  <div class="row">
                            <div class="col-12 d-flex">
                              <table class="forecast-table ">
                                <tbody>
                                  <tr>
                                    <td>
                                      Føles som
                                    </td>
                                    <td class="forecast-table-content">
                                      7°
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Nedbør
                                    </td>
                                    <td>
                                      0mm
                                    </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Vind
                                      </td>
                                      <td>
                                          <i class="fas fa-long-arrow-alt-right text-white" sstyle="transform: rotate(15deg)"></i> 6 m/s
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          UV
                                      </td>
                                      <td>
                                          Max 1
                                      </td>
                                  </tr>
                                  <tr>
                                      <td>
                                          Sol op/ned
                                      </td>
                                      <td>
                                          07:11/17:46
                                      </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            <div class="col-6 p-0">
              <table class="forecast-table forecast-table--striped">
                <tbody>
                <tr class="bg-white">
                  <td>
                  <p>12:00</p>
                  <div class="row">
                    <div class="col">
                      <h2 class="text-customBlue">7°</h2>
                    </div>
                    <div class="col">
                    <img src="./images/ikon_sky.png">
                  </div>
                  <div class="col">
                      <i class="fas fa-long-arrow-alt-right" style="transform: rotate(30deg)"></i>5 m/s
                  </div>
                  </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>12:00</p>
                  <div class="row">
                    <div class="col">
                      <h2 class="text-customBlue">7°</h2>
                    </div>
                    <div class="col">
                    <img src="./images/ikon_sky.png">
                  </div>
                  <div class="col">
                      <i class="fas fa-long-arrow-alt-right" style="transform: rotate(115deg)"></i>5 m/s
                  </div>
                  </div>
                  </td>
                </tr>
                <tr class="bg-white">
                  <td>
                    <p>12:00</p>
                    <div class="row">
                      <div class="col">
                        <h2 class="text-customBlue">7°</h2>
                      </div>
                      <div class="col">
                      <img src="./images/ikon_sky.png">
                    </div>
                    <div class="col">
                        <i class="fas fa-long-arrow-alt-right"></i>5 m/s
                    </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>12:00</p>
                    <div class="row">
                      <div class="col">
                        <h2 class="text-customBlue">7°</h2>
                      </div>
                      <div class="col">
                      <img src="./images/ikon_sky.png">
                    </div>
                    <div class="col">
                        <i class="fas fa-long-arrow-alt-right"></i>5 m/s
                    </div>
                    </div>
                  </td>
                </tr>
                <tr class="bg-white">
                  <td>
                    <p>12:00</p>
                    <div class="row">
                      <div class="col">
                        <h2 class="text-customBlue">7°</h2>
                      </div>
                      <div class="col">
                      <img src="./images/ikon_sky.png">
                    </div>
                    <div class="col">
                        <i class="fas fa-long-arrow-alt-right" style="transform: rotate(215deg)"></i>5 m/s
                    </div>
                    </div>
                  </td>
                </tr>
              </tbody>
              </table>
            </div>

</div>
  </div>
</div>
  <div class="col-sm-12 col-lg-6">
 
    <div class="femdags-prognose container-fluid border-end-2 border-customBlue">
      <div class="row justify-content-center">
      <h2 class="mt-3 mb-3">5-døgnsprognose</h2>
          <div class="col-1-in-5 col femdags-prognose-grid col-half-offset">
              <p class="prognoseIndhold text-customBlue m-3">I dag</p>
              <img src="images/ikon_sky_small.png" class="m-auto">
              <h3 class="text-customBlue h3 mt-3 mb-3">7°</h3>
              <p class="femdags-prognose-grid-vejrinfo"><i class="fas fa-long-arrow-alt-right" style="transform: rotate(130deg)"></i>5 m/s</p>
              <p class="femdags-prognose-grid-vejrinfo">vindstød 10 m/s</p>
          </div>
          <div class="col-1-in-5 col femdags-prognose-grid" id="valgt-dag">
              <p class="prognoseIndhold text-customBlue mt-3 mb-3">Tirsdag</p>
              <img src="images/ikon_sky_small.png" class="m-auto">
              <h3 class="text-customBlue h3 mt-3 mb-3">7°</h3>
              <p class="femdags-prognose-grid-vejrinfo"><i class="fas fa-long-arrow-alt-right"></i>5 m/s</p>
              <p class="femdags-prognose-grid-vejrinfo">vindstød 10 m/s</p>
          </div>
          <div class="col-1-in-5 col femdags-prognose-grid">
              <p class="prognoseIndhold text-customBlue mt-3 mb-3">Onsdag</p>
              <img src="images/ikon_sky_small.png" class="m-auto">
              <h3 class="text-customBlue h3 mt-3 mb-3">7°</h3>
              <p class="femdags-prognose-grid-vejrinfo"><i class="fas fa-long-arrow-alt-right" style="transform: rotate(40deg)"></i>5 m/s</p>
              <p class="femdags-prognose-grid-vejrinfo">vindstød 10 m/s</p>
          </div>
          <div class="col-1-in-5 col femdags-prognose-grid">
              <p class="prognoseIndhold text-customBlue mt-3 mb-3">Torsdag</p>
              <img src="images/ikon_sky_small.png" class="m-auto">
              <h3 class="text-customBlue h3 mt-3 mb-3">7°</h3>
              <p class="femdags-prognose-grid-vejrinfo"><i class="fas fa-long-arrow-alt-right"></i>5 m/s</p>
              <p class="femdags-prognose-grid-vejrinfo">vindstød 10 m/s</p>
          </div>
          <div class="col-1-in-5 col femdags-prognose-grid">
              <p class="prognoseIndhold text-customBlue mt-3 mb-3">Fredag</p>
              <img src="images/ikon_sky_small.png" class="m-auto">
              <h3 class="text-customBlue h3 mt-3 mb-3">7°</h3>
              <p class="femdags-prognose-grid-vejrinfo"><i class="fas fa-long-arrow-alt-right" style="transform: rotate(10deg)"></i>5 m/s</p>
              <p class="femdags-prognose-grid-vejrinfo">vindstød 10 m/s</p>
          </div>
          <div class="femdags-prognose-grid row bg-white container-fluid">
              <div class="col-12"><p class="text-center text-customBlue mt-3 mb-3">Tirsdag d. 23 februar</p></div>
              <div class="femdags-prognose-grid-daginfo col-1-in-5 ´col">
                  <p class="text-center mb-3">12:00</p>
                  <img src="images/ikon_sky_small.png" class="m-auto">
                  <p class="h3 text-customBlue text-center mt-3">7°</p>
              </div>
              <div class="femdags-prognose-grid-daginfo col-1-in-5 col">
                  <p class="text-center mb-3">13:00</p>
                  <img src="images/ikon_sky_small.png" class="m-auto">
                  <p class="h3 text-customBlue text-center mt-3">7°</p>
              </div>
              <div class="femdags-prognose-grid-daginfo col-1-in-5 col">
                  <p class="text-center mb-3">14:00</p>
                  <img src="images/ikon_sky_small.png" class="m-auto">
                  <p class="h3 text-customBlue text-center mt-3">7°</p>
              </div>
              <div class="femdags-prognose-grid-daginfo col-1-in-5 col">
                  <p class="text-center mb-3">15:00</p>
                  <img src="images/ikon_sky_small.png" class="m-auto">
                  <p class="h3 text-customBlue text-center mt-3">7°</p>
              </div>
              <div class="femdags-prognose-grid-daginfo col-1-in-5 col">
                  <p class="text-center mb-3">16:00</p>
                  <img src="images/ikon_sky_small.png" class="m-auto">
                  <p class="h3 text-customBlue text-center mt-3">7°</p>
              </div>
          </div>
      </div>
  </div>
  </div>
<div class="container-fluid map mt-5 m-2">
    <h3 class="mt-3 mb-3">Vejrkort og radar</h3>
    <img src="images/map.png" class="img-fluid" alt="Responsive image">
</div>
</div>
</div>
<?php include "./include/footer.php"; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
