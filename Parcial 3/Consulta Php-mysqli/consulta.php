<?php
$servidor = "localhost";
$basedatos = "peliculas";
$usuario = "root";
$password = "";

$con  = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se puede conectar a local");
$consulta = "select * from peliculas.pelicula";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");




$result = mysqli_fetch_all($registros);



mysqli_close($con);
echo json_encode($result);
?>