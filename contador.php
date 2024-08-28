<?php
$counter_file = 'counter.txt';

// Leer el número actual de visitas
$visits = file_get_contents($counter_file);

// Incrementar el contador
$visits++;

// Guardar el nuevo número de visitas
file_put_contents($counter_file, $visits);

// Mostrar el contador
echo "Esta página ha sido visitada " . $visits . " veces.";
?>
