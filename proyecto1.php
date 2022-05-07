
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVIDAD 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" >
</head>
<body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h1>Ingresar segundos y calcular la cantidad en: <strong>Horas, Minutos y segundos</strong></h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="" method ="GET">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Ingresar Segundos:</label>
                                    <input type="number" class="form-control" name="segundos">
                                </div>
                                <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                      </div>
                  </form>
                  <div class="alert alert-success">
                  <?php
                  /* isset() devolverá false si prueba una variable que ha sido definida como null*/
                
                  /* Cálculos para hallar los resultados*/
          if (isset($_GET['segundos'])) {
              $x= 60;
            $segundos = $_GET['segundos'];
            $horas = floor($segundos/ ($x*$x));
            $minutos = floor(($segundos - ($horas * ($x*$x))) / $x);
            $segundos = $segundos - ($horas * ($x*$x)) - ($minutos * $x);
          
            
         /* floor Redondear fracciones hacia abajo  */
           
        
                        print('<p>Horas: '. $horas. '</p>') ;
                        print('<p>Minutos: '. $minutos. '</p>') ;
                        print('<p>Segundos: '. $segundos. '</p>') ;
                        /* Impresión de las variables*/
          }
          ?>
                  </div>
                  <p class="text-center"><a href="../index.php">Ir al inicio.</a></p>
              </div>
          </div>
      </div>


</body>
</html>
