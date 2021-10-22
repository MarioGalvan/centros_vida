
<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h3 class="text-center">Listado de usuarios</h3>

<div class="mx-auto" style="width: 200px; margin:20px; display:flex;">
<div class="container">
<a   type="button" href="index.php?m=nuevousuario" class="btn btn-success">Nuevo</a>
</div>

<div class="container">
<a  type="button" href="index.php?m=dashboard" class="btn btn-danger">Volver</a>
</div>

</div>


<table border="1" class="table table-striped">
	<tr>
		<td>Cédula</td>
		<td>Nombre</td>
        <td>Rol</td>
        <td>Status</td>
        <td>Opciones</td>
	
	</tr>
    <tbody>
      <?php 
      if(!empty($dato)):
	    foreach ($dato as $key => $value)
	        foreach ($value as $v ): ?>
            <tr>
                <td> <?php echo $v['cedula'] ?> </td>
                <td> <?php echo $v['nombre'] ?> </td>
                <td> <?php echo $v['rol']=='1'? 'Administrador':'Usuario'?> </td>
                <td> <?php if( $v['status']=='1'): ?> <span class="badge bg-success">Activo</span> <?php else: ?> <span class="badge bg-danger">Inactivo</span>   <?php endif; ?>  </td>
                <td>
                    <a class="btn btn-info" href="index.php?m=editarusuario&id=<?php echo $v['cedula'] ?>">Editar</a> 
                    <a class="btn btn-danger" href="index.php?m=eliminarusuario&id=<?php echo $v['cedula'] ?>" onclick="return  confirm('Está seguro de elimiar el registro? '); false">Eliminar</a>

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