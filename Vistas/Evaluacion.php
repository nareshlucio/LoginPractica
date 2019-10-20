<?php 
  include '../Controlador/Consultas.php';
  include '../Controlador/User.php';
  include '../Controlador/SesionUsu.php';
  $Sesion = new SesionUsuario();
  $Usuario = new User();
  $Consulta = new Consultas();
  $Usuario->setUsuario($Sesion->getCurrentUser());
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <title>Evaluacion Heuristica</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../css/css/all.css">
</head>

<body class="bg-info">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="../index.php">
          <img src="../Imgs/Logos.png" width="50px" height="50px" />
        </a>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Evaluacion Heuristica</h1>
              <p class="text-lead text-light"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-light shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Verifique a que seccion de la pagina quiere evaluar</small>
              </div>
              <form role="form" method="POST" action="" id="evaluacion" name="frmeva">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="Usuario" class="form-control" placeholder="Usuario" type="text" id="Usu" value="<?php echo $Usuario->usuario;?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input name="Nombre" class="form-control" placeholder="Nombres" type="text" id="Nombre" readonly value="<?php echo $Usuario->nombre;?>">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <select class="custom-select" name="Seccion">
                      <option selected value="defaul">Seleccione la Seccion a Evaluar</option>
                      <option value="Login">Login</option>
                      <option value="Inicio">Inicio</option>
                      <option value="Registro de Usuarios">Registro de Usuarios</option>
                      <option value="Inventario">Inventario</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <select class="custom-select" name="Preguntas">
                      <option selected value="defaul">Seleccione Pregunta</option>
                      <option value="¿Es Cada icono individual un miembro armonioso dentro de una familia de iconos?">¿Es Cada icono individual un miembro armonioso dentro de una familia de iconos?</option>
                      <option value="¿Se ha Evitado el detalle excesivo en el diseño de iconos?">¿Se ha Evitado el detalle excesivo en el diseño de iconos?</option>
                      <option value="¿Se ha usado el color con discrecion?">¿Se ha usado el color con discrecion?</option>
                      <option value="¿Pueden los usuarios elegir entre entre la presentacion de informacion en forma de texto o con iconos?">¿Pueden los usuarios elegir entre entre la presentacion de informacion en forma de texto o con iconos?</option>
                      <option value="¿Cada parte de la interfaz comienza con un titulo o encabezamiento que describa el contenido de la pantalla?">¿Cada parte de la interfaz comienza con un titulo o encabezamiento que describa el contenido de la pantalla?</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <textarea class="form-control" rows="3" name="Observacion" placeholder="Escriba sus Observaciones con respecto a la seccion que haya escogido"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <textarea class="form-control" rows="3" name="Respuesta" placeholder="Escriba las Posibles Soluciones que se pueden realizar para mejorar el sistema"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <select class="custom-select" name="RespuestaE">
                      <option selected value="defaul">Seleccione la Seccion a Evaluar</option>
                      <option value="0">Nunca</option>
                      <option value="1">Casi Nunca</option>
                      <option value="2">A veces</option>
                      <option value="3">Casi siempre</option>
                      <option value="4">Siempre</option>
                    </select>
                  </div>
                </div>
                <div class="alert-warning" id="alerta"><i class="fas fa-exclamation-triangle" style="color: orange;"></i> <?php 
                  if(isset($MensCorreoUsu)){
                    echo $MensCorreoUsu;
                  }else if(isset($MensUsuario)){
                    echo $MensUsuario;
                  }else if(isset($MensCorreo)){
                    echo $MensCorreo;
                  }
                ?> </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4" onclick="eva();" name="registrar">Evaluar</button>
                  <button type="reset" class="btn btn-primary mt-4">Limpiar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6 text-left">
              <a href="../index.php" class="text-light" style="font-size: 18px;"><small>Regresar al Inicio</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/ajax.js"></script>
<script type="text/javascript">
  var mensajeAlerta = $("#alerta");
mensajeAlerta.hide();
    $("#evaluacion").on("submit", function(e){
    //Evitamos que se envíe por defecto
    e.preventDefault();
    var formData = new FormData(document.getElementById("evaluacion"));
    $.ajax({
        url: "../Controlador/RegEva.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        }).done(function(echo){
          mensajeAlerta.html(echo);
          mensajeAlerta.slideDown(500);
    });
});
</script>
</script>
</body>
</html>