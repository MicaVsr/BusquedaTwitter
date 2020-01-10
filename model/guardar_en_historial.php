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

    $hora=$fecha['hours'];
    if ($hora<10){
        $hora='0'.$hora;
    }
    $minutos=$fecha['minutes'];
    if ($minutos<10){
        $minutos='0'.$minutos;
    }
    $segundos=$fecha['seconds'];
    if ($segundos<10){
        $segundos='0'.$segundos;
    }

    $fecha_actual=$fecha['year'].$mes.$dia;
    $hora_actual=$hora.":".$minutos.":".$segundos;

    if(!empty($_POST['palabra'])){
        $palabra=$_POST['palabra'];

        $querySiYaExiste="SELECT palabra FROM historial WHERE palabra='$palabra'";
        $resultSiYaExiste = mysqli_query($conn, $querySiYaExiste);

        $count = mysqli_num_rows($resultSiYaExiste);
        if ($count!=1) {
            $query="INSERT INTO historial(palabra, fecha, hora) values ('$palabra', '$fecha_actual', '$hora_actual');";
            $result = mysqli_query($conn, $query);
        }
        mysqli_close($conn);
    }
}
?>