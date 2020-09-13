<?php
// Variables para la conexión a la base de Datos
$hostDB = 'localhost:3306';
$nombreDB = 'biblioteca';
$usuarioDB = 'admin';
$contrasenyaDB = 'der45der';
// Asignamos nuestras variables
$codigo = isset($_REQUEST['codigo']) ? $_REQUEST['codigo'] : null;
$autor = isset($_REQUEST['autor']) ? $_REQUEST['autor'] : null;
$titulo = isset($_REQUEST['titulo']) ? $_REQUEST['titulo'] : null;
$anio = isset($_REQUEST['anio']) ? $_REQUEST['anio'] : null;
$editorial = isset($_REQUEST['editorial']) ? $_REQUEST['editorial'] : null;
$resumen = isset($_REQUEST['resumen']) ? $_REQUEST['resumen'] : null;
// realizamos la conexión con la base de Datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Comprobamos si se entan enviando datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Prepare UPDATE
  $actualizacion= $miPDO->prepare('UPDATE libro SET autor = :autor, titulo = :titulo, anio = :anio, editorial = :editorial, resumen = :resumen WHERE codigo = :codigo');
  //ejecutamos la actualizacion
  $actualizacion->execute(
    [
      'codigo'-> $codigo,
      'autor' -> $autor,
      'titulo' -> $titulo,
      'anio' -> $anio,
      'editotial' -> $editorial,
      'resumen' -> $resumen
    ]
  );
  // se redirecciona al index
  header('Location: index.php');
}else {
    //preparamos el select.
    $miConsulta = $miPDO->prepare('SELECT * FROM libro WHERE codigo = :codigo;');
    // ejecutamos $miConsulta
    $miConsulta->execute(
        [
            codigo => $codigo
        ]
    );
}
  $libro = $miConsulta->fetch();
 ?>
 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Editar el CRUD</title>
     <link rel="stylesheet" href="css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   </head>
   <body>
     <div class="container">
       <div class="row">
         <div class="center-align ">
            <h3>Editar libro</h3>
         </div>
       </div>
     </div>
     <div class="container">
                <form class="col s12" method="POST" action=""> 
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="autor" type="text" name="autor" class="validate" value="<?= $libro['autor'] ?>">
                      <label for="autor">Autor </label>
                    </div>
                    <div class="input-field col s6">
                      <input id="titulo" type="text" name="titulo" value="<?= $libro['titulo'] ?>">
                      <label for="titulo">Titulo</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s3">
                      <input  id="anio" type="text" name="anio" class="validate" value="<?= $libro['anio'] ?>">
                      <label for="anio">Año </label>
                    </div>
                    <div class="input-field col s9">
                      <input  id="editorial" type="text" name="editorial" class="validate" value="<?= $libro['editorial'] ?>">
                      <label for="editorial">Editorial</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="resumen" type="text" name="resumen" class="validate" value="<?= $libro['resumen'] ?>">
                      <label for="resumen">Resumen</label>
                    </div>
                  </div>
                  <!-- BOTON ENVIAR -->
                  <input type="hidden" name="codigo" value="<?= $codigo ?>">
                  <button class="btn waves-effect waves-light" type="submit">Editar
                   <i class="material-icons right">send</i>
                 </button>
                 <a href="index.php" class="btn waves-effect waves-light">Cancelar <i class="material-icons right">arrow_back</i></a>


                </button>
                </form>
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
