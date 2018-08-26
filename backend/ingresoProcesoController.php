<?php
	require_once "conexion.php";
	$numeroPro = $_POST['form_numeroPro'];
	$descPro = $_POST['form_descPro'];
	$sedePro = $_POST['form_sedePro'];
	$presPro = $_POST['form_presPro'];

	$datosProceso = array('numeroPro' => $numeroPro,
						  'descPro' => $descPro,
						  'sedePro' => $sedePro,
						  'presPro' => $presPro
						  );

	require_once "ingresoProcesoModel.php";
	if ($result)
	{
		echo "registro_proceso";
	}
?>