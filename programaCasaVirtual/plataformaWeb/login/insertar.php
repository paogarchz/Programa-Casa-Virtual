<html>

<head>
<title>Insertar registros</title>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>

<body>
<?php 
//Inserción de datos 
	$conexion = mysqli_connect("localhost","root","","login") or die ("Problemas en la conexion");
		mysqli_query($conexion,"insert into usuarios(usuario,contraseña)
			values('$_REQUEST[usuario_]','$_REQUEST[contraseña_]')") or die("Problemas en el slect").mysqli_error($conexion);

	mysqli_close($conexion);

//Script para dar de alta los datos
echo'<script type="text/javascript">
    alert("El usuario fue dado de alta");
    window.location.href = "loggin.html"; // Redirigir al inicio de sesión
    </script>';
?>