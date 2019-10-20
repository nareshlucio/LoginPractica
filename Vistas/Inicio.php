<?php
  include '../Controlador/Consultas.php';
  include '../Controlador/User.php';
  include '../Controlador/SesionUsu.php';
  $Sesion = new SesionUsuario();
  $Usuario = new User();
  $Consulta = new Consultas();
  $Usuario->setUsuario($Sesion->getCurrentUser());
  $Usuario->setCorreo($Sesion->getCurrentUser());
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/css/all.css">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <img src="../Imgs/Logos.png" alt="Logo" width="50px" height="50px" style="margin-right: 15px;">  
      <a class="navbar-brand js-scroll-trigger disabled" href=""><?php if($Consulta->Tip_Usu($Usuario->usuario)){echo "Administrador";}else {echo "Usuario";} ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#Inicio" class="nav-link js-scroll-trigger"><i class='fas fa-home' style='color:white;'></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a href="Evaluacion.php" class="nav-link">Evaluar</a>
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
              <a class="dropdown-item" href=""></a>
            </div>
          </li>
          <?php  }?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <label><i class="fas fa-tools" style="color:white;"></i></label>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Logout.php">Cerrar Sesion</a>
                <?php if(!$Consulta->Tip_Usu($Usuario->usuario)){echo "<a class='dropdown-item' href='Perfil.php'>Perfil</a>";} ?>
              </div>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php if($Consulta->Tip_Usu($Usuario->usuario)){?>
  <header class="bg-primary text-white" id="Inicio">
    <div class="container text-center">
      <h1 class="mt-4">Registro de Usuarios</h1>
    </div>
  </header>
  <section id="contact">
    <div class="container">
      <h1 class="mt-4">Usuarios Admin</h1>
      <div class="row">
          <div class="col table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead bg-light">
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Apellido Paterno</th>
                  <th scope="col">Apellido Materno</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Correo Electronico</th>
                  <th scope="col">Telefono</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $Consulta->MostrarUsuAdmin();
                 ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </section>
  <section id="services" class="bg-light">
    <div class="container">
      <h1 class="mt-4">Usuarios</h1>
      <div class="row">
          <div class="col table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead bg-light">
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Apellido Paterno</th>
                  <th scope="col">Apellido Materno</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Correo Electronico</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Tipo de Usuario</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $Consulta->MostrarUsu();
                 ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
  </section>
  <section id="services">
    <div class="container">
      <h1 class="mt-4">Actualizar Usuarios</h1>
      <div class="row">
          <div class="col table-responsive">
            <form role="form" method="POST" action="" id="Actualizar">
            <table class="table align-items-center table-flush">
              <thead class="thead bg-light">
                <tr>
                  <th scope="col">Nombre</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Apellido Paterno</th>
                  <th scope="col">Apellido Materno</th>
                  <th scope="col">Edad</th>
                  <th scope="col">Correo Electronico</th>
                  <th scope="col">Telefono</th>
                  <th scope="col">Tipo de Usuario</th>
                </tr>
              </thead>
              <tbody>
                
                <?php 
                  $Consulta->MostrarUsuActu();
                 ?>
                
              </tbody>
            </table>
            <div class="alert-warning col-4" id="mensajeActu"><i class="fas fa-exclamation-triangle" style="color: orange;"></i></div>
              <div class="text-center">
                <button type="submit" class="btn btn-success mt-4" name="Actualizars">Actualizar</button>
              </div>
            </form>
          </div>
        </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <h1 class="mt-4" id="Elim"></h1>
      <div class="row">
        <div class="card" style="width: 30rem;">
          <div class="card-body">
            <h5 class="card-title">Eliminar Usuario</h5>
            <form role="form" method="POST" action="" id="Eliminacion">
              <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user-minus" style="color: #FF3535;"></i></span>
                    </div>
                    <select class="custom-select" name="Elim_Usu">
                      <option selected value="defaul">Seleccione un Usuario</option>
                        <?php 
                        $Consulta->MostrarUsuName();
                        $Consulta->MostrarUsuAdminName();
                         ?>
                    </select>
                  </div>
                </div>
                <div class="alert-warning" id="mensajeEli"><i class="fas fa-exclamation-triangle" style="color: orange;"></i> <?php 
                  if(isset($MensCorreoUsu)){
                    echo $MensCorreoUsu;
                  }else if(isset($MensUsuario)){
                    echo $MensUsuario;
                  }else if(isset($MensCorreo)){
                    echo $MensCorreo;
                  }
                ?> </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4" name="Eliminar">Eliminar Usuario</button>
                  <button type="reset" class="btn btn-primary mt-4">Limpiar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="services">
    <div id="container" style="height: 400px"></div>

  </section>
  <?php }else{?>
  <header class="bg-primary text-white" style="background-image: url(../Imgs/Fondo.jpg); background-attachment: local; background-size: cover; background-repeat: no-repeat; height: 45em;">
    <div class="container text-center">
      <h1 class="mt-4">Inventario</h1>
      <p class="lead">Juegos</p>
    </div>
  </header>
  <section id="about">
    <div class="container">
      <div class="row">
        <?php foreach ($Consulta->ConsInvetJuegos() as $row):?>
        <div class="col-3">
          <div class="card" style="width: 18rem;">
            <img src="../<?php echo $row['Img_Represent'] ?>" class="card-img-top" alt="<?php echo $row['Nombre']?>" width="100px" height="350px">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['Nombre'] ?></h5>
              <p class="card-text">Video Juego</p>
            </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Precio a la Venta $<?php echo $row['Precio'] ?></li>
                <li class="list-group-item">Total de Piesaz: <?php echo $row['Pz_inventario'] ?></li>
              </ul>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <section id="services" class="bg-light">
    <div class="container">
      <h1 class="mt-4">Gadgets</h1>
      <div class="row">
          <?php foreach ($Consulta->ConsInvetGadgets() as $row):?>
            <div class="col-3">
              <div class="card" style="width: 18rem;">
                <img src="../<?php echo $row['Img_Represent'] ?>" class="card-img-top" alt="<?php echo $row['Nombre']?>" width="100px" height="250px">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $row['Nombre'] ?></h5>
                  <p class="card-text">Video Juego</p>
                </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Precio a la Venta $<?php echo $row['Precio'] ?></li>
                    <li class="list-group-item">Total de Piesaz: <?php echo $row['Pz_inventario'] ?></li>
                  </ul>
              </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
  </section>
  <?php } ?>
  <!-- Bootstrap core JavaScript -->
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/jquery/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/scrolling-nav.js"></script>
  <script src="../js/Ajax.js"></script>
  <script type="text/javascript">
    var mensajeActu = $("#mensajeActu");
    mensajeActu.hide();
    $("#Actualizar").on("submit", function(e){
    //Evitamos que se envíe por defecto
    e.preventDefault();
    var formData = new FormData(document.getElementById("Actualizar"));
    $.ajax({
        url: "../Controlador/Actualizar_Eliminar_Datos.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        }).done(function(echo){
          mensajeActu.html(echo);
          mensajeActu.slideDown(500);
    });
});

  </script>
  <script src="../code/highcharts.js"></script>
<script src="../code/highcharts-3d.js"></script>
<script src="../code/modules/exporting.js"></script>
<script src="../code/modules/export-data.js"></script>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Resultados de la Evaluacion que se hizo por parte de los evaluadores'
    },
    subtitle: {
        text: 'Evaluacion'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Delivered amount',
        data: [
          <?php $Consulta->Selectresul0();?>,
          <?php $Consulta->Selectresul1();?>,
          <?php $Consulta->Selectresul2();?>,
          <?php $Consulta->Selectresul3();?>,
          <?php $Consulta->Selectresul4();?>
        ]
    }]
});
    </script>
</body>

</html>
