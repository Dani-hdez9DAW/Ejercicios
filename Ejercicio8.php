<?php
$fechadesde = '1971-01-01';
$fechaactual = date('Y-m-d H:i:s'); // Fecha actual con horas, minutos y segundos

// Convertir las fechas en objetos DateTime
$fechaInicio = new DateTime($fechadesde);
$fechaFin = new DateTime($fechaactual);

// Calcular la diferencia entre las fechas
$interval = $fechaInicio->diff($fechaFin);

// Mostrar la diferencia en años, meses, días, horas, minutos y segundos
echo "Diferencia en años: " . $interval->y . " años<br>";
echo "Diferencia en meses: " . $interval->m . " meses<br>";
echo "Diferencia en días: " . $interval->d . " días<br>";
echo "Diferencia en horas: " . $interval->h . " horas<br>";
echo "Diferencia en minutos: " . $interval->i . " minutos<br>";
echo "Diferencia en segundos: " . $interval->s . " segundos<br>";
?>
