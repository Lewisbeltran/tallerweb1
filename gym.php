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
      <h1 class="text-center">IMC</h1>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-4">
              <form class="mt-10" action="gym.php" method="POST">
                    <div class="row">
                            <div class="col">
                        <input type="number" class="form-control" placeholder="peso" name="peso">
                        </div>
                             <div class="col">
                        <input type="number" class="form-control" placeholder="altura" name="altura">
                        </div>
                            
                    </div>
                        <button type="submit" class="btn btn-primary my-1 mt-5" name="calcular
                        ">Submit</button>
                    </form>

                    <?php ?>
                        <h4>
                                <?php 
                                    
                                    $peso=$_POST["peso"];
                                    $altura=$_POST["altura"];

                                    $imc=$peso/($altura*$altura);
                                    echo "<br><b>Tu IMC es:</b> ".$IMC;

                                    if($imc<18.5){
                                        $imc="peso insuficiente";
                                    }

                                    else if($imc>=18.5 && $imc<24.9){
                                        $imc="Normo peso";
                                    }
                                    else if($imc>=25 && $imc<26.9){
                                        $imc="sobrepeso grado 1";
                                    }
                                    else if($imc>=27 && $imc<29.9){
                                        $imc="sobrepeso grado 2(preobesida)";
                                    }
                                    else if($imc>=30 && $imc<34.9){
                                        $imc="obesidad tipo 1";
                                    }
                                    else if($imc>=35 && $imc<39.9){
                                        $imc="obesidad tipo 2";
                                    }
                                    else if($imc>=40 && $imc<44.9){
                                        $imc="obesidad tipo 3(morbida)";
                                    }
                                    else if($imc>=40 && $imc<44.9){
                                        $imc="obesidad tipo 4(extrema)";
                                    }

                                    echo "imc es de = ". $imc;

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