<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

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

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    /* width: 40%;
    border-radius: 50%; */
    max-width: 300px;
    height: 300px;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<form action="login_usuario.php" method="post">

  <div class="imgcontainer">
    <img src="src/lock.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Nombre de usuario</b></label>
    <input type="text" placeholder="Ingresar nombre de usuario" name="uname" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingresar Contraseña" name="psw" required>

    <button type="submit">Login</button>

  </div>

</form>

</body>
</html>