<?php require_once("layouts/header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <form action="" method="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username:</label>
    <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password"  name="password"  class="form-control" id="exampleInputPassword1">
  </div> 
  <button type="submit" class="btn btn-primary">Ingresar</button>
  <input type="hidden" name="m" value="login">
  <?php if (isset($error)): ?>
  <div class="alert alert-danger" role="alert" ><?php echo $error ?></div>
  <?php endif ?>
</form>
<?php require_once(getcwd().'/vista/layouts/footer.php') ?>
    </div>
    
</body>
</html>