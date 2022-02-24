<?php 
	session_start();
	if (isset($_SESSION['nombre'])) {
		header('Location: index.php');
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
<link href="Estilos/style.css" rel="stylesheet" type="text/css">
<link href="Estilos/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">




<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<title>Iniciar Sesion</title>
	<meta charset="utf-8">
</head>
<body>
    <br/><br/>



<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              <br/>
              <form class="form" method="POST" action="loginProceso.php">
                <h1 class="title">Inicio de Sesion</h1>
                <br/>
                <br/>

                <div class="form-outline form-white mb-4">
                  <label class="form-label">Usuario_PR:</label>
                  <input
                  class="form-input"
                  type="text" 
                  name="txtUsu"
                  required
                  placeholder="jose.gonzalez@profesionalesenrec.com"
                  >
                </div>

                <div class="form-outline form-white mb-4">
                  <label class="form-label">Contraseña:</label>
                  <input
                  class="form-input"
                  type="password" 
                  name="txtPass"
                  placeholder="*******"
                  >
                </div>

                <div >
                  <input class="form-submit" type="submit" value="Iniciar Sesion">
                </div>
              

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>

            </div>
            </form>
              <div>
                <p class="mb-0">Prototipo Desarrollado por: Jose Gonzalez Betancourt Para: Recuperacion Exitosa de Mexico </p>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
















<script src="js/xlsx.full.min.js"></script>
<script src="js/FileSaver.min.js"></script>
<script src="js/tableexport.min.js"></script>


<script src="js/app.js"></script>

</body>
</html>