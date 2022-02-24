<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include '../model/conexion.php';
	include '../utilities/funciones.php';


	$clave_formato = $_POST['txtFormato'];
	$fecha_emision = $_POST['txtEmision'];
	$fecha_actual = $_POST['txtActual'];
	$revision = $_POST['txtRevision'];
	$mes_presupuesto = $_POST['txtMes'];
	$pagado_por = $_POST['txtPagado'];
	$proveedor = $_POST['txtProveedor'];
	$rfc = $_POST['txtRFC'];
	$banco = $_POST['txtBanco'];
	$cuenta_bancaria = $_POST['txtCuenta'];
	$clabe_interbancaria = $_POST['txtClabe'];
	$cantidad_pagar = $_POST['txtCantidad'];
	$importe_letra = $_POST['txtImporte'];
	$num_factura = $_POST['txtFactura'];
	$fecha_limite = $_POST['txtLimite'];
	$concepto_pago = $_POST['txtConcepto'];
	$metodo_pago = $_POST['txtMetodo'];
	$num_transferencia = $_POST['txtTransferencia'];
	$num_cheque = $_POST['txtCheque'];

	
	/*function calcular_total($compromiso, $periodo)
	{
		return ($compromiso/$periodo);  
	}*/


	//$pago =calcular_total($compromiso,$periodo);
	//$pagos =calcular_total($compromiso,$periodo);

	// otra forma
	//$pago =$compromiso/$periodo;
	//$pagos =$compromiso/$periodo;
	


	$sentencia = $bd->prepare("INSERT INTO cuentas_pagar(
		clave_formato, 
		fecha_emision, 
		fecha_actual, 
		revision, 
		mes_presupuesto, 
		pagado_por,
		proveedor, 
		rfc, 
		banco, 
		cuenta_bancaria, 
		clabe_interbancaria, 
		cantidad_pagar, 
		importe_letra, 
		num_factura,
		fecha_limite, 
		concepto_pago, 
		metodo_pago,
		num_transferencia, 
		num_cheque ) 
	VALUES (
		?, 
		?, 
		?, 
		?, 
		?,
		?, 
		?, 
		?, 
		?, 
		?, 
		?, 
		?, 
		?,
		?, 
		?, 
		?,
		?, 
		?,
		? );");

		$resultado = $sentencia->execute([
			$clave_formato,
			$fecha_emision,
			$fecha_actual,
			$revision,
			$mes_presupuesto,
			$pagado_por,
			$proveedor,
			$rfc,
			$banco,
			$cuenta_bancaria,
			$clabe_interbancaria,
			$cantidad_pagar,
			$importe_letra,
			$num_factura,
			$fecha_limite,
			$concepto_pago,
			$metodo_pago,
			$num_transferencia,
			$num_cheque
			 ]);
	

	if ($resultado === TRUE) {
		echo "Insertado correctamente";
		header('Location: etapas.php');
	}else{
		echo "Error";
	}
?>