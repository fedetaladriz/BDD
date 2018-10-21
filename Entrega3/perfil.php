
<?php
  session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
  $user = $_SESSION['user'];
  $password = $_SESSION['password'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>

    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .container {
        padding: 16px;
    }

  </style>
  </head>
  <body>


  <form action="menu/historicas.php" method="post">
    <div class="container">
      <button type="submit">Transferencias Históricas</button>
    </div>
  </form>

  <form action="menu/Tansferir.php" method="post">
    <div class="container">
      <button type="submit">Transferir a Terceros</button>
    </div>
  </form>

  <form action="menu/Abonos.php" method="post">
    <div class="container">
      <button type="submit">Abonos</button>
    </div>
  </form>

  <form action="menu/seguros.php" method="post">
    <div class="container">
      <button type="submit">Seguros</button>
    </div>
  </form>

  <form action="menu/buscar_tiendas.php" method="post">
    <div class="container">
      <button type="submit">Buscar Tiendas</button>
    </div>
  </form>

  <form action="menu/buscar_productos.php" method="post">
    <div class="container">
      <button type="submit">Buscar Productos o Servicios</button>
    </div>
  </form>

  <form action="menu/comprar.php" method="post">
    <div class="container">
      <button type="submit">Comprar Productos o Servicios</button>
    </div>
  </form>

  <form action="index.php" method="post">
    <div class="container">
      <button type="submit">Salir</button>
    </div>
  </form>



  </body>
</html>
