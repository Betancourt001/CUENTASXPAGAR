<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: etapas.php');
	}

	


	if (!isset($_SESSION['nombre'])) {
		header('Location: ../login.php');
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


					<?php 
					$persona->clave_formato; 
					$persona->fecha_emision; 
					$persona->revision; 
					$persona->mes_presupuesto; 
					$persona->proveedor; 
					$persona->fecha_actual; 
					$persona->pagado_por;
					$persona->rfc; 
					$persona->banco; 
					$persona->cuenta_bancaria; 
					$persona->clabe_interbancaria;
					$persona->cantidad_pagar; 
					$persona->importe_letra; 
					$persona->num_factura; 
					$persona->fecha_limite;
					$persona->concepto_pago;
					$persona->metodo_pago;
					$persona->num_transferencia; 
					$persona->num_cheque; 
				



require_once dirname(__FILE__).'/PhpOffice/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$templateWord = new TemplateProcessor('plantilla.docx');
 
$clave_formato = $persona->clave_formato;
$fecha_emision = $persona->fecha_emision;
$fecha_actual = $persona->fecha_actual; 
$revision = $persona->revision; 
$mes_presupuesto = $persona->mes_presupuesto;
$pagado_por = $persona->pagado_por;
$proveedor = $persona->proveedor;
$rfc = $persona->rfc; 
$banco = $persona->banco; 
$cuenta_bancaria = $persona->cuenta_bancaria; 
$clabe_interbancaria = $persona->clabe_interbancaria;
$cantidad_pagar = $persona->cantidad_pagar;
$importe_letra = $persona->importe_letra;
$num_factura = $persona->num_factura; 
$fecha_limite = $persona->fecha_limite;
$concepto_pago = $persona->concepto_pago;
$metodo_pago = $persona->metodo_pago;
$num_transferencia = $persona->num_transferencia; 
$num_cheque = $persona->num_cheque;


// --- Asignamos valores a la plantilla
$templateWord->setValue('clave_formato',$clave_formato);
$templateWord->setValue('fecha_emision',$fecha_emision);
$templateWord->setValue('fecha_actual',$fecha_actual);
$templateWord->setValue('revision',$revision);
$templateWord->setValue('mes_presupuesto',$mes_presupuesto);
$templateWord->setValue('pagado_por',$pagado_por);
$templateWord->setValue('proveedor',$proveedor);
$templateWord->setValue('rfc',$rfc);
$templateWord->setValue('banco',$banco);
$templateWord->setValue('cuenta_bancaria',$cuenta_bancaria);
$templateWord->setValue('clabe_interbancaria',$clabe_interbancaria);
$templateWord->setValue('cantidad_pagar',$cantidad_pagar);
$templateWord->setValue('importe_letra',$importe_letra);
$templateWord->setValue('num_factura',$num_factura);
$templateWord->setValue('fecha_limite',$fecha_limite);
$templateWord->setValue('concepto_pago',$concepto_pago);
$templateWord->setValue('metodo_pago',$metodo_pago);
$templateWord->setValue('num_transferencia',$num_transferencia);
$templateWord->setValue('num_cheque',$num_cheque);

// --- Guardamos el documento
$templateWord->saveAs('PR-FOR-CON-002 SOLICITUD DE PAGO.docx');

header("Content-Disposition: attachment; filename=PR-FOR-CON-002 SOLICITUD DE PAGO.docx; charset=iso-8859-1");
echo file_get_contents('PR-FOR-CON-002 SOLICITUD DE PAGO.docx');
        
?>