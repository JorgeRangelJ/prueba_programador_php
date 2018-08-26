<?php
	$sql = "INSERT INTO procesos (numero_proceso, descripcion, sede_id, presupuesto) VALUES (:numeroPro, :descPro, :sedePro, :presPro)";
	$query = $pdo->prepare($sql);
	$result = $query->execute($datosProceso);
?>