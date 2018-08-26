<?php
	require_once "conexion.php";
	$email = $_POST['form_emailIng'];
	$pwd = md5($_POST['form_pwdIng']);

	$datosIngreso = array("email"=>$email,
		                   "pwd"=>$pwd
		               	   );

	require_once "ingresoModel.php";
	if ($result[0] == '') {
		echo "error";
	}
	else {
		echo "ingreso";
	}
?>