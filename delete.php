<?php
  include("conexion.php");
  $conn = conectar();
  $codigo_estudiante = $_GET['id'];
  $sql = "DELETE FROM alumnos WHERE codigo_estudiante='$codigo_estudiante'";
  $query = mysqli_query($conn, $sql);
  if($query) {
    Header("Location: index.php");
  }
?>