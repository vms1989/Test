<?php

class ViewProduct extends GetPoints {

  public function __construct() {
    $sql = "SELECT * FROM tuotteet";
    $query = $this->connect()->query($sql);
    $query->setFetchMode(PDO::FETCH_CLASS, 'GetPoints');
    while($r = $query->fetch()) {
      $data_product_id[] = $r->tuote_id;
      $data_product_name[] = $r->nimi;
      $data_product_price[] = $r->hinta;
      $data_product_image[] = $r->kuva;
      $data_product_link[] = $r->linkki;
      $data_points[] = $r->points;
      $data_id = array_combine($data_product_id, $data_points);
      $data_name = array_combine($data_product_id, $data_product_name);
      $data_price = array_combine($data_product_id, $data_product_price);
      $data_image = array_combine($data_product_id, $data_product_image);
      $data_link = array_combine($data_product_id, $data_product_link);
    }
    arsort($data_id);
    $pisteet = array_values($data_id);
    $data_name = array_replace($data_id, $data_name);
    $this->nimet = array_values($data_name);
    $arrlength = count($this->nimet);
    $x = 1;
    while($pisteet[1] == $pisteet[$x]) {
      $result = rand(1,$x);
      $x++;
    }
    $this->nimet[1] = $this->nimet[$result];
    $data_price = array_replace($data_id, $data_price);
    $this->hinnat = array_values($data_price);
    $this->hinnat[1] = $this->hinnat[$result];
    $data_image = array_replace($data_id, $data_image);
    $this->kuvat = array_values($data_image);
    $this->kuvat[1] = $this->kuvat[$result];
    $data_link = array_replace($data_id, $data_link);
    $this->linkit = array_values($data_link);
    $this->linkit[1] = $this->linkit[$result];
  }


  public function showName($product) {
    if (is_integer($product)) {
      echo $this->nimet[$product];
    } else {
      echo "Product needs to be an integer!";
    }
  }

  public function showPrice($product) {
    if (is_integer($product)) {
      echo $this->hinnat[$product];
    } else {
      echo "Product needs to be an integer!";
    }
  }

  public function showImage($product) {
    if (is_integer($product)) {
      echo $this->kuvat[$product];
    } else {
      echo "Product needs to be an integer!";
    }
  }

  public function showLink($product) {
    if (is_integer($product)) {
      echo $this->linkit[$product];
    } else {
      echo "Product needs to be an integer!";
    }
  }
}
