<?php

class GetPoints extends Dbh {

  public $nainen, $mies, $lapsi, $kotihiiri, $ulkoilma, $eläinrakas, $ruoanlaitto, $sisustus, $hupailu, $asuste, $points;

  public function __construct() {

    $vastaukset = array(
      'eläinrakas'=>'eläinrakas',
      'ruoanlaitto'=>'ruoanlaitto',
      'sisustus'=>'sisustus',
      'hupailu'=>'hupailu',
      'asuste'=>'asuste'
    );

    foreach($vastaukset as $x => $x_value) {
      if(!isset($_POST[$vastaukset[$x]])) {
        $vastaukset[$x_value] = 0;
      } else {
        $vastaukset[$x_value] = $_POST[$vastaukset[$x_value]];
      }
    }

    $kysymykset = array(
      'kysymys1',
      'kysymys2'
    );

    $arrlength = count($kysymykset);

    for($x = 0; $x < $arrlength; $x++) {
      if(!isset($_POST[$kysymykset[$x]])) {
        $kysymykset[$x] = 0;
      } else {
        $kysymykset[$x] = $_POST[$kysymykset[$x]];
      }
    }

    $kysymys1 = $kysymykset[0];
    $kysymys2 = $kysymykset[1];

    $vastaukset2 = array(
      'nainen'=>0,
      'mies'=>0,
      'lapsi'=>0,
      'kotihiiri'=>0,
      'ulkoilma'=>0
    );

    switch($kysymys1) {
      case 'nainen':
        $vastaukset2['nainen']++;
      break;
      case 'mies':
        $vastaukset2['mies']++;
      break;
      case 'lapsi':
        $vastaukset2['lapsi']++;
      break;
    }

    switch($kysymys2) {
      case 'kotihiiri':
        $vastaukset2['kotihiiri']++;
      break;
      case 'ulkoilma':
        $vastaukset2['ulkoilma']++;
      break;
    }

    $vastaukset3 = array_merge($vastaukset2, $vastaukset);

    foreach($vastaukset3 as $x => $x_value) {
      $this->points = $this->points + $x_value * $this->$x;
    }
  }
}
