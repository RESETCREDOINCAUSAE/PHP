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
                <h1 style="text-align: center;">Ingresar horas y calcular la cantidad en: <strong>segundos</strong></h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="" method ="GET">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="">Ingresar Horas:</label>
                                    <input type="number" class="form-control" name="horas">
                                </div>
                                <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                      </div>
                  </form>
                  <div class="alert alert-success">
                  <?php
          if (isset($_GET['horas'])) {
            $horas = $_GET['horas'];
            $segundos = floor($horas* 3600);
           
          
            
         
           
        
                        print('<p>Segundos: '. $segundos. '</p>') ;
                       
                        
          }
          ?>
                  </div>
                  <p class="text-center"><a href="../index.php">Ir al inicio.</a></p>
              </div>
          </div>
      </div>


</body>
</html>
