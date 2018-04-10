<?php

$ricercaAnnuncio=$_POST['RicercaAnnunci'];
$selettore=$_POST['selezioneCategorie'];
echo $ricercaAnnuncio;

$conn=mysqli_connect(filehost,"stefanophp7", "3pasquaman3", "my_stefanophp7");
if((empty($ricercaAnnuncio)) && ($selettore==0))
  {
  $str_sql="SELECT * From TArticoli";
  }
  else if ((empty($stringadiricerca)) && ($selettore!=0)){
    $str_sql="SELECT * From TArticoli INNER JOIN Tcategorie ON TAarticoli.CategoriaID=TCategorie.CategoriaID WHERE TCategorie.CategoriaID='$selettore'" ;
    }
  else if (($selettore==0) && (empty($stringadiricerca)==false)) {
    $str_sql="SELECT * From TArticoli WHERE TArticoli.Nome LIKE '%".$stringadiricerca."%'";
    }

    else

  {
  $str_sql="SELECT * From TArticoli INNER JOIN TCategorie ON TArticoli.CategoriaID=TCategorie.CategoriaID WHERE TArticoli.Nome LIKE '%".$stringadiricerca."%' && TCategorie.CategoriaID='$selettore'" ;
  }

echo $str_sql;

  $query=mysqli_query($conn,$SQLSelect);
  $nomeRecord=mysqli_num_rows($query);

  if ($nomeRecord=="") {
    echo "Non ci sono articoli con questo nome";
    mysqli_close($conn);
    return;
  }

 ?>
