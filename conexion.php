

<?php
$con =new mysqli("localhost", "root", "","dentista");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);
		
 //DATE_FORMAT(fecha,'%e de %M')  fechaN
// DATE_FORMAT(fechaD,'%e de %M') fechaC
 $sql="SELECT DATE_FORMAT(fechaD,'%k:%i') horaN   from dias";
$resultado = mysqli_query($con,$sql);


?>


