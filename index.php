<?php
// Variables para la conexión a la base de Datos
$hostDB = '127.0.0.1';
$nombreDB = 'biblioteca';
$usuarioDB = 'admin';
$contrasenyaDB = 'der45der';
// realizamos la conexión con la base de Datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// preparamos el SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM libros;');
// Ejecutamos la consulta
$miConsulta->execute();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leemos el CRUD</title>
    <link rel="stylesheet" href="css/bulma.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-6">
            <div class="field">
              <label class="label">Código</label>
              <div class="control">
                <input class="input" type="text" placeholder="Código">
              </div>
              <p class="help">This is a help text</p>
            </div>
          </div>
          <!-- autor -->
          <div class="col-6">
            <div class="field">
              <label class="label">Label</label>
              <div class="control">
                <input class="input" type="text" placeholder="Text input">
              </div>
              <p class="help">This is a help text</p>
            </div>
          </div>

      </div>
    </div>
    <!-- 2da -->
    <div class="container">
      <div class="row">
          <div class="col-6">
            <!-- titulo -->
            <div class="field">
              <label class="label">Label</label>
              <div class="control">
                <input class="input" type="text" placeholder="Text input">
              </div>
              <p class="help">This is a help text</p>
            </div>
          </div>
          <!-- año -->
          <div class="col-6">
            <div class="field">
              <label class="label">Label</label>
              <div class="control">
                <input class="input" type="text" placeholder="Text input">
              </div>
              <p class="help">This is a help text</p>
            </div>
          </div>

      </div>
    </div>
  </body>
</html>
