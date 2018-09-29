<!DOCTYPE html>
<html>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>

<?php
  include_once "psql-config.php";
  try {
    $db = new PDO("pgsql:dbname=".DATABASE.";host=".HOST.";port=".PORT.";user=".USER.";password=".PASSWORD);
    }
    catch(PDOException $e) {
    echo $e->getMessage();
    }
	$nombre = $_POST["nombre"];
	$nombre = strtoupper($nombre);

 	# $query = "SELECT id, nombre FROM ejercicio_ayudantia where tipo like '%$tipo%' and nombre like '$nombre';";
	$query = "SELECT tiendas.id_tienda, tiendas.nombre from tiendas, compras where tiendas.id_tienda = compras.id_tienda and compras.id_usuario in (
		select usuarios.id_usuario from usuarios where usuarios.nombre = '$nombre');";
	$result = $db -> prepare($query);
	$result -> execute();
	# Ojo, fetch() nos retorna la primer fila, fetchAll()
	# retorna todas.
	$tiendas = $result -> fetchAll();
	echo "<table><tr><th>ID</th><th>Nombre</th></tr>";
	foreach ($tiendas as $tienda) {
  		echo "<tr><td>$tienda[0]</td><td>$tienda[1]</td></tr>";
	}
	echo "</table>";


?>

<form action="index.php" method="post">
  <input type="submit" value="Volver">
</form> 
</body>
</html>