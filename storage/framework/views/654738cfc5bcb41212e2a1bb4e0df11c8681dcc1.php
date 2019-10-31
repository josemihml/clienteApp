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
<form action="<?php echo e(url('cliente')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="table-responsive-lg">

       <table class="table table-striped table-hover">
          <tr> 
             <td>id</td>
              <td><?php echo e($cliente->id); ?></td>
          </tr>       
          <tr> 
             <td>nombre</td>
              <td><?php echo e($cliente->nombre); ?></td>
          </tr>   
          <tr> 
             <td>apellidos</td>
              <td><?php echo e($cliente->apellidos); ?></td>
          </tr>   
          <tr> 
             <td>fechanacimiento</td>
              <td><?php echo e($cliente->fechanacimiento); ?></td>
          </tr>   
         <tr> 
             <td>correo</td>
              <td><?php echo e($cliente->correo); ?></td>
          </tr>  
           <tr> 
             <td>telefono</td>
              <td><?php echo e($cliente->telefono); ?></td>
          </tr>   
          <tr> 
             <td>direccion</td>
              <td><?php echo e($cliente->direccion); ?></td>
          </tr>
          <tr>
           <tr> 
             <td>clave acceso</td>
              <td><?php echo e($cliente->claveacceso); ?></td>
          </tr>
          <tr>
           <tr> 
             <td>estado civil</td>
              <td><?php echo e($cliente->estadocivil); ?></td>
          </tr>
          <tr> 
             <td>sueldoanual</td>
              <td><?php echo e($cliente->sueldoanual); ?></td>
          </tr>
          <tr> 
             <td>IP</td>
              <td><?php echo e($cliente->ip); ?></td>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td class="text-center">
                  <a href="<?php echo e(route('cliente.index')); ?>" class="btn btn-info">volver</a>
              </td>
          </tr>
  
        </table>
        
    </div>
</form>
</body>
</html>

<?php /**PATH /home/ubuntu/environment/web/clienteApp/resources/views/show.blade.php ENDPATH**/ ?>