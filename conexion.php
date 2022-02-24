
<?php  
    $con = new mysqli("localhost","root","123456","chartjs10"); // Conectar a la BD
    $sql = "select * from venta"; // Consulta SQL
    $query = $con->query($sql); // Ejecutar la consulta SQL
    $data = array(); // Array donde vamos a guardar los datos
    while($r = $query->fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
        $data[]=$r; // Guardar los resultados en la variable $data
}
?>