<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h3 class="text-center">Nuevo Almuerzo</h3>
<div class="container">

<form action="" method="get">
<?php foreach($dato as $key => $value):
	  foreach($value as $v):?>
    <input class="form-control" type="text" value="<?php echo $v['nombre'];  ?>" placeholder="Ingrese Nombre" name="nombre"
     style ="margin:10px; width:100%; height:auto"> <br>
     <input type="hidden" value="<?php echo $v['cedula'] ?>" name="id"> <br>
     <input class="form-control" type="text" value="<?php echo $v['apellido'];  ?>" placeholder="Ingrese apellido" name="apellido"
     style ="margin:10px; width:100%; height:auto"> <br>
     <select style ="margin:10px; width:100%; height:auto" class="form-select" name="sexo" aria-label="Default select example">      
        <option selected="<?php echo $v['genero']=="M"?'true':'false'; ?>" value="M">Masculino</option>
        <option selected="<?php echo $v['genero']=="F"?'true':'false'; ?>" value="F">Femenino</option>
        <option  selected="<?php echo $v['genero']=="ME"?'true':'false'; ?>" value="ME">Medio</option>
        </select><br>
     <input value="<?php echo $v['fecha_fallecimiento']; ?>" class="form-control" type="date" placeholder="Ingrese apellido" name="nacimiento"
     style ="margin:10px; width:100%; height:auto"> <br>

     <input value="<?php echo $v['edad']; ?>" class="form-control" type="number" placeholder="Ingrese su edad" name="edad"
     style ="margin:10px; width:100%; height:auto"> <br>
     <input value="<?php echo $v['username']; ?>"  class="form-control" type="text" placeholder="Ingrese su username" name="username"
     style ="margin:10px; width:100%; height:auto"> <br>

     <input value="<?php echo $v['password']; ?>"  class="form-control" type="password" placeholder="Ingrese su password" name="password"
     style ="margin:10px; width:100%; height:auto"> <br>
     <select style ="margin:10px; width:100%; height:auto" class="form-select" name="rol" aria-label="Default select example">      
        <option selected="<?php echo $v['rol']=="0"?'true':'false'; ?>" value="0">Administrador</option>
        <option  selected="<?php echo $v['rol']=="1"?'true':'false'; ?>" value="1">Usuario</option>        
        </select><br>

        <select style ="margin:10px; width:100%; height:auto" class="form-select" name="centrovida" aria-label="Default select example">      
        <?php if(isset($datoCentro)): 
         foreach ($datoCentro as $key2 => $value2): 
            foreach ($value2 as $v1 ):           
            ?>
        <option  selected="<?php echo $v['centro_vida']==$v1['id']?'true':'false'; ?>"  value="<?php echo $v1['id'] ?>"><?php echo $v1['nombre']  ?></option>
        <?php 
           endforeach;
        endforeach;
          endif; ?>     
        </select><br>
    <input type="submit" class="btn btn-info" name="btn" value="ACTUALIZAR" style="margin:10px">
    <input class="btn btn-info" type="hidden" name="m" value="updateusuario">
    <a type="button" href="index.php?m=indexusuario" class="btn btn-success">Volver</a>
    <?php 
           endforeach;
        endforeach;
        ?> 
</form>


</div>
<?php require_once(getcwd().'/vista/layouts/footer.php') ?>