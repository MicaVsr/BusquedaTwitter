<?php
include ("../config/conexion.php");

guardar_en_historial();
function guardar_en_historial(){
    $conn=getConexion();

    /*--Defino la fecha actual--*/
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $zona_horaria=date_default_timezone_get();
    $fecha=getdate();

    /*--Le agrego los 0 para evitar errores en la base de datos--*/
    $mes=$fecha['mon'];
    if ($mes<10){
        $mes='0'.$mes;
    }
    $dia=$fecha['mday'];
    if ($dia<10){
        $dia='0'.$dia;
    }

    $fecha_actual=$fecha['year'].$mes.$dia;

    if(!empty($_POST['palabra'])){
        $palabra=$_POST['palabra'];

        $querySiYaExiste="SELECT palabra FROM historial WHERE palabra='$palabra'";
        $resultSiYaExiste = mysqli_query($conn, $querySiYaExiste);

        $count = mysqli_num_rows($resultSiYaExiste);
        if ($count!=1) {
            $query="INSERT INTO historial(palabra, fecha) values ('$palabra', '$fecha_actual');";
            $result = mysqli_query($conn, $query);
        }
        mysqli_close($conn);
    }
}
?>