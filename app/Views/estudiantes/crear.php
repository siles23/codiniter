<?=$encabezado?>
<div class="container col-md-8 mt-5 mx-auto">
    <form action="<?=site_url('/estudiantes/guardar')?>" method="post"
    enctype="multipart/form-data">
    
        <div class="form-group col-md-4">
            <label for="identificacion">Identificacion nacional</label>
            <input type="text" class="form-control" name="identificacion">
        </div>
        <div class="form-group col-md-8">
            <label for="nombre">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="form-group col-md-3">
            <label for="nivel">Nivel</label>
            <input type="number" class="form-control" name="nivel">
        </div>
        <div class="form-group col-md-3">
            <label for="seccion">Seccion</label>
            <input type="number" class="form-control" name="seccion">
        </div>
        <div class="form-group col-md-3">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefonoContacto">
        </div>

        <button class="btn btn-primary">Almacenar</button>
    </form>
</div>