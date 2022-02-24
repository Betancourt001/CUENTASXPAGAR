<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: ../login.php');
	}elseif(isset($_SESSION['nombre'])){
		include '../model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM cuentas_pagar;");
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
<link href="../Estilos/estilo_etapas.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>






<title>Lista de Usuarios</title>
	<meta charset="utf-8">
	

<style>
    h5 { color: white; }
  </style>

</head>


<body>

<header> 
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary"> 
	  <div class="col-sm-2"><h5 class="usuario">Profesionales en Recuperacion</h5></div>
  	
	  <div class="col-sm-8">
	  <a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="../principal.php">Inicio <i class="" type="button"></i></a>	
			<a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="produccion.php">Cuentas x Pagar <i class="" type="button"></i></a>	
			<a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="../Reportes/reportes.php">Quienes Somos <i class="" type="button"></i></a>				
			
		</div>
               <div class="logg" >
					<h5 class="usuario"><i class="bi-person-fill" type="button" ></i></a> <?php echo $_SESSION['nombre'] ?> <a type="button"  href="../model/cerrar.php" role="button"> <i class="bi-toggle-on" style="font-size: 1.5rem; color: LawnGreen;"></i> </a></h5>
				</div>  
  </nav>
</header>
<center>
			
			<!-- inicio insert -->
			<hr>
			<hr>
			<hr>
            <hr>
            <hr>
    <div class="container">
			<h3>Ingresar Datos del Proveedor:</h3>
			<form method="POST" action="insertar_etapa.php">
				<div class="tabla_chica">
					<table class="table table-hover">
						
							<input type="hidden" name="oculto" value="1">
						
						<tr>
							<td>Formato: </td>
							<td><input type="text" name="txtFormato" placeholder="###"></td>
						
							<td>Fecha Emision: </td>
							<td><input type="date" name="txtEmision" placeholder="###"></td>
						</tr>
						<tr>
							<td>Revision: </td>
							<td><input type="text" name="txtRevision" placeholder="###"></td>

							<td>Mes: </td>
							<td><input type="text" name="txtMes" placeholder="###"></td>
						</tr>
						<tr>
							<td>Proveedor: </td>
							<td><input type="text" name="txtProveedor" placeholder="###"></td>
						
							<td>Fecha Actual: </td>
							<td><input type="date" name="txtActual" placeholder="###"></td>
						</tr>
						<tr>
							<td>Pagado Por: </td>
							<td><input type="text" name="txtPagado" placeholder="###"></td>
						
							<td>RFC: </td>
							<td><input type="text" name="txtRFC" placeholder="###"></td>
						</tr>
						<tr>
							<td>Banco: </td>
							<td><input type="text" name="txtBanco" placeholder="###"></td>
						
							<td>Cuenta Bancaria: </td>
							<td><input type="number" name="txtCuenta" placeholder="###"></td>
						</tr>
						<tr>
							<td>Clabe Inter: </td>
							<td><input type="number" name="txtClabe" placeholder="###"></td>
						
							<td>Cantidad a Pagar: </td>
							<td><input type="number" name="txtCantidad" placeholder="###"></td>
						</tr>
						<tr>
							<td>Importe Letra: </td>
							<td><input type="text" name="txtImporte" placeholder="###"></td>
						
							<td>Num Factura: </td>
							<td><input type="text" name="txtFactura" placeholder="###"></td>
						</tr>
						<tr>
							<td>Fecha Limite: </td>
							<td><input type="date" name="txtLimite" placeholder="###"></td>
						
							<td>Concepto Pago: </td>
							<td><input type="text" name="txtConcepto" placeholder="###"></td>
						</tr>
						<tr>
							<td>Metodo de Pago: </td>
							<td><input type="text" name="txtMetodo" placeholder="###"></td>
						
							<td>Num Transferencia: </td>
							<td><input type="text" name="txtTransferencia" placeholder="###"></td>
						</tr>
						<tr>
							<td>Num Cheque: </td>
							<td><input type="text" name="txtCheque" placeholder="###"></td>
						</tr>
				

						
					</table>

					<div class="container" >
						<div class="col-sm-19">
							
							<input type="submit" value="Insertar" class="btn btn-success btn-bg">
							<a type="button" role="button" class="btn btn-primary btn-bg" 
							href="etapas.php">Regresar <i type="button"></i></a>

						<!--	<input type="reset" name="" class="btn btn-danger btn-bg" value="Imprimir"> -->
						</div>
					</div>


				</div>
			</form>
		</div>
</center>

<script src="../js/xlsx.full.min.js"></script>
<script src="../js/FileSaver.min.js"></script>
<script src="../js/tableexport.min.js"></script>

<script src="../js/app.js"></script>
<script src="tabla.js"></script>
</body>
</html>