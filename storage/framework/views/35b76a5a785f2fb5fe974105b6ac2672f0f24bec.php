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

<form action="<?php echo e(url('cliente/'.$cliente->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
        <?php echo e($cliente->id); ?>

        <input class="form-control" type="text" name="nombre" required id="nombre" placeholder="nombre" minlength="2" maxlength="50" value="<?php echo e(old('nombre',$cliente->nombre)); ?>">
        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input  class="form-control" type="text" name="apellidos" id="apellidos" placeholder="apellidos" minlength="2" maxlength="100" required  value="<?php echo e(old('apellidos',$cliente->apellidos)); ?>">
        <?php $__errorArgs = ['apellidos'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input  class="form-control" type="date" name="fechanacimiento" id="fechanacimiento" placeholder="fechanacimiento" value="<?php echo e(old('fechanacimiento', $cliente->fechanacimiento)); ?>">
        <?php $__errorArgs = ['fechanacimiento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input  class="form-control" type="correo" name="correo" id="correo" placeholder="correo"  value="<?php echo e('correo',$cliente->correo); ?>" >
        <?php $__errorArgs = ['correo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input  class="form-control" type="number" name="telefono" id="telefono" placeholder="telefono" value="<?php echo e(old('telefono', $cliente->telefono)); ?>">
        <?php $__errorArgs = ['telefono'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input  class="form-control"type="number" maxlength="100" name="direccion" id="direccion" placeholder="direccion"  value="<?php echo e(old('direccion', $cliente->direccion)); ?>">
        <?php $__errorArgs = ['direccion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
         <input  class="form-control"type="number" maxlength="50" minlength="5" name="claveacceso" id="claveacceso" placeholder="claveacceso"required  value="<?php echo e(old('claveacceso', $cliente->claveacceso)); ?>">
        <?php $__errorArgs = ['claveacceso'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
         <input  class="form-control"type="text" maxlength="30" name="descuento" id="estadocivil" placeholder="estadocivil"   value="<?php echo e(old('estadocivil', $cliente->estadocivil)); ?>">
        <?php $__errorArgs = ['estadocivil'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
         <input  class="form-control"type="decimal" maxlength="8" name="sueldoanual" id="sueldoanual" placeholder="sueldoanual"  value="<?php echo e(old('sueldoanual', $cliente->sueldoanual)); ?>">
        <?php $__errorArgs = ['sueldoanual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <input type="submit"  class="btn btn-primary" value="editar">
          <a href="<?php echo e(route('cliente.index')); ?>" class="btn btn-info">volver</a>
</form>
</body>
</html>

<?php /**PATH /home/ubuntu/environment/web/clienteApp/resources/views/edit.blade.php ENDPATH**/ ?>