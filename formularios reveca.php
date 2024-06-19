
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "Formulario";

// Conectar a la base de datos
$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

// Verificar la conexión
if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['envio'])) {
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Numero = $_POST['Telefono'];
  

    // Consulta para insertar datos en la base de datos
    $sql = "INSERT INTO datos VALUES ('$Nombre', '$Correo', '$Numero')";
  $inseto = mysqli_query ($enlace, $sql);
   
}

// Cerrar la conexión
mysqli_close($enlace);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuario</title>
    <link rel="stylesheet" href="styles.css">
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
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
</head>
<body>
<div class="form-container">
        <h1>Formulario de Contacto</h1>
        <form action="formularios.php" method="post">
        <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="Nombre" placeholder="Nombre" required>
                <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="Correo" placeholder="Correo electrónico" required>
                <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="Telefono" placeholder="Teléfono" required>
                <button type="submit" name="envio">Enviar</button>
                
            </form>
    </div>
</body>
</html>



