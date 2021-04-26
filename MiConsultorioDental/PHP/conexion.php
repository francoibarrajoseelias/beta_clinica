<?php 
  $conexion = new mysqli("localhost", "root", "", "BD_Dental") ; /*Para conectarnos a la base de Datos */
  if($conexion->connect_error) /* Pregutamos que si hay algun error en la   conexion a la BD*/
    die("conexion fallida".$conexion->connect_error); // die termina la conexion y Si hay error mostramos un mensaje
?>