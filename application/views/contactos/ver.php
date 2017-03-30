<div class="container">
    <div class="row">

        <?php foreach($contactos as $contacto): ?>
        <div class="panel panel-default col-md-6">
            <div class="panel-body">

                <div class="page-header">
                    <h1>
                        <?php echo $contacto->nombre; ?>
                        <small>
                            <?php if($contacto->genero == 'femenino'){ ?>
                            Amiga
                            <?php }else{ ?>
                            Amigo
                            <?php } ?>
                        </small>
                    </h1>
                </div> <!-- /.page-header -->

                <table class="table table-striped">
                    <tr>
                        <th>Teléfono Personal</th>
                        <td><?php echo $contacto->telefono_1; ?></td>
                    </tr>

                    <tr>
                        <th>Teléfono Trabajo</th>
                        <td><?php echo $contacto->telefono_2; ?></td>
                    </tr>

                    <tr>
                        <th>Correo Electrónico</th>
                        <td><?php echo $contacto->correo_electronico; ?></td>
                    </tr>

                    <tr>
                        <th>Dirección</th>
                        <td><?php echo $contacto->direccion; ?></td>
                    </tr>
                </table>

            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
        <?php endforeach; ?>

    </div> <!-- /.row -->
</div> <!-- /.container -->
