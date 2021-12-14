<div class="panel-heading">CONTACTOS ACTUALES</div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="active">
                        <th>Id</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($user = pg_fetch_object($users)) : ?>
                        <tr align="left">
                            <td><?= $user->id  ?></td>
                            <td><?= $user->name  ?></td>
                            <td><?= $user->surname  ?></td>
                            <td><?= $user->phone  ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>