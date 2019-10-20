<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/css/all.css">
	<title>Login The Dragon Games</title>
</head>
<body class="bg-primary" style="background-image: url(Imgs/Fondo.jpg); background-position: top; background-attachment: fixed; background-size: auto; background-repeat: no-repeat;">
<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
	<div class="container px-4">
	 <img src="Imgs/Logo_White.png" alt="Aqui iria una imagen si supiera cual xD" width="50px" height="50px">
   <?php 
      if (isset($mensError)) {
        echo "<div class='alert alert-warning' role='alert'>";
        echo "<span class='alert-inner--icon'><i class='fas fa-exclamation-triangle'></i></i></span>";
        echo "<span class='alert-inner--text'><strong>Warning!</strong> ".$mensError." </span>";
        echo "</div>";
      }
    ?>
	</div>
</nav>
 <div class="header bg-gradient-primary py-7 py-lg-8">
 	<div class="container">
 	  <div class="header-body text-center mb-7">
 	  	<div class="row justify-content-center">
 	  		<div class="col-lg-5 col-md-6">
 	  			<h1 class="text-light">Inicie Sesion</h1>
 	  		</div>
 	  	</div>
 	  </div>
 	</div>
 </div>
 <div class="container mt--8 pb-5">
   <div class="row justify-content-center">
     <div class="col-lg-5 col-md-7">
       <div class="card bg-light shadow border-0">
         <div class="card-header bg-transparent pb-5 text-center">
           <img src="Imgs/Logos.png" class="navbar-brand-img" width="150px" height="150px">
         </div>
         <div class="card-body px-lg-5 py-lg-5">
         	<div class="text-center text-muted mb-4">
              <small>¡Bienvenido!</small>
            </div>
            <form role="form" action="index.php" method="POST">
              <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                  </div>
                    <input class="form-control" placeholder="Usuario" type="text" name="correo" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Escriba su correo">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-key"></i></i></span>
                    </div>
                    <input class="form-control" placeholder="Contraseña" type="password" name="contraseña" data-toggle="tooltip" data-placement="bottom" title="Escriba su contraseña">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" value="submit" name="inicio" class="btn btn-success my-4" data-toggle="tooltip" data-placement="bottom" title="Entrar">
                  Iniciar Sesion
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              
            </div>
            <!--<div class="col-6">
              <a href="Pages/RecuContra.php" class="text-light"><small style="font-size: 14.5px !important;">Olvide mi contraseña</small></a>
            </div>-->
          </div>
        </div>
      </div>
    </div>
<!--Zona de Scrips-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>