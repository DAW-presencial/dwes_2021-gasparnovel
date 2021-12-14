<?php

include('./header.php');
include('./crud/borrar.php');
?>

<div class="container-fluid bg-3 text-center">
    <h3>AGENDA DE CONTACTOS</h3>
    <a href="./formulario_insertar.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-plus-sign"></span> Agregar Contacto</a>
    <br>

    <div class="panel panel-primary">
        <div class="panel-heading">CONTACTOS</div>

        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="active">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = pg_fetch_object($users)) : ?>
                        <tr align="left">
                            <td><?= $user->id  ?></td>
                            <td><?= $user->name  ?></td>
                            <td><?= $user->surname  ?></td>
                            <td><?= $user->phone  ?></td>
                            <td>
                                <form method="post">
                                    <input type="submit" class="btn btn-success" name="update" value="Update">
                                    <input type="submit" onClick="return confirm('Esta seguro de eliminar este contacto?');" class="btn btn-danger" name="delete" value="Delete">
                                    <input type="hidden" value="<?= $user->id ?>" name="id">
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
