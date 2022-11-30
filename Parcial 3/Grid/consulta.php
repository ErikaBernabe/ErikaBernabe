<?php
$servidor = "localhost";
$basedatos = "peliculas";
$usuario = "root";
$password = "";

$con  = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se puede conectar a local");
$consulta = "select * from pelicula";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

//$result = mysqli_fetch_all($registros);

// $arreglo = array();
// while($fila = mysqli_fetch_assoc($registros)){
//     $arreglo[] = $fila;
// }
 
// while($result = mysqli_fetch_array($registros,MYSQLI_ASSOC)){
//     printf($result['Id'].' '.$result['Nombre'].' '.$result['Genero'].' '.$result['Fecha de su estreno'].' '.$result['Duracion'].'<br>');
// }

// while($result = mysqli_fetch_array($registros,MYSQLI_NUM) ){
//     printf($result[0].' '.$result[1].' '.$result[2].' '.$result[3].' '.$result[4].'<br>');
// }

$result = mysqli_fetch_all($registros,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);
?>