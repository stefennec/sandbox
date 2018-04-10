<?php

/*PER ASSICURARCI DELL'ESISTENZA DI UN RECORD IN UNA TABELLA USIAMO QUESTA FUNZIONE

mysqli_num_rows();

*/

//ESEMPIO di interrogazione a QUERY

$numeroRecord=mysqli_num_rows($query);

if ($numeroRecord==0) {
  echo("Devi prima registrarti");
  mysqli_close($conn);
}


 ?>
