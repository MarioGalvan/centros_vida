
<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h3 class="text-center">Nuevo Centro de vida</h3>

<div class="mx-auto" style="width: 200px; margin:20px; display:flex;">
<div class="container">
<a   type="button" href="index.php?m=nuevocentrovida" class="btn btn-success">Nuevo</a>
</div>

<div class="container">
<a  type="button" href="index.php?m=dashboard" class="btn btn-danger">Volver</a>
</div>

</div>


<table border="1" class="table table-striped">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
	
	</tr>
    <tbody>
      <?php 
      if(!empty($dato)):
	    foreach ($dato as $key => $value)
	        foreach ($value as $v ): ?>
            <tr>
                <td> <?php echo $v['id'] ?> </td>
                <td> <?php echo $v['nombre'] ?> </td>
                <td>
                    <a class="btn btn-info" href="index.php?m=editarcentrovida&id=<?php echo $v['id'] ?>">Editar</a> 
                    <a class="btn btn-danger" href="index.php?m=eliminarcentrovida&id=<?php echo $v['id'] ?>" onclick="return  confirm('Está seguro de elimiar el registro? '); false">Eliminar</a>

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