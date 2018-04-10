<?php

//SEGUE UN ESEMPIO DI PHP INERENTE IL LOGIN DI UN FORM IN html

/* LA VARIABILE

$confermaRegistrazione

CI VA A LEGGERE UN VALORE DELLA ROW, È UTILE PER MANIPOLARE O
INTERROGARE ELEMENTI SPECIFICI NELLA TABELLA */

 

$emailSQL=$_POST['emailForm'];
$passwordSQL=$_POST['passwordForm'];



if (!empty($emailSQL)) {
  $conn=mysqli_connect("localhost","pasquaman", "3P@squaman3", "Luongo");
  $strSQL="SELECT * FROM `Tusers` WHERE `Email`='$emailSQL' AND `Password`='$passwordSQL'";
  $query=mysqli_query($conn,$strSQL);
  $numeroRecord=mysqli_num_rows($query);
  $row=mysqli_fetch_assoc($query);
  $confermaRegistrazione=$row['RegistrazioneConfermata'];

  echo $strSQL;



    if ($numeroRecord==0) {
      echo("Devi prima registrarti");
      mysqli_close($conn);
    }
    else {
      if ($confermaRegistrazione==0) {
        echo('devi confermare la tua email');
        return;
        mysqli_close($conn);
      }
      else {
        header("location: areaRiservata.php");
        return;
        mysqli_close($conn);
      }
    }
}





 ?>
