<?php
  //conectar al servidor
  $conectar=mysql_connect('localhost','root','');
  //verificar si la conexion es correcta
  if(!$conectar){
    echo "No se pudo conectar con el servidor";
  }else{
    $base=mysql_select_db('estudio_contable');
    if(!$base){
      echo "NO SE ENCONTRÓ LA DB";
    }
  }

  //recuperar variables del formulario
  $nombre=$_POST['nombre-cliente'];
  $apellido=$_POST['ap-cliente'];
  $correo=$_POST['email-cliente'];
  $password=$_POST['pass-cliente'];


  //hacemos sentencia de sql
  $sql="INSERT INTO registro_persona values('$nombre','$apellido','$correo','$password')";

  //ejecutar sentencia
  $ejecutar=mysql_query($sql);

  //verificar ejecución
  if(!$ejecutar){
    echo"Hubo un error." ;
  }else{
    echo"datos guardados correctamente<br><a href='index.html'>Volver</a>";
  }
?>