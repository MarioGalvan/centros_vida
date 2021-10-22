<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h3 class="text-center">Nuevo Almuerzo</h3>
<div class="container">

<form action="" method="get">
    <input class="form-control" type="text" placeholder="Ingrese Nombre almuerzo:" name="nombre"
     style ="margin:10px; width:100%; height:auto"> <br>
    <input type="submit" class="btn btn-info" name="btn" value="GUARDAR" style="margin:10px">
    <input class="btn btn-info" type="hidden" name="m" value="guardar">
</form>
</div>
<?php require_once(getcwd().'/vista/layouts/footer.php') ?>
