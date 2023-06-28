<?php include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <header>
      <h1 class="logo">Pyme PLUS</h1>
      <nav>
        <ul>
          <li><a href="index.php">Inicio</a></li>
        </ul>
      </nav>
    </header>

    <section>
      <h2>Registro</h2>
      <form action="insert_user.php?registro=exitoso" method="POST">
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido">
        </div>
        <div class="form-group">
          <label for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico">
        </div>
        <div class="form-group">
          <label for="rut">RUT</label>
          <input type="text" id="rut" name="rut" placeholder="Ingrese RUT (sin puntos y con guión)">
        </div>
        <div class="form-group">
          <label for="celular">Celular</label>
          <input type="text" id="celular" name="celular" placeholder="Ingrese su celular">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
        </div>
        <button type="submit" class="button register-button">Registrarse</button>
      </form>
    </section>

    <footer>
      <!-- Pie de página -->
      <p>Todos los derechos reservados &copy; 2023</p>
    </footer>
  </div>
</body>
</html>
