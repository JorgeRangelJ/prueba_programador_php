<?php
	$sql = "UPDATE procesos SET numero_proceso=:numeroProUpdate, descripcion=:descProUpdate, sede_id=:sedeProUpdate, presupuesto=:presProUpdate WHERE proceso_id=:idProUpdate";
	$query = $pdo->prepare($sql);
	$result = $query->execute($datosProcesoUpdate);
?>
