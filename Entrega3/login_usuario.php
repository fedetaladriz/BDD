<!-- <?php
$user = $_REQUEST['uname'];
$password = $_REQUEST['psw'];
?>
 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

  </head>
  <body>

  <script type="text/javascript">
  function myFunction()
  {
  alert("Nombre de usuario o contraseña incorrectos!");
  };
  </script>


  <?php
  //
  // include_once "psql-config.php";
  // try {
  //   $db = new PDO("pgsql:dbname=".DATABASE.";host=".HOST.";port=".PORT.";user=".USER.";password=".PASSWORD);
  //   }
  //   catch(PDOException $e) {
  //   echo $e->getMessage();
  //   }
  //
  //   $query_pass = "SELECT password FROM usuarios where usuario.nombre '$user';";
  //
  //   if ($password == $query_pass) {
  //       header ('location: perfil.php');
  //
  //   // } elseif ($a == $b) {
  //   //     echo "a es igual que b";
  //   } else {
  //       echo '<script>myFunction()</script>';
  //       header ('location: index.php');
  //
  //   }

    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['password'] = $password;

    if (1 == 1)
    {
       header ('location: perfil.php');
    }
    else
    {
     // header ('location: index.php');
     echo '<script type="text/javascript">myFunction();</script>';
     header ('location: index.php');
    }
    ?>

  <!--
  <?php echo $user ?>
  <?php echo $password ?> -->

  </body>
</html>
