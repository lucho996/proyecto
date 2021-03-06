<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <title>Proveedor</title>
    <style>

		.badge {
			float: right;
		}
	</style>
</head>
<div style="width: 1100px;
margin: 0px auto;
background: #cccccc;
padding: 35px;">
</div>
<body>
        <div style="width: 1100px; margin:20px auto;">
                <div style="width: 200px; float:left; position:relative;">
                @include('intranet.menu')
                </div>    
                <div style="width: 850px; float: right; position:relative;">
        <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                    </div>
                  <div  id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="active"><a href="/proveedor">Todos</a></li>
                          <li><a href="/proveedor/create">Nuevo</a></li>
                      </ul>
                  </div>
              </div>
          </nav>

          <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Lista de Proveedores</h4>
                </div>
      
                <div class="panel-body">
                  <table class="table ">
                      <thead>
                          <tr>
                              <th>Rut</th>
                              <th>Nombre</th>
                              <th>Acciones</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($proveedor as $proveedor)
                              <tr>
                                  <td>{{ $proveedor->RUT }}</td>
                                  <td>{{ $proveedor->NOMBRE }}</td>

                                  <td>
                                      <a href="/proveedor/show/{{ $proveedor->RUT }}"><span class="label label-info">Ver</span></a>
                                      <a href="/proveedor/edit/{{ $proveedor->RUT }}"><span class="label label-success">Editar</span></a>
                                      
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
                </div>
            </div>

                </div>
        </div>
</body>
</html>