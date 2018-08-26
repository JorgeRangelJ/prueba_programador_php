<!DOCTYPE html>
<html lang="en">

<?php 
  require_once "header.php"; 
  require_once "../backend/conexion.php"; 
  $queryResult = $pdo->query("SELECT * FROM procesos");
?>

<body class="background-body">
    <div class="container">
        <div class="row row-form-list-process">
          <h1 style="text-align: center;">Lista Procesos</h1>
          <a href="index.php">Salir</a><br>
          <a href="add.php">Agregar Proceso</a><br>
          <table class="table">
            <tr>
              <th>Número Proceso</th>
              <th>Descripción</th>
              <th>Fecha de creación</th>
              <th>Sede</th>
              <th>Presupuesto</th>
              <th>Editar</th>
            </tr>
            <?php while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
            <tr>
              <td><?= $row["numero_proceso"]; ?></td>
              <td><?= $row["descripcion"]; ?></td>
              <td><?= $row["fecha_creacion"]; ?></td>
              <td><?php
                $sedeId = $row["sede_id"];
                $sql = "SELECT * FROM sedes WHERE sede_id = $sedeId";
                $querySedes = $pdo->query($sql);
                $rowSedes = $querySedes->fetch(PDO::FETCH_ASSOC);
                ?>
                <?= $rowSedes['nombre']; ?>
               </td>
              <td>COP $<?= number_format($row["presupuesto"]); ?></td>
              <td><a href="update.php?id=<?= $row["proceso_id"]; ?>">Editar</a></td>
            </tr>
            <?php } ?>
          </table>                       
        </div>
    </div>

</body>
</html>