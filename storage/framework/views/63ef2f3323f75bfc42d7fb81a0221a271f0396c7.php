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

    <table border="1"class="table table-dark">

    <thead>
    <tr>
      <th scope="col">NOMBRE </th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">FECHA DE NACIMIENTO</th>
      <th scope="col">CORREO</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">DIRECCION</th>
      <th scope="col">CLAVE ACCESO</th>
      <th scope="col">ESTADO CIVIL</th>
      <th scope="col">SUELDO ANUAL</th>

    </tr>
    </thead>
    <tbody>
        <tr>
            <td><input type="text" name="nombre"/></td>
            <td><input type="text" name="apellidos"/></td>
            <td><input type="date" name="fechanacimiento"/></td>
            <td><input type="email" name="correo"/></td>
            <td><input type="text" name="telefono"/></td>
            <td><input type="text" name="direccion"/></td>
            <td><input type="text" name="claveacceso"/></td>
            <td><input type="text" name="estadocivil"/></td>
            <td><input type="text" name="sueldoanual"/></td>
 

        </tr>
    </tbody>  
    </div>
   
    </table>
    <div class="d-flex justify-content-around">
         <input type="submit" value="submit" class="btn btn-primary"  />
        <a href="<?php echo e(url('cliente')); ?>" class="btn btn-info">VOLVER</a>
        
    </div>
    
   
 
   
</form>
</body>
</html>

<?php /**PATH /home/ubuntu/environment/web/clienteApp/resources/views/create.blade.php ENDPATH**/ ?>