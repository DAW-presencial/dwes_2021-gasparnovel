<?php

include('./header.php');
include('./crud/acualizar.php');

?>
<div class="container-fluid bg-3 text-center">
    <h3>AGENDA DE CONTACTOS</h3>
    <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'><span class="glyphicon glyphicon-step-backward"></span>Volver</a>
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">ACTUALIZAR CONTACTO</div>
        <form class="form-horizontal" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?= $user->id ?>">
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Name:<span style='color:red'>*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Surname:<span style='color:red'>*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="surname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Phone:<span style='color:red'>*</span></label>
                    <div class="col-sm-5">
                    <input class="form-control" type="tel" pattern="[0-9]{9}" name="phone" required></div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"> </label>
                    <div class="col-sm-5">
                        <input type="submit" class="btn btn-success" name="update" value="Update">
                    </div>
                </div>
            </div>
        </form>
        <?php include('./mostrarContactos.php'); ?>
    </div>
</div>