<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="page-header">Huespedes</h1>
<div class="well well-sm text-right">
<a class="btn btn-primary" href="?m=nuevo">Agregar Huesped</a>
</div>

<table class="table table-striped">
    <thead>
    <tr>
  
    <th scope="col">Nombres</th>
    <th scope="col">Apellido</th>
    <th scope="col">Numero Identificación</th>
    <th scope="col">Genero</th>
    <th scope="col">Telefono Contacto</th>
    <th scope="col">Direcciòn</th>
    <th scope="col" >Email</th>
    
    <th scope="col">Acción</th>
    <th ></th>
    </tr>
    </thead>
    <tbody>
        
    <?php foreach ($dato as $key => $value)
    foreach ($value as $va ): ?>
    <tr>
    
    <td><?php echo $va["nombre"];?></td>
    <td><?php echo $va["apellidos"]; ?></td>
    <td> <?php echo $va["numero_identificacion"]; ?></td>
    <td><?php echo $va["genero"]; ?></td>
    <td><?php echo $va["telefono_contacto"]; ?></td>
    <td><?php echo $va["direccion_residencia"]; ?></td>
    <td><?php echo $va["email"]; ?></td>
    
    <td>
    <i class="glyphicon glyphicon-edit"><a href="?m=editar&id=<?php echo $va["id"]; ?>"> Editar</a></i>
    </td>
    <td>
    <i class="glyphicon glyphicon-remove"><a href="?m=eliminar&id=<?php
    echo $va["id"]; ?>"> Eliminar</a></i>
    </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<!-- <div class="well well-sm text-right">
    <a class="btn btn-primary" href="?m=nuevo">Agregar Persona</a>
</div> -->

</body>
</html>