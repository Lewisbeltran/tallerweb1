<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="imagenes/iconos/css/fontello.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estylos.css">
  <link rel="stylesheet" href="css/keyframes.css">
  <link rel="stylesheet" href="css/banner.css">
  <div>
    <header>
      <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="#">Wed 1</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="taller.php">INICIO <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="formul.html">CONTÁCTENOS</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  OPCIONES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="punto1.php">Punto 1</a>
                  <a class="dropdown-item" href="gym.php">IMC</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="verdes.html">salario</a>
                </div>
              </li>
              
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Buscar">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>
      </div>
      <div class="centro_cont_banner">
        <div class="centro_sombra">
          <h1>zonas verdes</h1>
       
  </header>
  <main class="mt-7">
      <h1 class="text-center">Calculadora</h1>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-4">
              <form class="mt-10" action="punto1.php" method="POST">
                    <div class="row">
                            <div class="col">
                        <input type="number" class="form-control" placeholder="producto1" name="producto1">
                        </div>
                             <div class="col">
                        <input type="number" class="form-control" placeholder="producto2" name="producto2">
                        </div>
                            <div class="col">
                                 <select class="form-control"  name="operacion">
                                    <option value="1">suma</option>
                                    <option value="2">resta</option>
                                    <option value="3">multiplicacion</option>
                                    <option value="4">divicion</option>
                                   
                                    </select>
                             </div>
                    </div>
                        <button type="submit" class="btn btn-primary my-1 mt-5" name="botonEnvio">Submit</button>
                    </form>

                    <?php ?>
                        <h4>
                                <?php 
                                    $producto1=$_POST["producto1"];
                                    $producto2=$_POST["producto2"];
                                    $operacion=$_POST["operacion"];
                                    echo($operacion);
                                    $resultado="";
                                   if ($operacion=="1"){
                                        $resultado = $producto1 + $producto1;
                                    }
                                    if ($operacion=="2"){
                                        $resultado = $producto1 - $producto1;
                                    }
                                    if ($operacion=="3"){
                                        $resultado = $producto1 * $producto1;
                                    }
                                    if ($operacion=="4"){
                                        $resultado = $producto1 / $producto1;
                                    }

                                    echo "resultado  = " . $resultado;
                                    //switch($operacion){
                                    //    case 1 : 
                                     //       $resultado = $producto1 + $producto2;
                                     //   case 2 : 
                                     //       $operacion = $producto1 - $producto2;
                                     //   case 3 : 
                                    //        $operacion=  $producto1 * $producto2;
                                     //   case 4 : 
                                     //       $operacion = $producto1 / $producto2;
                                   // }
                                ?>
                          </h4>
                            <?php?>

                      
                   

              </div>
          </div>
      </div>
  </main>
  <footer>
    <div class="centro_cont_footer">
        <div class="container">  
                <div class="col-md-6">
                    <h2>Sobre Nosotros</h2>
                    <p>Cra 74 No 48-37 Medellín Antioquia Colombia. Tel. 2305952. Política de Protección de Datos</p>
                    <a href=""><i class="icon-facebook"></i></a>
                    <a href=""><i class="icon-twitter"></i></a>
                    <a href=""><i class="icon-mail"></i></a>
                    <a href=""><i class="icon-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>