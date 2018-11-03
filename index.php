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
    <link href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open%20Sans" rel="stylesheet">
    <link rel="stylesheet" href="style-index.css">
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
              <p>Testi</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row kysymykset">
          <div class="col-sm-5 col-sm-push-6 right2">
            <div class="container-fluid">
              <div class="teksti">
                <h3>Anna tänä vuonna <br><span style="color: rgb(172, 185, 16)">erityinen</span> lahja</h3>
                <p>Joulu on suomalaisen kädentaidon juhla-aikaa. Käsintehdyssä on jotakin aivan erityistä taikaa, mitä ei marketin tuotteesta löydy. Taitantehdyn kautta löydät tuotteet, jotka ovat kokonaan suomalaisten suunnittelemia ja valmistamia, todellisia lähi-tuotteita! Sekös saa kenet tahansa <b>jouluiselle mielelle.</b></p>
                <p>Jos valinnan vaikeus yllättää, niin tämä kätevä pikku apuväline auttaa löytämään juuri oikean laadukkaan käsintehdyn aarteen!</p>
                <p>Lisää löydät aina osoitteessa <a href="http://www.taitaentehty.fi">www.taitaentehty.fi</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-sm-pull-6 left2">
            <form class="form-inline" action="bestproducts.php" method="post">
              <div class="container-fluid">
                <div class="kysymys1">
                  <h4>Onko lahjan saaja</h4>
                  <div class="radio">
                    <label><input type="radio" value="nainen" name="kysymys1"><p>nainen</p></label>
                  </div>
                  <br>
                  <div class="radio">
                    <label><input type="radio" value="mies" name="kysymys1"><p>mies</p></label>
                  </div>
                  <br>
                  <div class="radio">
                    <label><input type="radio" value="lapsi" name="kysymys1"><p>lapsi</p></label>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="kysymys2">
                  <h4>Onko hän enemmän</h4>
                  <div class="radio">
                    <label><input type="radio" value="kotihiiri" name="kysymys2"><p>kotihiiri</p></label>
                  </div>
                  <br>
                  <div class="radio">
                    <label><input type="radio" value="ulkoilma" name="kysymys2"><p>ulkoilmaihminen</p></label>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="kysymys3">
                  <h4>Pitääkö hän</h4>
                  <div class="checkbox">
                    <label><input type="checkbox" value=1 name="eläinrakas"><p>eläimistä</p></label>
                  </div>
                  <br>
                  <div class="checkbox">
                    <label><input type="checkbox" value=1 name="ruoanlaitto"><p>ruoanlaitosta</p></label>
                  </div>
                  <br>
                  <div class="checkbox">
                    <label><input type="checkbox" value=1 name="sisustus"><p>sisustamisesta</p></label>
                  </div>
                  <br>
                  <div class="checkbox">
                    <label><input type="checkbox" value=1 name="hupailu"><p>hupailusta</p></label>
                  </div>
                  <br>
                  <div class="checkbox">
                    <label><input type="checkbox" value=1 name="asuste"><p>asusteista</p></label>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="button">
                  <button type="submit" name="submit"><b>Hae lahjaideat</b></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <img class="block-center img-responsive" src="img/joululahjakone_bg.jpg" alt="">
      </div>
    </section>
  </body>
</html>
