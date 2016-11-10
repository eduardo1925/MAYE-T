<!DOCTYPE html>
<html>
<head>

	<title>Recuperar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
	
</head>
<body>
	
	<div class="progress">
  		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 5%" >
    		<span class="sr-only">5% Completo</span>
  		</div>
	</div>


	<div">
	<form class="form-horizontal" action="../controlador/verifica_correo.php" method="post" ">
		<div class="form-group">
    		<label for="correo" class="col-sm-2 control-label">Ingrese su correo</label>
    		<div class="col-xs-3">
      			<input name="correo" type="text" class="form-control" id="correo" placeholder="ejemplo@gmail.com">
    		</div>
  		</div>
  		<div class="form-group">
    		<div class="col-sm-offset-2 col-sm-10">
      			<button type="submit" class="btn btn-success" >Recuperar</button>
      			<a class="btn btn-danger" role="button" data-toggle="collapse" href="../index.php" aria-expanded="false" aria-controls="collapseExample">
  				Cancelar
				</a>
    		</div>
  		</div>
	</form>
	</div>
</body>
</html>
