<?php
// Variables para la conexión a la base de Datos
$hostDB = 'localhost:3306';
$nombreDB = 'biblioteca';
$usuarioDB = 'admin';
$contrasenyaDB = 'der45der';
// realizamos la conexión con la base de Datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// preparamos el SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM libro;');
// Ejecutamos la consulta
$miConsulta->execute();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Leemos el CRUD</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="section">
      <h3 class="center-align">Mostrando los libros</h3>
        <div class="row">
            <div class="col s12">

              <table class="highlight responsive-table centered">
                    <thead>
                      <tr>
                          <th>Código</th>
                          <th>Autor</th>
                          <th>Título</th>
                          <th>Año</th>
                          <th>Editorial</th>
                          <th>Resumen</th>
                      </tr>
                    </thead>
                      <tbody>
                      <?php foreach ($miConsulta as $key => $value): ?>
                      <tr>
                        <td class="bordes-iz-y-der"><?php echo $value['codigo'] ?></td>
                        <td class="bordes-iz-y-der"><?php echo $value['autor'] ?></td>
                        <td class="bordes-iz-y-der"><?php echo $value['titulo'] ?></td>
                        <td class="bordes-iz-y-der"><?php echo $value['anio'] ?></td>
                        <td class="bordes-iz-y-der"><?php echo $value['editorial'] ?></td>
                        <td class="bordes-iz-y-der"><?php echo $value['resumen'] ?></td>
                        <td><a class="waves-effect teal darken-1 btn" href="editar.php?codigo=<?php echo $value['codigo'] ?>"><i class="material-icons left">edit</i></a></td>
                        <td><a class="waves-effect  red darken-3 btn " href="eliminar.php?codigo=<?php echo $value['codigo'] ?>"><i class="material-icons ">delete</i> </a></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

            </div>
        </div>
        <div class="fixed-action-btn">
          <a class="btn-floating btn-large red">
            <i class="large material-icons">dehaze</i>
          </a>
          <ul>
            <li><a class="btn-floating blue" href="crear.php"> <i class="material-icons">add</i></a></li>
          </ul>
        </div>

    </div>
    <script type="text/javascript" src="js/materialize.min.js"> </script>
    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
       var elems = document.querySelectorAll('.fixed-action-btn');
       var instances = M.FloatingActionButton.init(elems);
      });

      // Or with jQuery

      $(document).ready(function(){
       $('.fixed-action-btn').floatingActionButton();
      });
    </script>
  </body>
</html>
