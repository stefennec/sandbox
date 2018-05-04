<?php

class AutomobileFactory{

  public static function create($marca,$modello){
    return new Automobile($marca,$modello);
  }
}

// se volessi creare la mia auto

$myAuto=AutomobileFactory::create("Fiat","500");
 ?>
