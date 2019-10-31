 <html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Laravel</title>
        <link href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>" rel="stylesheet"> <!--PROBLEMA-->
        <link href="<?php echo e(url('assets/css/jumbotron.css')); ?>" rel="stylesheet"><!--PROBLEMA-->
        <link href="<?php echo e(url('assets/css/own.css')); ?>" rel="stylesheet"><!--PROBLEMA-->
        <link href="<?php echo e(url('assets/css/micss.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="table-responsive-lg">

    <table border="1"class="table table-dark">

    <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col">NOMBRE </th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">CORREO</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">CLAVE ACCESO</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col">ESTADO CIVIL</th>
      <th scope="col">SUELDO ANUAL</th>
      <th scope="col">IP</th>
   
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($cliente->id); ?></td>
            <td><?php echo e($cliente->nombre); ?></td>
            <td><?php echo e($cliente->apellidos); ?></td>
            <td><?php echo e($cliente->correo); ?></td>
            <td><?php echo e($cliente->telefono); ?></td>
            <td><?php echo e($cliente->direccion); ?></td>
            <td><?php echo e($cliente->claveacceso); ?></td>
            <td><?php echo e($cliente->fechanacimiento); ?></td>
            <td><?php echo e($cliente->estadocivil); ?></td>
            <td><?php echo e($cliente->sueldoanual); ?></td>
            <td><?php echo e($cliente->ip); ?></td>
            <td><a href="<?php echo e(url('cliente/'.$cliente->id)); ?>" class="btn btn-info">Ver</a></td>
            <td><a href="<?php echo e(url('cliente/'.$cliente->id.'/edit')); ?>" class="btn btn-success">Editar</a></td>
            <td>
                <form action="<?php echo e(url('cliente/'.$cliente->id)); ?>" method="post" class="destroy">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
            </td>
        </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>  
    </div>
   
    </table>
    <div class="d-flex justify-content-around">
        <a href="<?php echo e(url('cliente/create')); ?>" class="btn btn-info">AGREGAR CLIENTE</a>
        
    </div>
    
</body>
</html>

<?php /**PATH /home/ubuntu/environment/web/clienteApp/resources/views/cliente.blade.php ENDPATH**/ ?>