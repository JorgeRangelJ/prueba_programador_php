<!DOCTYPE html>
<html lang="en">

<?php 
  require_once "header.php"; 
  require_once "../backend/conexion.php"; 
  $queryResult = $pdo->query("SELECT * FROM sedes");
?>

<body class="background-body">
    <div class="container container-form">
        <div class="row row-form-add-process">
            <h2 align="center">Registra proceso</h2>
            <div class="form-group">
               <label for="numero-proceso"><i class="fa fa-user" aria-hidden="true"></i> Número proceso *</label>
               <input type="number" class="form-control" id="numero-proceso" placeholder="Numero proceso" name="numero-proceso" autocomplete="off" onkeyup="clearNumeroProceso();">
            </div>
            <div class="form-group">
               <label for="descripcion-proceso"><i class="fa fa-id-badge" aria-hidden="true"></i> Descripción *</label>
               <textarea class="form-control" rows="6" id="descripcion-proceso" onkeyup="clearDescripcionProceso();"></textarea>
            </div>
            <div class="form-group">
               <label for="sede"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sede *</label>
                <select class="form-control" id="sede">
                  <option value="">Selecciona</option>}
                  <?php while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?= $row['sede_id']; ?>"><?= $row['nombre']; ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group">
               <label for="presupuesto"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Presupuesto *</label>
               <input type="number" class="form-control" id="presupuesto" placeholder="Presupuesto" name="presupuesto" autocomplete="off">
            </div>
            <div class="alert alert-danger" id="alert-desable-proceso"></div>   
            <div align="center">
                <button onclick="validateProceso();" class="btn btn-primary">Registrar Proceso</button>
            </div>                        
        </div>
    </div>

</body>
</html>