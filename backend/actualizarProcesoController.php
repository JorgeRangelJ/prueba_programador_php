<?php
	require_once "conexion.php";
	$idProUpdate = $_POST['form_idProUpdate'];
	$numeroProUpdate = $_POST['form_numeroProUpdate'];
	$descProUpdate = $_POST['form_descProUpdate'];
	$sedeProUpdate = $_POST['form_sedeProUpdate'];
	$presProUpdate = $_POST['form_presProUpdate'];

	$datosProcesoUpdate = array('idProUpdate' => $idProUpdate,
						  'numeroProUpdate' => $numeroProUpdate,
						  'descProUpdate' => $descProUpdate,
						  'sedeProUpdate' => $sedeProUpdate,
						  'presProUpdate' => $presProUpdate
						  );

	require_once "actualizarProcesoModel.php";

	if ($result)
	{
		echo "actualizo_proceso";
	}

?>