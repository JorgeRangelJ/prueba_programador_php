<?php
	$sql = "INSERT INTO usuarios (usuario, nombre, email, contrasena, confirma_contrasena) VALUES (:user, :name, :email, :pwd, :pwd_confirm)";
	$query = $pdo->prepare($sql);
	$result = $query->execute($datosRegistro);
?>