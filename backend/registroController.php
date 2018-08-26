<?php
	require_once "conexion.php";

	$user = $_POST['form_userReg'];
	$name = $_POST['form_nameReg'];
	$email = $_POST['form_emailReg'];
	$pwd = md5($_POST['form_pwdReg']);
	$pwd_confirm = md5($_POST['form_pwd_confirmReg']);

	$datosRegistro = array("user"=>$user,
		                   "name"=>$name,
		                   "email"=>$email,
		                   "pwd"=>$pwd,
		                   "pwd_confirm"=>$pwd_confirm
		               	   );

	require_once "resgistroModel.php";

	if ($result) {
		echo "ok";
	}
	else{
		echo "error";
	}
?>