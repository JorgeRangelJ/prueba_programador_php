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
               <label for="email-ingreso"><i class="fa fa-envelope" aria-hidden="true"></i> Correo electrónico *</label>
               <input type="email" class="form-control" id="email-ingreso" placeholder="Correo electrónico" name="email-ingreso" autocomplete="off" onkeyup="clearEmailIngreso();">
            </div>
            <div class="form-group">
               <label for="pwd-ingreso"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Contraseña *</label>
               <input type="password" class="form-control" id="pwd-ingreso" placeholder="Contraseña" name="pwd-ingreso" autocomplete="off" onkeyup="clearPwdIngreso();">
            </div>
            <div class="alert alert-danger alert-desable" id="alert-desable-ingreso">
              <strong>Error!</strong> Datos incorrectos.
            </div>                
            <div class="form-group">
                <span>¿Aún no tienes cuenta? <a href="registrate.php">Regístrate aquí</a></span>                
            </div>
            <div align="center">
                <button onclick="validateIngreso();" class="btn btn-primary">Ingresar</button>
            </div>                        
        </div>
    </div>
</body>
</html>