<?php
  include '../Controlador/Consultas.php';
  include '../Controlador/User.php';
  include '../Controlador/SesionUsu.php';
  $Sesion = new SesionUsuario();
  $Usuario = new User();
  $Consulta = new Consultas();
  $Usuario->setUsuario($Sesion->getCurrentUser());
  $Usuario->setCorreo($Sesion->getCurrentUser());
  $Sql = "SELECT * FROM usuarios WHERE Usuario='".$Usuario->usuario."'";
  $cons = $Consulta->conexionPDO()->prepare($Sql);
  $cons->execute();
  $rows = $cons->fetchall();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Perfil de <?php echo $Usuario->usuario;?></title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/css/all.css">
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <img src="../Imgs/Logos.png" alt="Logo" width="50px" height="50px" style="margin-right: 15px;">  
      <a class="navbar-brand js-scroll-trigger disabled" href=""><?php echo $Usuario->usuario;?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="../index.php" class="nav-link js-scroll-trigger"><i class='fas fa-home' style='color:white;'></i> Inicio</a>
          </li>
          <?php if($Consulta->Tip_Usu($Usuario->usuario)){ ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <label><i class="fas fa-user" style="color:white;"></i></label>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="Registro.php" ><i class="fas fa-user-plus" style="color:#00E71F;"></i> Registrar Usuario</a>
              <a class="dropdown-item" href="ActualizarUsus.php"><i class="fas fa-user-edit" style="color:#00A7E6;"></i> Actualizar Datos Usuario</a>
              <a class="dropdown-item" href="#Elim"><i class="fas fa-user-minus" style="color: #FF3535;"></i> Eliminar Usuario</a>
            </div>
          </li>
          <?php  }?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <label><i class="fas fa-tools" style="color:white;"></i></label>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Logout.php">Cerrar Sesion</a>
                <?php if(!$Consulta->Tip_Usu($Usuario->usuario)){echo "<a class='dropdown-item' href='#'>Perfil</a>";} ?>
              </div>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="bg-primary text-white" id="Inicio">
    <div class="container text-center">
      <h1 class="mt-4">Bienvenido <?php echo $Usuario->usuario ?></h1>
      <p class="plead">Aqui usted puede consultar su informacion personal, cualquier error llame al encargado o al administrador para que modifique estos datos</p>
    </div>
  </header>
  <section id="contact">
    <div class="container mt--8 pb-5">
       <div class="row justify-content-center">
       	<div class="col-lg-6 col-md-8">
       	  <div class="card bg-light shadow border-0">
       		  <div class="card-body px-lg-5 py-lg-5">
              <?php foreach ($rows as $row): ?>
       		    <div class="form-group">
                <label>Apellido Paterno: <?php echo $row['Apellido_P']?></label>
       		    </div>
              <div class="form-group">
                <label>Apellido Materno: <?php echo $row['Apellido_M']?></label>
              </div>
              <div class="form-group">
                <label>Nombre(s): <?php echo $row['Nombre']?></label>
              </div>
              <div class="form-group">
                <label>Usuario: <?php echo $row['Usuario']?></label>
              </div>
              <div class="form-group">
                <label>Correo Electronico: <?php echo $row['Correo']?></label>
              </div>
              <div class="form-group">
                <label>Genero: <?php echo $row['Genero']?></label>
              </div>
              <div class="form-group">
                <label>Numero Telefonico: <?php echo $row['Telefono']?></label>
              </div>
              <div class="form-group">
                <label>Edad: <?php echo $row['Edad']?></label>
              </div>
              <?php endforeach; ?>
       		  </div>
       	  </div>
       	</div>
       </div>
    </div>
  </section>
  <!-- Bootstrap core JavaScript -->
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>
