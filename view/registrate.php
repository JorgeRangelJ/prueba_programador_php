<!DOCTYPE html>
<html lang="en">

<?php require_once "header.php"; ?>

<body class="background-body">
    <div class="container container-form">
        <div class="row row-form">
            <div align="center">   
                <img src="img/login-icon.png" alt="" width="100px" class="img-responsive img-form-login">
            </div>
            <div class="form-group">
               <label for="user"><i class="fa fa-user" aria-hidden="true"></i> Nombre de usuario *</label>
               <input type="text" class="form-control" id="user" placeholder="Nombre de usuario" name="user" autocomplete="off" onkeyup="clearUser();">
            </div>
            <div class="form-group">
               <label for="name"><i class="fa fa-id-badge" aria-hidden="true"></i> Nombre y Apellido *</label>
               <input type="text" class="form-control" id="name" placeholder="Nombre y Apellido" name="name" autocomplete="off" onkeyup="clearName();">
            </div>
            <div class="form-group">
               <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Correo electrónico *</label>
               <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email" autocomplete="off" onkeyup="clearEmail();">
            </div>
            <div class="form-group">
               <label for="pwd"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Contraseña *</label>
               <input type="password" class="form-control" id="pwd" placeholder=" Contraseña" name="pwd" autocomplete="off" onkeyup="clearPwd();">
            </div>
            <div class="form-group">
               <label for="pwd-confirm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Confirmar contraseña *</label>
               <input type="password" class="form-control" id="pwd-confirm" placeholder="Confirmar contraseña" name="pwd-confirm" autocomplete="off" onkeyup="clearPwdConfirm();">
            </div>
            <div class="alert alert-danger" id="alert-desable"></div>   
            <div class="alert alert-success alert-dismissible" id="alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Registro Exitoso!</strong>
            </div>  
            <div class="form-group">
                <span>¿Ya tienes cuenta? <a href="index.php">Inicia Sesión</a></span>                 
            </div>
            <div align="center">
                <button onclick="validateRegister();" class="btn btn-primary">Registrarse</button>
            </div>                        
        </div>
    </div>

</body>
</html>