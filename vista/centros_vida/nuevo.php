<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h3 class="text-center">Nuevo Centro vida</h3>
<div class="container">

<form action="" method="get">
    <input class="form-control" type="text" placeholder="Ingrese Nombre centrovida:" name="nombre"
     style ="margin:10px; width:100%; height:auto"> <br>
    <input type="submit" class="btn btn-info" name="btn" value="GUARDAR" style="margin:10px">
    <input class="btn btn-info" type="hidden" name="m" value="guardarcentrovida">
    <a type="button" href="index.php?m=indexcentrovida" class="btn btn-success">Volver</a>
</form>


</div>
<?php require_once(getcwd().'/vista/layouts/footer.php') ?>
