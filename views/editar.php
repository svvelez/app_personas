<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Persona</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>
<body>
<h1>Editar Persona</h1>
<hr>
<form action="">
<?php foreach ($dato as $key => $value)
foreach ($value as $v ): ?>
<div class="form-group">
<label>Documento Identidad</label>
<input type="text" name="documento_identidad" value="<?php echo
$v['documento_identidad'] ?>" class="form-control" placeholder="Ingrese su
numero de Indentificación" data-validacion-tipo="requerido|min:3" />
</div>
<div class="form-group">
<label>nombre</label>
<input type="text" name="nombre" value="<?php echo $v['nombre'] ?>"
class="form-control" placeholder="Ingrese su Nombre" data-validacion-
tipo="requerido|min:7" />
</div>
<div class="form-group">
<label>Apellido</label>
<input type="text" name="apellido" value="<?php echo $v['apellido'] ?>"
class="form-control" placeholder="Ingrese sus Apellidos" data-validacion-
tipo="requerido|date" />
</div>
<div class="form-group">
<label>Email</label>
<input type="text" name="email" value="<?php echo $v['email'] ?>"
class="form-control" placeholder="Ingrese su Email" data-validacion-
tipo="requerido|min:8" />
</div>
<div class="form-group">
Telefono<label>T</label>
<input type="text" name="telefono" value="<?php echo $v['telefono'] ?>"
class="form-control" placeholder="Ingrese su Telefono" data-validacion-
tipo="requerido|min:8" />
</div>
<input type="hidden" name="id" value="<?php echo $v['id'] ?>">
<input type="hidden" name="m" value="update">
<hr />
<div class="text-right">
<button class="btn btn-success">Guardar</button>
</div>
<?php endforeach ?>
</form>
<hr />
</body>
</html>