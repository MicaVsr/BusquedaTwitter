<?php
include ("../config/conexion.php");

guardar_en_historial();
function guardar_en_historial(){
    $conn=getConexion();
    if(!empty($_POST['palabra'])){
        $palabra=$_POST['palabra'];

        $querySiYaExiste="SELECT palabra FROM historial WHERE palabra='$palabra'";
        $resultSiYaExiste = mysqli_query($conn, $querySiYaExiste);

        $count = mysqli_num_rows($resultSiYaExiste);
        if ($count!=1) {
            $query="INSERT INTO historial(palabra) values ('$palabra');";
            $result = mysqli_query($conn, $query);
        }
        mysqli_close($conn);
    }
}
?>