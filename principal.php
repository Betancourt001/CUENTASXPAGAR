<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
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


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="icon" href="favicon.ico">
<link href="Estilos/style.css" rel="stylesheet" type="text/css">
<link href="Estilos/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">


<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<title>Lista de Usuarios</title>
	<meta charset="utf-8">

<style>
    h5 { color: white; }
  </style>


</head>


<body class="container-fluid">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary"> 
	  <div class="col-sm-2"><h5 class="usuario">Profesionales en Recuperacion</h5></div>
  	
	 		<div class="col-sm-8">
	  		<a type="button" role="button" class="btn btn-outline-light btn-sm" 
					href="principal.php">Inicio <i class="" type="button"></i></a>
				<a type="button" role="button" class="btn btn-outline-light btn-sm" 
					href="Produccion/produccion.php">Cuentas x pagar <i class="" type="button"></i></a>	
				<a type="button" role="button" class="btn btn-outline-light btn-sm" 
					href="Reportes/reportes.php">Quienes Somos <i class="" type="button"></i></a>							
			</div>
    	<div class="logg" >
					<h5 class="usuario"><i class="bi-person-fill" type="button" ></i></a> <?php echo $_SESSION['nombre'] ?> <a type="button"  href="model/cerrar.php" role="button"> <i class="bi-toggle-on" style="font-size: 1.5rem; color: LawnGreen;"></i> </a></h5>
			</div>  
  </nav>
  		<br/>
  		<br/>
  		<br/>













<!--


<div class="container">
<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="img/image.jpg" /></a>
      <div class="carousel-caption">
        <h3>Meow</h3>
        <p>Just Kitten Around</p>
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="img/image.jpg" /></a>
      <div class="carousel-caption">
        <h3>Meow</h3>
        <p>Just Kitten Around</p>
      </div>
    </div>
    <div class="item">
      <a href="#"><img src="img/image.jpg" /></a>
      <div class="carousel-caption">
        <h3>Meow</h3>
        <p>Just Kitten Around</p>
      </div>
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
</div>


-->





<script src="js/xlsx.full.min.js"></script>
<script src="js/FileSaver.min.js"></script>
<script src="js/tableexport.min.js"></script>


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>


<script src="js/app.js"></script>

</body>
</html>