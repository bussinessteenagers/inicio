<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "Formulario";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <style>
        body {
            font-family: Cooper Black;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5c2db;
        }
        input {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 94%;}

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 350px;
            width: 100%;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
    <head>
        <body>
        <div class="form-container">
        <h1>Formulario de Contacto</h1>
        <form action="#"   name= "Formulario"  method="post">  
   
        <input type="text" name="Nombre" placeholder="Nombre" required>

        <input type="email" name="Correo" placeholder="Correo electrónico" required>

        <input type="text" name="Telefono" placeholder="Teléfono" required>

        <input type="submit" name="envio">
</form>
    </div>
    <br>
    <p><button align="center" onclick="window.location.href='nuestrapagina web.html'" ><img src="atras.png" width="30"></button></p>
        </body>


<?php
 if(isset($_POST['envio'])){
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Numero = $_POST['Telefono'];
  
    $sql = "INSERT INTO datos VALUES ('$Nombre', '$Correo', '$Numero','')";
    $inseto = mysqli_query ($enlace, $sql);

 }
?>