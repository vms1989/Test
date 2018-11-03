<?php
include 'includes/dbh.php';
include 'includes/points.php';
include 'includes/viewproduct.php';
$products = new ViewProduct();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
      $(window).on("load", kuvat);
      $(window).resize(kuvat);
      function kuvat() {
        $(".lahjakortti").css("height", $(".tuote").height());
      };
    </script>
    <link href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open%20Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section class="main-container">
      <div class="container">
        <div class="row lahjakone">
          <div class="col-sm-5 col-sm-push-7 right">
            <div class="container-fluid">
              <img class="pull-right img-responsive logo" src="img/taitaentehty_logo.jpg" alt="logo">
            </div>
          </div>
          <div class="col-sm-7 col-sm-pull-5 left">
            <div class="container-fluid">
              <h2>Joululahjakone</h2>
              <p>Taitaentehty-verkkokaupan joululahjakone auttaa valitsemaan parhaat kotimaiset käsintehdyt lahjat</p>
            </div>
          </div>
        </div>
      </div>
      <article class="index-gallery">
        <div class="container">
          <div class="row tuotteet">
            <div class="col-sm-3 left2">
              <div class="tuote">
                <a href="<?php $products->showLink(0) ?>"><img src="<?php $products->showImage(0) ?>" class="img-responsive"></a>
              </div>
              <div class="nimi">
                <a href="<?php $products->showLink(0) ?>"><p><?php $products->showName(0); ?></p></a>
              </div>
              <div class="hinta">
                <b><?php $products->showPrice(0); ?></b>
              </div>
              <div class="osta">
                <a href="<?php $products->showLink(0) ?>"><button class="btn" type="submit" name="submit"><p>Osta</p></button></a>
              </div>
            </div>
            <div class="col-sm-3 center">
              <div class="tuote">
                <a href="<?php $products->showLink(1) ?>"><img src="<?php $products->showImage(1) ?>" class="img-responsive"></a>
              </div>
              <div class="nimi">
                <a href="<?php $products->showLink(1) ?>"><p><?php $products->showName(1); ?></p></a>
              </div>
              <div class="hinta">
                <b><?php $products->showPrice(1); ?></b>
              </div>
              <div class="osta">
                <a href="<?php $products->showLink(1) ?>"><button class="btn" type="submit" name="submit"><p>Osta</p></button></a>
              </div>
            </div>
            <div class="col-sm-3 right2">
              <div class="lahjakortti">
                <a href="http://www.taitaentehty.fi/lahjakortti"><img class="center-block img-responsive" src="img/taitaentehty_lahjakortti.jpg" alt="lahjakortti"></a>
              </div>
              <div class="lahjakortti-teksti">
                <b>Lahjakortti verkkokauppaan haluammallasi summalla</b>
              </div>
              <div class="osta">
                <a href="http://www.taitaentehty.fi/lahjakortti"><button class="btn" type="submit" name="submit"><p>Osta</p></button></a>
              </div>
            </div>
          </div>
        </div>
      </article>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 bottom">
            <p>Tee <a href="index.php">uusi haku</a>!</p>
            <p>Lisää tuotteita löydät myös Taitaentehty verkkokaupassa: <a href="http://www.taitaentehty.fi">www.taitaentehty.fi</a></p>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <img class="block-center img-responsive" src="img/joululahjakone_bg.jpg" alt="">
      </div>
    </section>
  </body>
</html>
