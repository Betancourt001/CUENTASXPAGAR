<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: ../login.php');
	}elseif(isset($_SESSION['nombre'])){
		include '../model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM usuario;");
		$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}	
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<link href="../Estilos/style.css" rel="stylesheet" type="text/css">
<link href="../Estilos/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">




<link rel="stylesheet" href="../css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/styles.css">

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<title>Lista de Usuarios</title>
	<meta charset="utf-8">
<style>
    h5 { color: white; }
  </style>
</head>


<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary"> 
	  <div class="col-sm-2"><h5 class="usuario">Profesionales en Recuperacion</h5></div>
  	
	  <div class="col-sm-8">
	  <a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="../index.php">Inicio <i class="" type="button"></i></a>	
			<a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="produccion.php">Cuentas x Pagar <i class="" type="button"></i></a>	
			<a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="../Reportes/reportes.php">Quienes Somos <i class="" type="button"></i></a>				
			
		</div>
               <div class="logg" >
					<h5 class="usuario"><i class="bi-person-fill" type="button" ></i></a> <?php echo $_SESSION['nombre'] ?> <a type="button"  href="../model/cerrar.php" role="button"> <i class="bi-toggle-on" style="font-size: 1.5rem; color: LawnGreen;"></i> </a></h5>
				</div>  
  </nav>
  <br/><br/><br/><br/>
  <center>
  	<br/><br/>
			<div class="">              
			<div id="" class="container">	
				<div><h1>MODULO DE SOLICITUDES DE PAGO</h1></div>
				<br/><br/>
			<a id="boton_cuadro" type="button" role="button" class="btn btn-warning btn-bg"	href="../Convenios/convenios.php"> 
				<input id ="icono" type="image" src="../img/new.jpg" ></input></a>
			<a id="boton_cuadro" type="button" role="button" class="btn btn-warning btn-bg"	href="../template.php"> 
				<input id ="icono" type="image" src="../img/imprimir.jpg" ></input></a>
			<a id="boton_cuadro" type="button" role="button" class="btn btn-warning btn-bg"	href="../Etapas/etapas.php"> 
				<input id ="icono" type="image" src="../img/buscar.jpg" ></input></a>
			<a id="boton_cuadro" type="button" role="button" class="btn btn-warning btn-bg"	href="#"> 
				<input id ="icono" type="image" src="../img/image.jpg" ></input></a>
				
            </div>
            </div>

  </center>

<script src="js/xlsx.full.min.js"></script>
<script src="js/FileSaver.min.js"></script>
<script src="js/tableexport.min.js"></script>


<script src="js/app.js"></script>

</body>
</html>