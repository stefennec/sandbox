<?php
// esempio di classe cliente per programmazione ad oggetti

namespace Editore;
/* il namespace è il nome della cartella contenente le classi utilizzate dal progetto,
di solito è una sottodirectory di src*/

//segue la classe con le sue proprietà,funzioni e metodi.


/**il nome della classe è sempre in maiuscolo mentre le variabili iniziano sempre con le minuscole.
 *
 */
class Cliente //extends AnotherClass
{

  // si mettono le proprietà di solito private della classe, le variabili.
  // tante quante ne servono per il nostro progetto.

  private $idCliente;
  private $nomeCliente;
  private $cognomeCliente;
  private $emailCliente;
  private $indirizzoCliente;
  private $nazioneCliente;
  private $cittaCliente;
  private $capCliente;
  private $etaCliente;
  private $telefonoCliente;

  // segue il costruttore che serve nella fase di creazione istanze e permette codice più chiaro, vi si possono mettere i valori di default
  //un ulteriore utilità del costruttore sta nel validare le variabili della classe,una funzione di controllo
  function __construct()
  {
    $this->idCliente=0;
    $this->nomeCliente=Nome;
    $this->cognomeCliente=Cognome;
    $this->emailCliente=Email;
    $this->indirizzoCliente=Indirizzo;
    $this->nazioneCliente=Nazione;
    $this->cittaCliente=Città;
    $this->capCliente=CAP;
    $this->etaCliente=età;
    $this->telefonoCliente=Telefono;

  }

  // dopo il costruttore seguono i metodi per elaborare la variabile privata, sono i set e get
  //set e get +camelcase

  public function setIdCliente($val){
    $this->idCliente=$val;
  }

  public function getIdCliente(){
    return $this->idCliente;
  }

  public function setNomeCliente($val){
    $this->nomeCliente=$val;
  }
  public function getNomeCliente(){
    return $this->nomeCliente;
  }

  public function setCognomeCliente($val){
    $this->cognomeCliente=$val;
  }

  public function getCognomeCliente(){
    return $this->cognomeCliente;
  }

  public function setEmailCliente($val){
    $this->emailCliente=$val;
  }

  public function getEmailCliente(){
    return $this->emailCliente;
  }

  public function setIndirizzoCliente($val){
    $this->indirizzoCliente=$val;
  }

  public function getIndirizzoCliente(){
    return $this->indirizzoCliente;
  }

  public function setNazioneCliente($val){
    $this->nazioneCliente=$val;
  }

  public function getNazioneCliente(){
    return $this->nazioneCliente;
  }

  public function setCittaCliente($val){
    $this->cittaCliente=$val;
  }

  public function getCittaCliente(){
    return $this->cittaCliente;
  }

  public function setCapCliente($val){
    $this->capCliente=$val;
  }

  public function getCapCliente(){
    return $this->capCliente;
  }

  public function setEtaCliente($val){
    $this->etaCliente=$val;
  }

  public function getEtaCliente(){
    return $this->etaCliente;
  }

  public function setTelefonoCliente(){
    $this->telefonoCliente=$val;
  }

  public function getTelefonoCliente(){
    return $this->telefonoCliente;
  }

  /*ho settato tutte le variabili, il costruttore e i metodi, ora in questo esempio inserisco una
  funzione per andare a settare i dati tramite una connessione al database */

  public function getFromDB($indice){
    $conn=mysqli_connect("localhost","nome_utente","password","database");//qui inserisco i parametri per la connesione al DB
    $myQuery="select * from Tabella where id=".$indice;//i parametri della query al // DB
    $result=mysq_query($conn,$myQuery);

    /*faccio partire un ciclo dove popolo i set con parametri del DB inerenti alla variabile $indice*/

    while ($row=mysqli_fetch_assoc($result)) {
      $this->setIdCliente=($row['idCliente']);// nelle [nome colonna del DB]
      $this->setNomeCliente=($row['nomeCliente']);
      $this->setCognomeCliente=($row['cognomeCliente']);
      $this->setEmailCliente=($row['emailCliente']);
      $this->setIndirizzoCliente=($row['indirizzoCliente']);
      $this->setNazioneCliente=($row['nazioneCliente']);
      $this->setCittaCliente=($row['cittaCliente']);
      $this->setCapCliente=($row['capCliente']);
      $this->setEtaCliente=($row['etaCliente']);
      $this->setTelefonoCliente=($row['telefonoCliente']);
    }
    mysqli_close($conn);
  }
}







 ?>
