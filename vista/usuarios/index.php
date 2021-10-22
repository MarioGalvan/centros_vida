
<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h3 class="text-center">Listado de usuarios</h3>

<div class="mx-auto" style="width: 200px; margin:20px">
<a type="button" href="index.php?m=nuevoalmuerzo" class="btn btn-success">Nuevo Registro</a>
</div>


<table border="1" class="table table-striped">
	<tr>
		<td>Cédula</td>
		<td>Nombre</td>
	
	</tr>
    <tbody>
      <?php 
      if(!empty($dato)):
	    foreach ($dato as $key => $value)
	        foreach ($value as $v ): ?>
            <tr>
                <td> <?php echo $v['cedula'] ?> </td>
                <td> <?php echo $v['nombre'] ?> </td>
                <td>
                    <a class="btn btn-info" href="index.php?m=editaralmuerzo&id=<?php echo $v['cedula'] ?>">Editar</a> 
                    <a class="btn btn-danger" href="index.php?m=eliminaralmuerzos&id=<?php echo $v['cedula'] ?>" onclick="return  confirm('Está seguro de elimiar el registro? '); false">Eliminar</a>

	            </td>
            </tr>
	       <?php endforeach; ?>
           <?php else: ?>
            <tr>
                <td colspan="3">No hay registros </td>
           </tr> 
            <?php endif ?>
    </tbody>
</table>
<?php require_once(getcwd().'/vista/layouts/footer.php') ?>