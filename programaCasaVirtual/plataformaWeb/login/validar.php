<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//Validación de datos
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  //Si los datos son válidos, nos llevara a esta ruta 
    header("location:../programaCasa/ProgramadeCasa.html");

}else{
    ?>
    <?php
    include("loggin.html");

  ?>
  <!-- Si los datos no son válidos, se arrogará el siguiente mensaje-->
  <h1 class="bad">Usuario o contraseña incorrecta</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
