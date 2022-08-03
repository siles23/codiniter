<?=$encabezado?>
<div class="container col-md-8 mt-5 mx-auto">
    <a href="<?=base_url('/estudiantes/new/')?>" class="btn btn-primary float-right btn-lg">  +  </a>
    <table class = "table table-hover">
        <thead>
            <tr>
                <th>Identificacion</th>
                <th>Nombre</th>
                <th>Nivel</th>
                <th>Seccion</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($estudiantes as $e):?>
                <tr>
                    <th><?=$e['identificacion']?></th>
                    <td><?=$e['nombre']?></td>
                    <td><?=$e['nivel']?></td>
                    <td><?=$e['seccion']?></td>
                    <td><?=$e['telefonoContacto']?></td>
                    <td>
                        <a href="<?=base_url('estudiantes/editar/'.$e['id'])?>"
                         class="btn btn-info">Editar</a>
                         <a href="<?=base_url('estudiantes/borrar/'.$e['id'])?>"
                         class="btn btn-danger">Borrar</a>
                    </td>

                </tr>
                <?php endforeach ?>
        </tbody>
    </table>
</div>
<?=$pie?>