<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h1 class="text-center">Editar Almuerzo</h1>
<form action="" method="get">
	<?php
	foreach($dato as $key => $value):
	  foreach($value as $v):
	  ?>
		<input class="form-control" type="text" value="<?php echo $v['nombre'] ?>" name="nombre"> <br>
		<input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
		<input type="submit" class="btn btn-info" name="btn" value="Actualizar"><br>
		<input type="hidden" name="m" value="actualizarcentrovida">
	<?php endforeach;
	endforeach; ?>
</form>
<?php require_once(getcwd().'/vista/layouts/footer.php') ?>
