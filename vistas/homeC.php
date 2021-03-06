<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="vistas/theme.css" type="text/css">
</head>

<body style=" background-image: linear-gradient(to right top, #242424, #23222b, #202032, #1c1e39, #151c40, #122048, #0c2450, #002958, #003561, #00406a, #004c71, #005778);" >
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-lg py-2">
    <div class="container"> <a class="navbar-brand text-primary" href="#">
        <i class="fa fa-car text-light"></i>
        <b class="text-light"> CARPOOL UNI</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar5">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item text-light"> <a class="nav-link" href="#">Perfil</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="mt-5 pt-1" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mr-auto order-2 order-md-1"> <img class="img-fluid d-block" src="images/location.png" style=""> </div>
        <div class="px-md-5 d-flex flex-column align-items-start justify-content-center col-md-7 order-1 order-md-2 p-3" style="">
          <form class="form-inline">
            <section> <h1 class="mt-3 text-light"> Bienvenido <?php echo $user->getNombre(); ?> </h1> </section>
            <div class="input-group">
              <input type="text" class="form-control shadow-lg form-control-lg pr-5 px-5 text-left text-capitalize" id="inlineFormInputGroup" name="busqueda
busqueda" placeholder="Buscar" required="">
              <div class="input-group-append"><button class="btn btn-dark" type="button" style="  background-image: linear-gradient(to left, #ff6400, #fbff00); background-position: top left;  background-size: 100%;  background-repeat: repeat;"><i class="fa fa-search"></i> <a href="puntsBusc.html"></a> </button></div>
            </div>
          </form>
          <h1 style="" class="mt-3 text-light"> Ingrese su Ubicacion</h1>
          <p class="mb-3 lead text-light">Esto permitira poder conocer su punto de partida, logrando asi hacer una busqueda mas detallada que permita encontrar una opcion adecuada a usted.</p><button class="btn btn-dark text-light" type="button" style="  background-image: linear-gradient(to left, #ff6400, #fbff00); background-position: top left;  background-size: 100%;  background-repeat: repeat;"> <a  href="includes/logout.php">Cerrar Sesion</a> </button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>

</html>