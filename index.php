<!DOCTYPE html>
<html>
<head>
  <title>Mockup de la plataforma</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body style="
margin-top: 10px;
margin-right: 10px;
margin-left: 10px;
margin-bottom: 10px;
">
  <div class="container">
    <header>
        <h3>
            <a href="formulario.html" class="">¿Quienes Somos?</a>
        </h3>
        <div class="search-bar">
          <input type="text" placeholder="Buscar productos...">
          <button type="submit">Buscar</button>
        </div>
        <nav>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </nav>
      </header>

      <div class="image-container">
        <img src="pymee.jpg" alt="Imagen central">
      </div>

      <section class="login-section">
        
        <h2 ><button style="margin: 15px 20px;" type="button" onclick="window.location.href='login.php'" class="login-button">Inicia Sesión</button></h2>

        <p style="margin: 15px 20px;">¿No tienes una cuenta? <a href="formulario.php" class="">Regístrate</a></p>
        
      </section>

      <section id="registroExitoso">
        <h2>Registro exitoso</h2>
        <p>¡Gracias por registrarte!</p>
      </section>    
      

    <section>
      <br>      
        <h2>
          <center>PYMES Destacadas</center>
        </h2>

        <div class="product">
          <div class="product-image">
            <img src="korb.jpg"  alt="Producto 1">
          </div>

          <div class="product-content">
            <h3>KORB</h3>
            <p>¡Compra los diferentes productos en KORB! más de 300 productos en stock, búsca el tuyo.</p>
            <a href="#" class="button">Ver más</a>
          </div>
        </div>

        <div class="product">
          <div class="product-image">
            <img src="royal.jpg"  alt="Producto 2">
          </div>
          <div class="product-content">
            <h3>CASA ROYAL</h3>
            <p>Casa Royal te ofrece una gran variedad de marcas y productos para soluciones en Electrónica, Seguridad, Audio y mucho más.</p>
            <a href="#" class="button">Ver más</a>
          </div>
        </div>

        <div class="product">
          <div class="product-image">
            <img src="mercadito.jpg"  alt="Producto 3">
          </div>
          <div class="product-content">
            <h3>EL MERCADITO</h3>
            <p>Compra con nosotros, compra YA!!! Recuerda que nuestros precios son más bajos que en otros lugares 😉</p>
            <a href="#" class="button">Ver más</a>
          </div>
        </div>
      </section>

      <script>
  // Obtener el parámetro de la URL
  const urlParams = new URLSearchParams(window.location.search);
  const registroExitoso = urlParams.get('registro');

  // Mostrar u ocultar el mensaje de registro exitoso según el parámetro
  if (registroExitoso === 'exitoso') {
    document.getElementById('registroExitoso').style.display = 'block';
  } else {
    document.getElementById('registroExitoso').style.display = 'none';
  }
</script>


    <footer>
      <p>Todos los derechos reservados &copy; 2023</p>
    </footer>
  </div>
</body>
</html>
