<?php
	$sql = "SELECT email, contrasena FROM usuarios WHERE email = :email AND contrasena = :pwd";
	$query = $pdo->prepare($sql);
	$result = $query->execute($datosIngreso);
	$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>