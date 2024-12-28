<?php
if (isset($_GET['id'])) {
	$url = "";
	switch ($_GET['id']) {
		case 1:
			$url = "Diseño de Interfaz de Bajo Costo para el Desarrollo de Aprendizaje  de Robótica en Niños de Educación Primaria.pdf";
			break;
		case 2:
			$url = "Diseño de Sistema Domótico con Visión Artificial para el Reconocimiento de Lengua de Señas Mexicanas.pdf";
			break;
		case 3:
			$url = "Simulación de los Movimientos de un Robot Flexible Utilizando Actuadores Piezoeléctricos.pdf";
			break;
		default:
			header("Location: ../../");
			exit;
			break;
	}
	header("Location: " . $url . ")");
	exit;
} else {
	header("Location: ../../");
	exit;
}
