<?php
  include("conexion.php");
  $conn = conectar();
  $codigo_estudiante = $_POST['codigo_estudiante'];
  $ine = $_POST['ine'];
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];

  $sql = "UPDATE alumnos SET ine='$ine', nombre='$nombre', apellidos='$apellidos' WHERE codigo_estudiante='$codigo_estudiante'";
  $query = mysqli_query($conn, $sql);
  if($query) {
    Header("Location: index.php");
  } else {
    echo $query;
  }

?>