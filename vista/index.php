
<?php require_once("layouts/header.php") ?>

<div class="mx-auto" style="width: 200px; margin:20px">
<a type="button" href="index.php?m=nuevo" class="btn btn-success">Nuevo Registro</a>
</div>

<table border="1" class="table table-striped">
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Acción</td>
	</tr>
    <tbody>
      <?php 
      if(!empty($dato)):
	    foreach ($dato as $key => $value)
	        foreach ($value as $v ): ?>
            <tr>
                <td> <?php echo $v['id'] ?> </td>
                <td> <?php echo $v['nombre'] ?> </td>
                <td> <?php echo $v['precio'] ?> </td>
                <td>
                    <a class="btn btn-info" href="index.php?m=editar&id=<?php echo $v['id'] ?>">Editar</a> 
                    <a class="btn btn-danger" href="index.php?m=eliminar&id=<?php echo $v['id'] ?>" onclick="return  confirm('Está seguro de elimiar el registro? '); false">Eliminar</a>

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
<?php require_once("layouts/footer.php") ?>