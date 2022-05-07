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
                <h1 style="text-align: center;">Ingresar fecha desde , fecha hasta , calcular los días de diferencia.</h1>
              </div>
              <div class="col-md-8 col-md-offset-2">
                  <form action="" method ="GET">
                      <div class="panel panel-primary">
                            <div class="panel-body">
                            <h1> FECHA DESDE </h1>
                                <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Ingresar Año:</label>
                                    <input type="number" min="0" max="3000" class="form-control" name="año1">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="">Ingresar mes</label>
                                    <input type="number" min="1" max="12" class="form-control" name="mes1">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="">Ingresar dia</label>
                                    <input type="number" min="1" max="31" class="form-control" name="dia1">
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="panel panel-primary">
                            <div class="panel-body">
                            <h1> FECHA HASTA </h1>
                                <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Ingresar Año:</label>
                                    <input type="number" min="0" max="3000" class="form-control" name="año2">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="">Ingresar mes</label>
                                    <input type="number" min="1" max="12" class="form-control" name="mes2">
                                    </div>
                                    <div class="col-md-3">
                                    <label for="">Ingresar dia</label>
                                    <input type="number" min="1" max="31" class="form-control" name="dia2">
                                    </div>
                                </div>
                    <div>
                        <br>
                        <br>
                    <button class="btn btn-primary pull-right">Enviar</button>
                            </div>
                            </div>
                            <p class="text-center"> <a href="index.php"> INICIO </a> </p>
                  </form>
                  <div class="alert alert-success">
                  <?php
                  $año1 = $_GET['año1'];
                  $mes1 = $_GET['mes1'];
                  $dia1 = $_GET['dia1'];
                  $año2 = $_GET['año2'];
                  $mes2 = $_GET['mes2'];
                  $dia2 = $_GET['dia2'];
 $firstDate  = new DateTime("$año1-$mes1-$dia1");
 $secondDate = new DateTime("$año2-$mes2-$dia2");
 $intvl = $firstDate->diff($secondDate);
 $respuesta = (($intvl->y) *(365) + (($intvl->m)*(30)) + ($intvl->d) ) ." dias"; 
 $bisiesto = $respuesta/1460 ;
   if ($bisiesto === 1)  {
$respuesta = $respuesta +1 ;
  }
elseif ($bisiesto === 2)   {
    $respuesta = $respuesta +2 ;
  }
elseif ($bisiesto === 3)   {
    $respuesta = $respuesta +3 ;
  }
elseif ($bisiesto === 4)   {
    $respuesta = $respuesta +4 ;
  }
 elseif ($bisiesto === 5)  {
    $respuesta = $respuesta +5 ;
  }
elseif ($bisiesto === 6)   {
    $respuesta = $respuesta +6 ;
  }
elseif ($bisiesto === 7)   {
    $respuesta = $respuesta +7 ;
  }
elseif ($bisiesto === 8)   {
    $respuesta = $respuesta +8 ;
  }
elseif ($bisiesto === 9)   {
    $respuesta = $respuesta +9 ;
  }
 elseif ($bisiesto === 10) {
    $respuesta = $respuesta +10 ;
  }
                                     
print("Los días de diferencia son: ".$respuesta);
 print("\n");
                                    
               ?>
</div>


</body>
</html>
