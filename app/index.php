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


<h1>¡Beinvenido a la pagina de consultas de la nebstore!</h1>
<img src="img.jpg" alt="mm" width="500" height="400">
<br>
Tiendas en las que ha comprado un usuario:
<br>
<form action="Consulta_1.php" method="post">
  Nombre:<br/>
  <input type="text" name="nombre">
  <br/><br/>
  <input type="submit" value="Buscar">
</form>
<br>
<br>
Stats por Id:
<br>
<form action="Consulta_Stats.php" method="post">
  Id:<br/>
  <input type="text" name="id_elegido">
  <br/>
  <br/><br/>
  <input type="submit" value="Buscar">
</form>
<br>
<br>
<br>
Consulta Pokemones mas altos:
<form action="Consulta_Altura.php" method="post">
  Altura Limite:<br/>
  <input type="text" name="altura">
  <br/>
  <br/><br/>
  <input type="submit" value="Buscar">
</form>
<br>
</body>
</html>
