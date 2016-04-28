<?php
include ("Conexion.php");
?>
<?php
$autor = $_POST['autor'];
$titulo = $_POST['titulo'];
$editorial = $_POST['editorial'];
$fecha = $_POST['fecha'];

$consulta = "INSERT INTO insertar (Autor,Titulo,Editorial,Fecha_edicion)
    VALUES('$autor','$titulo','$editorial','$fecha')";

$resultado = mysql_query($consulta)or die ("Consulta fallida:".mysql_error());

echo "<h2>Se ha agregado un libro</h2>";
 ?>
