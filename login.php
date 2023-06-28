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
      <h2>
        <center>INICIAR SESIÓN</center>
        </h2>
      <form action="index.html?registro=exitoso" method="POST">
        <div class="form-group">
          <label for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" placeholder="Ingrese su correo electrónico">
        </div>

        <div class="form-group">
          <label for="password">Contraseña  </label>
          <input type="password" id="password" name="password" placeholder="Ingrese su contraseña">
        </div>
        <button type="submit" class="button register-button">INGRESAR</button>
      </form>
    </section>


  </div>
  
</body>

<footer>
  <!-- Pie de página -->
  <p>Todos los derechos reservados &copy; 2023</p>
</footer>
</html>
