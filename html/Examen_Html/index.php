<?php
$titulo = "Miriam Bastardo";
  $description = "Contenido de la presentación de Home";
  include("_partials/header.php");
?>
<article>
		<h1>
			<?php echo $titulo; ?>
		</h1>
	</article>
  <!-- Contenido principal -->
<main>
	<h2>Presentación</h2>

    <mark><p>Soy una persona creativa que me gusta aprender y probar cosas nuevas. Estoy reciclando mi profesión , vengo de<strong>Venezuela</strong> y mi perfil es del área docente, me gradue en la <abbr title="Universidad Catolica Andrés Bello">UCAB</abbr> de Licenciada en Educación, luegoestuve en un colegio donde daba clases de Historia y Geografía. <br>Llegar a España me cambio la vida y entrar al mundo tecnológico ha sido un reto duro , pero maravilloso. <br>
    Mis prioridades son mis hijos y mis sueños son tener la opotunidad de aportar y servir en mi nueva realidad en España con mis talentos y habilidades a construir un mundo mejor.</p></mark>
    <a href="pdf/cv.pdf" download>
      <img src="img/nube.svg" alt="Botón de descarga" width="50"/> <a href="pdf/cv.pdf">Descarga mi CV</a>
    </a>
  

	<h1>"Quién no vive para servir, no sirve para vivir"</h1><br>

</main>
	<?php 
	include("_partials/footer.php")
	 ?>