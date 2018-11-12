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

  Buscar datos usuario


  <input type="text" name="user_id" />
  <?php
     $user_id = $_POST["user_id"];
     $url = "sender/" + $user_id
  ?>

  <form action=<?php echo $url;?> method="get" target="_blank">
      <button type="submit">Submit</button>
  </form>

<!--
  <button type="submit">Submit</button>

  <input type="button" onClick="window.location='sender/<?php echo $var ?>'">


  <form action= "sender/user_id" method="get">
    <div class="container">
      <input type="text" placeholder="Id de mensaje" name="user_id" required>
      <button type="submit">Submit</button>
    </div>
  </form>
 -->

</body>

</html>

  <!-- <form action="/sender/" method="post">

    <div class="container">
      <label for="uname"><b>Nombre de usuario</b></label>
      <input type="text" placeholder="Ingresar nombre de usuario" name="uname" required>

      <label for="psw"><b>Contraseña</b></label>
      <input type="password" placeholder="Ingresar Contraseña" name="psw" required>

      <button type="submit">Login</button>

    </div>

  </form>



  <body>

  </html> -->
