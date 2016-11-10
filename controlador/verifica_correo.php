<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");

$trabajador= new trabajador();

$correo=$_POST["correo"];

$ejecuta=$trabajador->verifica_correo($correo);
if($ejecuta){
    //$msmlista="valido";
    echo "

    <html>
    	<head>
    		<title>Recuperar contraseña</title>
    		<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
    	</head>
    <body>
    	<div class='progress'>
  			<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width: 50%'' >
    			<span class='sr-only'>50% Completo</span>
  			</div>
		</div>

		<div class='panel panel-primary'>
  			<div class='panel-body'>
    			Recuperar contraseña
  			</div>
  			<div class='panel-footer'>
  				<form class='form-horizontal' role='form' name='recuperar' action='../controlador/recuperar_contra.php' method='post'>
					<div class='form-group'>
    					<label for='correo' class='col-sm-2 control-label'>Cuenta a cambiar</label>
    					<div class='col-xs-3'>
      						<input name='correo' type='text' class='form-control' id='correo' value ='"; echo $ejecuta; echo "' readonly=''>
    					</div>
  					</div>
  					<div class='form-group'>
    					<label for='password' class='col-sm-2 control-label'>Nueva contraseña</label>
    					<div class='col-xs-3'>
      						<input name='password' type='password' class='form-control' id='password' placeholder ='Contraseña'>
    					</div>
  					</div>
  					<div class='form-group'>
    					<label for='password1' class='col-sm-2 control-label'>Repita contraseña</label>
    					<div class='col-xs-3'>
      						<input name='password1' type='password' class='form-control' id='password1' placeholder ='Repita Contraseña'>
    					</div>
  					</div>
					<div class='form-group'>
    					<div class='col-sm-offset-2 col-sm-10'>
      						<button type='submit' class='btn btn-success'>Recuperar</button>
    					</div>
  					</div>
				</form>
				<script src='../js/valida_recuperar.js'></script>
  			</div>
		</div>    	
	</body>
	</html>";	

}else{
    $msmlista="novalido";
    $mensajes="No existe este correo: ".$correo;
    echo "

    <html>
    	<head>
    		<title>Recuperar contraseña</title>
    		<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
    	</head>
    <body>
    	
		<div class='alert alert-danger' role='alert'>"
  			.$mensajes."
  			<a href='../index.php' class='alert-link'>Ir al inicio!</a>
		</div>
	</body>
	</html>"

    ; 
}

?>