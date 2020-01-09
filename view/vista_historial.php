<?php
    $historial=consultar_historial();

    for ($i=0; $i<sizeof($historial);$i++){
        echo "<tr>
                    <td>".$historial[$i]."</td>
              </tr>";
    }

?>