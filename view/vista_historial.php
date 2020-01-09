<?php
    $historial=consultar_historial();

    if (!empty($historial)){
        foreach ($historial as $palabra){
            echo "<tr>
                    <td>".$palabra['palabra']."</td>
                    <td>".$palabra['fecha']."</td>
              </tr>";
        }
    }else{
        echo "<tr>
                    <td>Aún no hay búsquedas</td> 
                    <td></td>                  
              </tr>";
    }
?>