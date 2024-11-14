<?php
  // https://github.com/joetannenbaum/mr-clean#installation

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $body="<h2>Contacto a través del formulario de la web:</h2>\n";
  $body.="<p>Nombre: <strong>".$_POST["nombre"]."</strong></p>\n";
  $body.="<p>Email: <strong>".$_POST["email"]."</strong></p>\n";
  $body.="<p>Email: <strong>".$_POST["servicios"]."</strong></p>\n";
  $body.="<p>Comentarios: <strong>".$_POST["descripcion"]."</strong></p>";
  if(mail("miriam.bastardo@gmail.com", "Formulario de Contacto", $body, $cabeceras)){
    echo "Tu mensaje ha sido enviado, gracias por contactar con nosotros";
  }else{
    echo "Lo sentimos...";
  }
?>
