<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: etapas.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: ../index.php');
	}elseif(isset($_SESSION['nombre'])){
		include '../model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM cuentas_pagar WHERE id_cuenta_pagar = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
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
	<title>Editar Etapa</title>
	<meta charset="utf-8">


	<style>
    h5 { color: white; }
  </style>

  
</head>
<body>

	  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary"> 
  
 <!--  <img src="img\321.png" width="120" height="50"> -->
	  <div class="col-sm-2">
		  <h5 class="usuario">Profesionales en Recuperacion</h5>
		</div>
  	
	  <div class="col-sm-8">
		  
	  	<a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="../principal.php">Inicio <i class="" type="button"></i></a>
			<a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="../Produccion/produccion.php">Cuentas x Pagar <i class="" type="button"></i></a>	
			<a type="button" role="button" class="btn btn-outline-light btn-sm" 
				href="../Somos/somos.php">Quienes Somos <i class="" type="button"></i></a>			
			
		</div>
        <div class="logg" >
					<h5 class="usuario"><i class="bi-person-fill" type="button" ></i></a> <?php echo $_SESSION['nombre'] ?> <a type="button"  href="../model/cerrar.php" role="button"> <i class="bi-toggle-on" style="font-size: 1.5rem; color: LawnGreen;"></i> </a></h5>
				</div>  
  </nav>
  <br/><br/><br/>
	<center>
		<h3>Editar Etapa:</h3>
		<form method="POST" action="editarProceso_etapa.php">
			<table>
				<tr>
					<td>Formato: </td>
					<td><input type="text" name="txt2Formato" value="<?php echo $persona->clave_formato; ?>"></td>
				</tr>
				<tr>
					<td>Fecha Emision: </td>
					<td><input type="date" name="txt2Emision" value="<?php echo $persona->fecha_emision; ?>"></td>
				</tr>
				<tr>
					<td>Revision: </td>
					<td><input type="text" name="txt2Revision" value="<?php echo $persona->revision; ?>"></td>
				</tr>
				<tr>
					<td>Mes: </td>
					<td><input type="text" name="txt2Mes" value="<?php echo $persona->mes_presupuesto; ?>"></td>
				</tr>
				<tr>
					<td>Proveedor: </td>
					<td><input type="text" name="txt2Proveedor" value="<?php echo $persona->proveedor; ?>"></td>
				</tr>




				<tr>
					<td>Fecha Actual: </td>
					<td><input type="date" name="txt2Actual" value="<?php echo $persona->fecha_actual; ?>"></td>
				</tr>
				<tr>
					<td>Pagado Por: </td>
					<td><input type="text" name="txt2Pagado" value="<?php echo $persona->pagado_por; ?>"></td>
				</tr>
				<tr>
					<td>RFC: </td>
					<td><input type="text" name="txt2RFC" value="<?php echo $persona->rfc; ?>"></td>
				</tr>
				<tr>
					<td>Banco: </td>
					<td><input type="text" name="txt2Banco" value="<?php echo $persona->banco; ?>"></td>
				</tr>
				<tr>
					<td>Cuenta Bancaria: </td>
					<td><input type="number" name="txt2Cuenta" value="<?php echo $persona->cuenta_bancaria; ?>"></td>
				</tr>








				<tr>
					<td>Clabe Inter: </td>
					<td><input type="number" name="txt2Clabe" value="<?php echo $persona->clabe_interbancaria; ?>"></td>
				</tr>
				<tr>
					<td>Cantidad a Pagar: </td>
					<td><input type="number" name="txt2Cantidad" value="<?php echo $persona->cantidad_pagar; ?>"></td>
				</tr>
				<tr>
					<td>Importe Letra: </td>
					<td><input type="text" name="txt2Importe" value="<?php echo $persona->importe_letra; ?>"></td>
				</tr>
				<tr>
					<td>Num Factura: </td>
					<td><input type="text" name="txt2Factura" value="<?php echo $persona->num_factura; ?>"></td>
				</tr>
				<tr>
					<td>Fecha Limite: </td>
					<td><input type="date" name="txt2Limite" value="<?php echo $persona->fecha_limite; ?>"></td>
				</tr>






				<tr>
					<td>Concepto Pago: </td>
					<td><input type="text" name="txt2Concepto" value="<?php echo $persona->concepto_pago; ?>"></td>
				</tr>
				<tr>
					<td>Metodo de Pago: </td>
					<td><input type="text" name="txt2Metodo" value="<?php echo $persona->metodo_pago; ?>"></td>
				</tr>
				<tr>
					<td>Num Transferencia: </td>
					<td><input type="text" name="txt2Transferencia" value="<?php echo $persona->num_transferencia; ?>"></td>
				</tr>
				<tr>
					<td>Num Cheque: </td>
					<td><input type="text" name="txt2Cheque" value="<?php echo $persona->num_cheque; ?>"></td>
				</tr>














				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="txt2id" value="<?php echo $persona->id_cuenta_pagar; ?>">
					<td colspan="3">
						<input type="submit" value="EDITAR ETAPA" class="btn btn-success">
						<a type="button" role="button" class="btn btn-info" 
							href="etapas.php">Regresar <i type="button"></i></a>
					
					</td>
					
						
					
					
				</tr>
				
				
			</table>
		</form>
	</center>
</body>
</html>