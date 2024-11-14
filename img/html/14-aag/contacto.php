<?php 
$titulo = "La descripción de Contacto";
include ("_partials/header.php")
?>
	<article>
		<h1>
			<?php echo $titulo; ?>
		</h1>
	</article>
	 <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Formulario de contacto</title>
    <script src='https://www.google.com/recaptcha/api.js?render=6LcCCmEqAAAAAFkvLPsa_BsOjPdrSV2_q4ZTnpon'> 
    </script>
    <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('6LcCCmEqAAAAAFkvLPsa_BsOjPdrSV2_q4ZTnpon', {action: 'formulario'})
    .then(function(token) {
    var recaptchaResponse = document.getElementById('recaptchaResponse');
    recaptchaResponse.value = token;
    });});
    </script>
  </head>
  <body>
    <form action="enviar-datos1.php" method="post">
      <div>
        <label for="nombre">Nombre:</label>
        <input name="nombre" id="nombre" type="text"/>
      </div>
      <div>
        <label for="email">Email:</label>
        <input name="email" id="email" type="email"/>
      </div>
      <div>
        <label for="comentarios">Comentarios</label>
        <textarea name="comentarios" id="comentarios" cols="30" rows="10"></textarea>
      </div>
      <div>
        <input type="checkbox" name="privacidad" id="privacidad" required/>
        <label for="privacidad">
          He leido y acepto la
          <a href="politica-privacidad.html" target="_blank">política de privacidad</a>
        </label>
      </div>
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse"/>
      <button type="submit">Enviar</button>
    </form>
    <p>Para enviar este formulario debes aceptar nuestra política de privacidad.</p>
    <ul>
      <li>Responsable de los datos: xxxxxxxx</li>
      <li>Finalidad: Responder a solicitudes del formulario</li>
      <li>Legitimación: Tu consentimiento expreso</li>
      <li>Destinatario: xxxxxx(datos almacenados solo en cliente de email)</li>
      <li>Derechos: Tienes derecho al derecho al acceso, rectificación, supresión, limitación, portabilidad y olvido de sus datos. Envía un email a rgpd@xxxxxx.es</li>
    </ul>
  </body>
	<?php 
	include("_partials/footer.php")
	 ?>