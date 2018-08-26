<!DOCTYPE html>
<html lang="en">

<?php 
  require_once "header.php"; 
  require_once "../backend/conexion.php"; 
	$id = $_GET['id'];
	$sql = "SELECT * FROM procesos WHERE proceso_id = :id";
	$query = $pdo->prepare($sql);
	$query->execute(['id' => $id]);	
	$row = $query->fetch(PDO::FETCH_ASSOC);
	$queryResult = $pdo->query("SELECT * FROM sedes");
?>

<body class="background-body">
    <div class="container container-form">
        <div class="row row-form-add-process">
            <h2 align="center">Registra proceso</h2>
            <input type="hidden" id="id-proceso-up" name="id-proceso-up" value="<?= $row['proceso_id']; ?>">
            <div class="form-group">
               <label for="numero-proceso-up"><i class="fa fa-user" aria-hidden="true"></i> Número proceso *</label>
               <input type="number" class="form-control" id="numero-proceso-up" placeholder="Numero proceso" name="numero-proceso-up" autocomplete="off" onkeyup="clearNumeroProcesoUpdate();" value="<?= $row['numero_proceso']; ?>">
            </div>
            <div class="form-group">
               <label for="descripcion-proceso-up"><i class="fa fa-id-badge" aria-hidden="true"></i> Descripción *</label>
               <textarea class="form-control" rows="6" id="descripcion-proceso-up" onkeyup="clearDescripcionProcesoUpdate();"><?= $row['descripcion']; ?></textarea>
            </div>
            <div class="form-group">
               <label for="sede"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sede *</label>
                <select class="form-control" id="sede-up">
                  <option value="">Selecciona</option>
                  <?php while ($rowSedes = $queryResult->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?= $row['sede_id']; ?>" <?php if ($row['sede_id'] == $rowSedes['sede_id']) { echo "selected"; } ?>><?= $rowSedes['nombre']; ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group">
               <label for="presupuesto-up"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Presupuesto *</label>
               <input type="number" class="form-control" id="presupuesto-up" placeholder="Presupuesto" name="presupuesto-up" autocomplete="off" value="<?= $row['presupuesto']; ?>">
            </div>
            <div class="alert alert-danger" id="alert-desable-proceso-up"></div>   
            <div align="center">
                <button onclick="validateProcesoUpdate();" class="btn btn-primary">Actualizar Proceso</button>
            </div>                        
        </div>
    </div>

</body>
</html>