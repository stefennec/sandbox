<?php

namespace #path

/**
 *
 */
class Catalogo
{

  private $listaCatalogo;

  function __construct()
  {
    $this->$listaCatalogo=array();
    $this->getFromDB();
  }
/* array push spinge i nuovi elementi dell'array alla sua fine
addItem() è una funzione
la funzione addItem istruisce l'array push
($item) è il valore simbolico di ciò che viene pushato alla fine dell'array

*/
  public function addItem($item){
    array_push($this->listaCatalogo,$item);
  }

  public function getListaCatalogo(){
    return $this->listaCatalogo;
  }
  //la connessione al DB è generica non va a selezionare un articolo specifico,non si esclude nulla della tabella.
  public function getFromDB(){
    $conn=mysqli_connect("localhost","nome_utente","password","database");
    $myQuery=("select * from Tabella");
    $result=mysqli_query($conn,$myQuery);
    while ($row=mysqli_fetch_assoc($result)) {

      $itemP=new Prodotto();

      $itemP->setId($row['Id']);
      $itemP->setCodiceArticolo($row['CodiceArticolo']);
      $itemP->setNomeArticolo($row['NomeArticolo']);
      //e si continua così per tutti i restanti valori che mi servono per gestire la classe

      $this->addItem($itemP);

      /*con $itemP faccio un istanza della classe Prodotto

      della medesima istanza imposto i set

      con $this->addItem($itemP); vado a dire a additem di sostituire $item generico con i valori settati da $itemP
      questi valori verranno eventualmente pushati l'uno dopo l'altro se evocati.
      quindi la classe catalogo non è altro che un istanza della classe Prodotto e dei suoi valori sottoforma di array


      */

    }
    mysqli_close($conn);
  }
}





 ?>
