<?php
$titulo = "Formulario";
  $description = "Contenido de la Presentación - Formulario";
  include("_partials/header.php");
?><article>
		<h1>
			<?php echo $titulo; ?>
		</h1>
	</article>
  <!-- Contenido principal -->
<main>
<body>
   <form action="enviar-datos.php" method="post">
        <div>
            <label for="nombre">Nombre:</label>
            <input name="nombre" id="nombre" type="text" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input name="email" id="email" type="email" required>
        </div>
        <div>
            <label for="servicios">¿Qué tipo de servicios necesitas?</label><br>
            <select id="servicios" name="servicios" required><br>
                <option value="" disabled selected>Selecciona un servicio</option>
                <option value="crear_web">Crear web</option>
                <option value="actualizar_web">Actualizar web</option>
                <option value="mantener_web">Mantener web</option>
                <option value="identidad_corporativa">Identidad corporativa</option>
                <option value="fotografia">Fotografía</option>
                <option value="ilustracion">Ilustración</option>
            </select>
        </div>
        <div>
            <label for="descripcion">Descripción:</label><br>
            <textarea name="descripcion" id="descripcion" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <input type="checkbox" name="privacidad" id="privacidad" required>
            <label for="privacidad">
                He leído y acepto la 
                <a href="politica-privacidad.html" target="_blank">política de privacidad</a>
            </label>
        </div>
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        <button type="submit">Enviar</button>
    </form>
    <p>Para enviar este formulario debes aceptar nuestra política de privacidad.</p>
    <ul>
      <li>Responsable de los datos: Miriam Bastardo</li>
      <li>Finalidad: Responder a solicitudes del formulario</li>
      <li>Legitimación: Tu consentimiento expreso</li>
      <li>Destinatario: Miriam Bastardo(datos almacenados solo en cliente de email)</li>
      <li>Derechos: Tienes derecho al derecho al acceso, rectificación, supresión, limitación, portabilidad y olvido de sus datos. Envía un email a miriam.bastardo@gmail.com</li>
    </ul>
  </body>
	<h1>"Quién no vive para servir, no sirve para vivir"</h1><br>

</main>
	<?php 
	include("_partials/footer.php")
	 ?>