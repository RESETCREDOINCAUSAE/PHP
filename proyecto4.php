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
<body>
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                <h1 style="text-align: center;">Ingresar fecha de nacimiento y decir cuantos años tiene</h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="" method ="GET">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                            <h1> FECHA DE NACIMIENTO </h1>
                                <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Ingresar Año:</label>
                                    <input type="number"  min="-3000" max="3000" class="form-control" name="año">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="">Ingresar mes</label>
                                    <input type="number"  min="01" max="12" class="form-control" name="mes">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="">Ingresar dia</label>
                                    <input type="number" min="01" max="31" class="form-control" name="dia">
                                    </div>
                                </div>
                            </div>
                      </div>
                      
                
                    <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                            </div>
                           
                  </form>
                  <div class="alert alert-success">
                  <?php
                     $año = $_GET['año'] ;
                     $mes = $_GET['mes'] ;
                     $dia = $_GET['dia'] ;
                     $Año = date('Y') ;
                     $Mes = date('m') ;
                     $Dia = date('d') ;
                     $edad = $Año - $año ;
                     if ($Mes < $mes ) {
                         $edad--;
                     }
                     elseif($Mes == $mes){
                          if($Dia < $dia){
                              $edad --;
                          }
                     }
                   if ($año == null or $mes== null or $dia == null )
                   {
                       return(0) ;
                   }
                   print("Su edad son ".$edad." años");
               
               ?>
                  </div>
                  </div>
                  <p class="text-center"><a href="../index.php">Ir al inicio.</a></p>
              </div>
          </div>
      </div>


</body>
</html>

                  