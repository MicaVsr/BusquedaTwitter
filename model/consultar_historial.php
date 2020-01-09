<?php
include ("../config/conexion.php");

function consultar_historial(){
    $conn=getConexion();
    $query="SELECT palabra FROM historial";
    $result= mysqli_query($conn, $query);

    $historial = Array();
    $i=0;
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $historial[$i]=$row['palabra'];
            $i++;
        }
    }

    mysqli_close($conn);
    return $historial;
}
?>