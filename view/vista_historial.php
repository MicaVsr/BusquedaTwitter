<?php
    $historial=consultar_historial();

    foreach ($historial as $palabra){
        echo "<tr>
                    <td>".$palabra['palabra']."</td>
                    <td>".$palabra['fecha']."</td>
              </tr>";
    }

    /*for ($i=0; $i<sizeof($historial);$i++){
        echo "<tr>
                    <td>".$historial[$i]."</td>
              </tr>";
    }*/

?>