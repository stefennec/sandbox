<?php

class Automobile{

  private $marca;
  private $modello;

  public function __construct($mrc,$mdl){
    $this->marca=$mrc;
    $this->modello=$mdl;
  }

public function getMarcaModello(){
  return $this->marca." " $this->modello;
}



}



 ?>
