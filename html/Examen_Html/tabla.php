<?php
$titulo = "Tabla";
  $description = "Contenido de la presentación de Tabla";
  include("_partials/header.php");
?>
<article>
        <h1>
            <?php echo $titulo; ?>
        </h1>
    </article>
  <!-- Contenido principal -->
<main>
	



	<h1>"Quién no vive para servir, no sirve para vivir"</h1><br>
<title>Tabla de Visitantes</title>
</head>
<body>
    <table border="3">
        <caption>Visitantes de rrrr.com por países</caption>
        <thead>
            <tr>
                <th rowspan="2" colspan="2">Mes</th>	 
                <th colspan="2">España</th>
                <th colspan="2">México</th>
                <th colspan="2">Estados Unidos</th>
            </tr>
            <tr>
                <th>Hablan Español</th>
                <th>No Hablan Español</th>
                <th>Hablan Español</th>
                <th>No Hablan Español</th>
                <th>Hablan Español</th>
                <th>No Hablan Español</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th colspan="2">Enero</th>	
                <td>10</td>
                <td>0</td>	
                <td>15</td>
                <td>5</td>
                <td>5</td>
                <td>25</td>
            </tr>
            <tr>
                <th colspan="2">Febrero</th>	
                <td>11</td>
                <td>0</td>	
                <td>20</td>
                <td>2</td>
                <td>3</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>

</table>
<br>
</main>
	<?php 
	include("_partials/footer.php")
	 ?>