<?php require_once(getcwd().'/vista/layouts/header.php') ?>
<h3 class="text-center">Nuevo Almuerzo</h3>
<div class="container">

<form action="" method="get">
<input class="form-control" type="number" placeholder="Ingrese cedula" name="cedula"
     style ="margin:10px; width:100%; height:auto"> <br>    
    <input class="form-control" type="text" placeholder="Ingrese Nombre" name="nombre"
     style ="margin:10px; width:100%; height:auto"> <br>
     <input class="form-control" type="text" placeholder="Ingrese apellido" name="apellido"
     style ="margin:10px; width:100%; height:auto"> <br>
     <select style ="margin:10px; width:100%; height:auto" class="form-select" name="sexo" aria-label="Default select example">      
        <option selected value="M">Masculino</option>
        <option value="F">Femenino</option>
        <option value="M">Medio</option>
        </select><br>
     <input class="form-control" type="date" placeholder="Ingrese apellido" name="nacimiento"
     style ="margin:10px; width:100%; height:auto"> <br>

     <input class="form-control" type="number" placeholder="Ingrese su edad" name="edad"
     style ="margin:10px; width:100%; height:auto"> <br>
     <input class="form-control" type="text" placeholder="Ingrese su username" name="username"
     style ="margin:10px; width:100%; height:auto"> <br>

     <input class="form-control" type="password" placeholder="Ingrese su password" name="password"
     style ="margin:10px; width:100%; height:auto"> <br>
     <select style ="margin:10px; width:100%; height:auto" class="form-select" name="rol" aria-label="Default select example">      
        <option selected value="0">Administrador</option>
        <option value="1">Usuario</option>        
        </select><br>

        <select style ="margin:10px; width:100%; height:auto" class="form-select" name="centrovida" aria-label="Default select example">      
        <?php if(isset($dato)): 
         foreach ($dato as $key => $value): 
            foreach ($value as $v ):           
            ?>
        <option  value="<?php echo $v['id']  ?>"><?php echo $v['nombre']  ?></option>
        <?php 
           endforeach;
        endforeach;
          endif; ?>     
        </select><br>
    <input type="submit" class="btn btn-info" name="btn" value="GUARDAR" style="margin:10px">
    <input class="btn btn-info" type="hidden" name="m" value="guardarusuario">
    <a type="button" href="index.php?m=indexusuario" class="btn btn-success">Volver</a>
</form>


</div>
<?php require_once(getcwd().'/vista/layouts/footer.php') ?>