<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
	include '../model/conexion.php';
	$sentencia = $bd->prepare("DELETE FROM etapas WHERE id_etapa = ?;");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: etapas.php');
	}else{
		echo "Error";
	}

?>