<?php 

    session_start();
    include("conexion.php");
    date_default_timezone_set('America/La_Paz');
    include("conexion.php");

    if (isset($_POST['fecha'])){
      $fecha = $_POST['fecha'];
    } else{
      $fecha = date('Y-m-d');
    }
    
    function LlenarLista(){
      include("conexion.php");
      $sql = "SELECT Reserva.cliente, DATE_FORMAT(fecha, '%k:%i') horaR, DATE_FORMAT(fecha, '%Y - %m - %d') fechaR from Reserva
      inner join Cliente on Cliente.Codigo = Reserva.cliente";
      $resultado = mysqli_query($conexion, $sql);

      $listaHora; 
      $i = 0;
      while( $fila = $resultado->fetch_assoc()){
        $listaHora[$i] = $fila['fechaR'].$fila['horaR'];
        $i++;
      }
      return $listaHora;
    }

    function Estado($horaObtenida, $fechaActual, $listaHora){
      for($i = 0; $i < count($listaHora); $i++){
          if(str_replace(" ", "", $listaHora[$i]) == $fechaActual) return true;
      }
      return false;
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/estiloListadoReservas.css">
  <title>Listar</title>
</head>
<body>
  <form action="ListarReservas.php" method="POST"> 
    <div>
      <label for="">Seleccione la Fecha:
        <input type="date" name="fecha">
      </label>
    </div>
    <div>
      <label for="">
        <input type="submit" value="Ver Fecha" class="enviar">
      </label>
    </div>
  </form>
  <table>
    <caption> <?php 
      echo $fecha; 
    ?></caption>
    <thead>
      <th>Nro</th>
      <th>Hora</th>
      <th>Opciones</th>
    </thead>
    <tbody>
      <?php 
      $Lista = LlenarLista();
      $mediaHora = 30;
      $horaObtenida = ""; 
      $cont = 1;
      for($hora = 8; $hora <= 18; $hora++){
          ?>
          <tr>
            <td><?php echo $cont; ?></td>
            <td><?php echo $hora.":".$mediaHora ?></td>
            <?php  
                $horaObtenida = $hora.":".$mediaHora;
                $fechaActual = $fecha.$hora.":".$mediaHora;
                if(Estado($horaObtenida, $fechaActual, $Lista)){
                  ?>
                    <td><a href="#" class="reservado">Reservado</a></td>
                  <?php 
                } else {
                  ?>
                    <td><a href="Reservar.php?fecha=<?php echo $fecha; ?> ,hora=<?php echo $horaObtenida?>" class="reservar"> Reservar </a></td>
                  <?php 
                }
          $cont++;
      }
      ?>
    </tbody>
  </table>
</body>
</html>
