<?php

/* ESEMPIO DI FUNZIONE CONTENTENTE CONNESIONE MYSQL E CICLO DI RACCOLTA DATI
DA DATABASE PER OOP */

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


 ?>
