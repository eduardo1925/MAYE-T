<?php
class Conexion{
	
	 public function get_conexion(){
         $user="root";
        $pass="toor";
        $host="localhost";
        $db="tesis";
        
          
	      try{
			  $conexion=new PDO("mysql:host=$host; dbname=$db;",$user,$pass);//instanciamos pdo
			  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $conexion->exec("SET CHARACTER SET UTF8");
			  
		  }catch(Exception $e){
			  die("Error" . $e->getMessage());
			  echo "Linea del error" . $e->getLine();
		  }
		 
		 return $conexion;
	 }
	
}



?>
<?php
$mysqli= new mysqli("localhost","root","toor","tesis"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>