<?php 
    include('../layout/header.php');
    include('../sql/empleados.php');
    $empleados = getDatos($con, 'empleados', null, null);
?>
<div class="row align-middle d-flex align-items-center">
    <div class="offset-md-2 col-9 mt-3">
        <h1>Empleados</h1> 
    </div>
    <div class="col-1 mt-3">
        <a type="button" class="btn btn-info" href="crear.php">Crear</a>
    </div>
    <hr>
</div>
<div class="row">
    <div class="offset-md-2 col-10 mt-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th>C.I</th>
                    <th>Nombre(s)</th>
                    <th>Apellido(s)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empleados as $key => $data): ?>
                    <tr>
                        <td><?php echo $data["id"]; ?></td>
                        <td><?php echo $data["cedula"]; ?></td>
                        <td><?php echo $data["nombres"]; ?></td>
                        <td><?php echo $data["apellidos"]; ?></td>
                    </tr>
                    
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('../layout/footer.php'); ?>