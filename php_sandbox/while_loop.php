<?php
while ($row=mysqli_fetch_assoc($query)) {
  echo ("<tr>
          <td>".$row[AnnuncioID]."</td>
          <td>".$row[Data]."</td>
          <td>".$row[Titolo]."</td>
          <td>".$row[Prezzo]."€</td>
          <td><img src=".$row[Foto1]." height=250 width=250></td>
           <td>".$row[Nome]."</td>
           <td><a href=annuncio.php?AnnuncioID=".$row[AnnuncioID].">Dettagli</a></td>
        </tr>");
}
mysqli_close($conn);




 ?>
