<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: etapas.php');
	}

	include '../model/conexion.php';
	include '../utilities/funciones.php';
	$id_cuenta_pagar2 = $_POST['txt2id'];
	$clave_formato2 = $_POST['txt2Formato'];
	$fecha_emision2 = $_POST['txt2Emision'];
	$fecha_actual2 = $_POST['txt2Actual'];
	$revision2 = $_POST['txt2Revision'];
	$mes_presupuesto2 = $_POST['txt2Mes'];
	$pagado_por2 = $_POST['txt2Pagado'];
	$proveedor2 = $_POST['txt2Proveedor'];
	$rfc2 = $_POST['txt2RFC'];
	$banco2 = $_POST['txt2Banco'];
	$cuenta_bancaria2 = $_POST['txt2Cuenta'];
	$clabe_interbancaria2 = $_POST['txt2Clabe'];
	$cantidad_pagar2 = $_POST['txt2Cantidad'];
	$importe_letra2 = $_POST['txt2Importe'];
	$num_factura2 = $_POST['txt2Factura'];
	$fecha_limite2 = $_POST['txt2Limite'];
	$concepto_pago2 = $_POST['txt2Concepto'];
	$metodo_pago2 = $_POST['txt2Metodo'];
	$num_transferencia2 = $_POST['txt2Transferencia'];
	$num_cheque2 = $_POST['txt2Cheque'];
	

	/*
	$pago2 = calcular_total($compromiso2,$periodo2);
	$pagos2 = calcular_total($compromiso2,$periodo2);
	*/


	
	/*function calcular_total($compromiso2, $periodo2)
	{
		return ($compromiso2/$periodo2);  
	}*/

	$sentencia = $bd->prepare("UPDATE cuentas_pagar SET 
		clave_formato = ?, 
		fecha_emision = ?, 
		fecha_actual = ?, 
		revision = ?, 
		mes_presupuesto = ?, 
		pagado_por = ?,
		proveedor = ?, 
		rfc = ?, 
		banco = ?, 
		cuenta_bancaria = ?, 
		clabe_interbancaria = ?, 
		cantidad_pagar = ?, 
		importe_letra = ?, 
		num_factura = ?,
		fecha_limite = ?, 
		concepto_pago = ?, 
		metodo_pago = ?,
		num_transferencia = ?, 
		num_cheque = ?

		 WHERE id_cuenta_pagar = ?;");



	$resultado = $sentencia->execute([
	$clave_formato2,
	$fecha_emision2,
	$fecha_actual2,
	$revision2,
	$mes_presupuesto2,
	$pagado_por2,
	$proveedor2,
	$rfc2,
	$banco2,
	$cuenta_bancaria2,
	$clabe_interbancaria2,
	$cantidad_pagar2,
	$importe_letra2,
	$num_factura2,
	$fecha_limite2,
	$concepto_pago2,
	$metodo_pago2,
	$num_transferencia2,
	$num_cheque2, 
	$id_cuenta_pagar2]);

	if ($resultado === TRUE) {
		header('Location: etapas.php');
	}else{
		echo "Error";
	}
?>