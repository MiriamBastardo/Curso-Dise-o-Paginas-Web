<?php
  // https://github.com/joetannenbaum/mr-clean#installation

  $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $body="<h2>Contacto a través del formulario de la web:</h2>\n";
  $body.="<p>Nombre: <strong>".$_POST["Name"]."</strong></p>\n";
  $body.="<p>Email: <strong>".$_POST["Email"]."</strong></p>\n";
  $body.="<p>Enter a phone number: <strong>".$_POST["Phone-Number"]."</strong></p>\n";
  $body.="<p>Datos del referido: <strong>".$_POST["comentarios"]."</strong></p>";
  if(mail("contacto@geniusweb.es", "Referido de Genius", $body, $cabeceras)){
    echo "Tu mensaje ha sido enviado, gracias por confiar en nosotros, te llamaremos a la brevedad para confirmar tu petición";
  }else{
    echo "Lo sentimos, no hemos podido validar tu solicitud...";
  }
?>
