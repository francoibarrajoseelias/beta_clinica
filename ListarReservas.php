<?php 
include('conexion.php');


//  consulta a la tabla Dia
$sqlDia = "SELECT codigoD, DATE_FORMAT(fechaD, '%k:%i') horaD from dias";
$resultadoDia = mysqli_query($con, $sqlDia);

// Consulta anterior 
//$sql="SELECT codigoC, DATE_FORMAT(fechaD, '%W') diaN, DATE_FORMAT(fechaD,'%k:%i') horaD ,estadoD  from dias";
//$resultado = mysqli_query($con,$sql);

//  Consulta a la tabla clientes
$slqCliente = "SELECT codigoC, DATE_FORMAT(fechaC, '%k:%i') horaC, estado FROM clientes";
$resultadoCliente = mysqli_query($con, $slqCliente);

//consulta para sacar el dia
$sqlHoy = "SELECT codigoC, DATE_FORMAT(fechaC, '%a - %e - %c') diaSemana, estado FROM clientes WHERE codigoC=7";
$resultadoHoy = mysqli_query($con, $sqlHoy);
//$mostrarHoy = $resultadoHoy->fetch_assoc();
//echo $mostrarHoy['diaSemana'];

$datos_clientes = [];
$datos_dias = [];

while( $recorrido_clientes = $resultadoCliente->fetch_assoc() ){
  $temporal = $recorrido_clientes;
  array_push($datos_clientes, $temporal);
}

while( $recorrido_dias = $resultadoDia->fetch_assoc() ){
  $temporal_dias = $recorrido_dias;
  array_push($datos_dias, $temporal_dias);
}

// metodos

function comparar($hora,$datos_clientes){
  //echo "Hola"; 
  //var_dump($datos_clientes);
  for($j=0; $j < count($datos_clientes); $j++){
    if($hora == $datos_clientes[$j]['horaC']){
      //return true;
      return $hora;
    }
  }
  return false;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estiloListadoReservas.css">
  
  
  <title>Listar</title>
</head>
<body>
  <div class="container-fluid">
  <table>
    <caption class = "caption">
      <?php 
        $mostrarHoy = $resultadoHoy->fetch_assoc();
        echo $mostrarHoy['diaSemana'];   
      ?>
    </caption>
    <thead>
      <th>Nro</th>
      <!-- <th>Dia</th> -->
      <th>Hora</th>
      <th>Opciones</th>
    </thead>
    <tbody>
      <?php $contador=1; ?>

      <?php  for($i=0; $i < $resultadoDia->num_rows; $i++ ){ ?>
      <tr>
        <td><?php echo $contador; ?></td>
        
        <td><?php echo $datos_dias[$i]['horaD']; ?></td>
      
        <td>  <!-- opciones  -->
            <?php 
            if( $estado_reserva = comparar($datos_dias[$i]['horaD'],$datos_clientes)){
              //echo 'estado: '.$estado_reserva;
              echo '<button class="btn btn-primary reservado">reservado</button>';
            }else{
              echo '<button class="btn btn-delete libre">libre</button>';
            }
          ?>
        </td>
        <?php   $contador++; ?> 

      </tr>
      <?php  } ?>

    </tbody>
    </div>
  </table>
</body>
</html>