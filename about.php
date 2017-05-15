<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>La problématica responde a la inquietud que surge siendo estudiante de la carrera de Diseño Gráfico, en donde el área de la animación queda un tanto fuera de la carrera propiamente tal.</p>
<p>La idea es responder de forma general, si el diseño gráfico tiene influencia en la animación, ya sea en el diseño de personajes, en motion graphics o en la producción misma de los proyectos, con el fin de generar a modo personal
una propuesta en dónde puedo abordar la carrera desde un área comercialmente rentable y atractiva.</p>
</p>

</section>
<?php include('pie.php');?>
