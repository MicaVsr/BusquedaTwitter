<?php
include ("../config/conexion.php");

function consultar_historial(){
    $conn=getConexion();
    $query="SELECT palabra, fecha FROM historial";
    $result= mysqli_query($conn, $query);

    $historial = Array();

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $palabra=Array();
            $palabra['palabra']=$row['palabra'];
            $palabra['fecha']=$row['fecha'];
            $historial[]=$palabra;
        }
    }
    mysqli_close($conn);
    return $historial;
}
?>