<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo;?></title>
    <script>
        // Función para ocultar el aviso de cookies
        function aceptarCookies() {
            document.getElementById('avisoCookies').style.display = 'none';
            localStorage.setItem('cookiesAceptadas', 'true');
        }

        // Comprobar si ya se han aceptado las cookies
        window.onload = function() {
            if (localStorage.getItem('cookiesAceptadas') === 'true') {
                document.getElementById('avisoCookies').style.display = 'none';
            }
        };
    </script>

</head>
<body>
    <h1>Miriam Bastardo</h1>
     

    <!-- Aviso de cookies -->
    <div id="avisoCookies" style="position: fixed; bottom: 0; left: 0; width: 100%; background-color: lightgray; padding: 10px; text-align: center;">
        <p>Este sitio web utiliza cookies para mejorar la experiencia de usuario. <a href="/politica-cookies" target="_blank">Más información</a>.</p>
        <button onclick="aceptarCookies()">Aceptar</button>
    </div>
  <header>
    <h2>Docente de profesión...programadora de corazón </h2>
    <img src="img/foto.jpg" alt="Foto Miriam">
    <nav>
    <ul>
        <li><a href="formulario.php">Formulario</a></li>
        <li><a href="tabla.php">Tabla</a></li>
        <li><a href="melada.html">Melada</a></li>
        <li><a href="politica-privacidad.php">Política de Privacidad</a></li>
        <li><a href="aviso-legal.php">Aviso Legal</a></li>
    </ul>
</nav>
    <br>
      <br>
      
</header>