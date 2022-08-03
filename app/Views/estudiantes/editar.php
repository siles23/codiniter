<?=$encabezado?>
<div class="container col-md-8 mt-5 mx-auto">
    <form action="<?=site_url('/estudiantes/actualizar')?>" method="post"
    enctype="multipart/form-data">
    <input type="hidden" name="id" value=<?=$estudiante['id']?>>
        <div class="form-group col-md-4">
            <label for="identificacion">Identificacion nacional</label>
            <input type="text" class="form-control" name="identificacion"
            value="<?=$estudiante['identificacion']?>">
        </div>
        <div class="form-group col-md-8">
            <label for="nombre">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre"
            value="<?=$estudiante['nombre']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nivel">Nivel</label>
            <input type="number" class="form-control" name="nivel"
            value="<?=$estudiante['nivel']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="seccion">Seccion</label>
            <input type="number" class="form-control" name="seccion"
            value="<?=$estudiante['seccion']?>">
        </div>
        <div class="form-group col-md-3">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefonoContacto"
            value="<?=$estudiante['telefonoContacto']?>">
        </div>

        <button class="btn btn-primary">Almacenar</button>
    </form>
</div>