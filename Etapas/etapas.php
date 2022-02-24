<?php  
	session_start();
	if (!isset($_SESSION['nombre'])) {
		header('Location: ../index.php');
	}elseif(isset($_SESSION['nombre'])){
		include '../model/conexion.php';
		$sentencia = $bd->query("SELECT * FROM cuentas_pagar ORDER BY id_cuenta_pagar desc;");
		$etapas = $sentencia->fetchAll(PDO::FETCH_OBJ);
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


<link rel="stylesheet" href="../css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/styles.css">

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

<center>
<br/><br/><br/>
<h3 class="title">Lista de Trabajadores</h3>
		              
	
			<div >	
				<table id="export_to_excel" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
					<thead>
						<tr>
						<th class="col-md-1">Id</th>
						<th class="col-md-2">Formato</th>
						<th class="col-md-2">Fecha_E</th>
						<th class="col-md-1">Revision</th>
						<th class="col-md-2">Mes</th>
            <th class="col-md-2">Proveedor</th>
						<th class="col-md-1"><a type="button" role="button" class="btn btn-primary btn-sm" 
							href="insertar_datos_etapa.php"><i class="bi-plus-lg" type="button"></i></a></th>
					</tr>
					</thead>

						<?php 
						foreach ($etapas as $dato) {
						?>
						
							<tr>
							<td class="col-md-1"><?php echo $dato->id_cuenta_pagar; ?></td>
							<td class="col-md-2"><?php echo $dato->clave_formato; ?></td>
							<td class="col-md-2"><?php echo $dato->fecha_emision; ?></td>
							<?php 
								$dato->fecha_actual; 
							?>
							<td class="col-md-1"><?php echo $dato->revision; ?></td>
							<td class="col-md-2"><?php echo $dato->mes_presupuesto; ?></td>
							<?php 
								$dato->pagado_por; 
							?>
              <td class="col-md-2"><?php echo $dato->proveedor; ?></td>

              <?php 
								$dato->rfc; 
								$dato->banco; 
								$dato->cuenta_bancaria; 
								$dato->clabe_interbancaria; 
								$dato->cantidad_pagar; 
								$dato->importe_letra; 
								$dato->num_factura; 


								$dato->fecha_limite; 
								$dato->concepto_pago; 
								$dato->metodo_pago; 
								$dato->num_transferencia; 
								$dato->num_cheque; 

							?>



							<td class="col-md-1">
								<a type="button" role="button" class="btn btn-warning btn-sm" 
									href="imprimir.php?id=<?php echo $dato->id_cuenta_pagar; ?>"> 
									<i class="bi-pencil-square" type="button">
									</i>
								</a>
							</td>

							<td class="col-md-1">
								<a type="button" role="button" class="btn btn-warning btn-sm" 
									href="editar_etapa.php?id=<?php echo $dato->id_cuenta_pagar; ?>"> 
									<i class="bi-pencil-square" type="button">
									</i>
								</a>
							</td>
							<td class="col-md-1">
								<a type="button" role="button" id="btnConfirm" class="btn btn-danger btn-sm" 
									href="eliminar_etapa.php?id=<?php echo $dato->id_cuenta_pagar; ?>">
									<i class="bi-trash" type="button">
									</i>
								</a>
							</td>&nbsp;
							</tr>	
						<?php
						}
						?>	
						
					
				</table>
				<br/>
				<p>
                	<a href="#" class="btn btn-success btn-sm" id="submitExport">
					Exportar a Excel <i class="fa fa-download"></i> 
                	</a>
            	</p>
            <form action="process.php" method="post" target="_blank" id="formExport">
                <input type="hidden" id="data_to_send" name="data_to_send" />
            </form>
				
			</div>
				
				<div>
					
				<form id="form1" class="well col-lg-12" action="../enviar_correo.php" method="post" name="form1" enctype="multipart/form-data">
          			<input type="file" name="adjunto" id="archivo-adjunto" >
					  <button type="submit" role="button" class="btn btn-danger btn-sm" 
						>Enviar al Correo <i class="bi-envelope-fill" type="button"></i></button>
        			
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