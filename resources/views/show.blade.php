<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Laravel</title>
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet"> <!--PROBLEMA-->
        <link href="{{url('assets/css/jumbotron.css')}}" rel="stylesheet"><!--PROBLEMA-->
        <link href="{{url('assets/css/own.css')}}" rel="stylesheet"><!--PROBLEMA-->
        <link href="{{url('assets/css/micss.css')}}" rel="stylesheet">
</head>
<body>
<form action="{{ url('cliente') }}" method="post">
    @csrf
    <div class="table-responsive-lg">

       <table class="table table-striped table-hover">
          <tr> 
             <td>id</td>
              <td>{{ $cliente->id}}</td>
          </tr>       
          <tr> 
             <td>nombre</td>
              <td>{{ $cliente->nombre}}</td>
          </tr>   
          <tr> 
             <td>apellidos</td>
              <td>{{ $cliente->apellidos}}</td>
          </tr>   
          <tr> 
             <td>fechanacimiento</td>
              <td>{{ $cliente->fechanacimiento}}</td>
          </tr>   
         <tr> 
             <td>correo</td>
              <td>{{ $cliente->correo}}</td>
          </tr>  
           <tr> 
             <td>telefono</td>
              <td>{{ $cliente->telefono}}</td>
          </tr>   
          <tr> 
             <td>direccion</td>
              <td>{{ $cliente->direccion}}</td>
          </tr>
          <tr>
           <tr> 
             <td>clave acceso</td>
              <td>{{ $cliente->claveacceso}}</td>
          </tr>
          <tr>
           <tr> 
             <td>estado civil</td>
              <td>{{ $cliente->estadocivil}}</td>
          </tr>
          <tr> 
             <td>sueldoanual</td>
              <td>{{ $cliente->sueldoanual}}</td>
          </tr>
          <tr> 
             <td>IP</td>
              <td>{{ $cliente->ip}}</td>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td class="text-center">
                  <a href="{{route('cliente.index')}}" class="btn btn-info">volver</a>
              </td>
          </tr>
  
        </table>
        
    </div>
</form>
</body>
</html>

