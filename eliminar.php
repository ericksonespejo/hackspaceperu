<?php
// Variables para la conexión a la base de Datos
$hostDB = 'localhost:3306';
$nombreDB = 'biblioteca';
$usuarioDB = 'admin';
$contrasenyaDB = 'der45der';
// realizamos la conexión con la base de Datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
//obtenemos el codigo del libro a eliminar
$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : null;
// preparamos el DELETE
$miConsulta = $miPDO->prepare('DELETE FROM libros WHERE codigo = :codigo');
// Ejecutamos la consulta
$miConsulta->execute([
    codigo => $codigo
]);
header('Location: index.php');
 ?>
