# hackspaceperu
Ruta de Aprendisaje para la primera semana

Apreder Git y GitHub para poder realizar los controles de versión de cada progreso que voy haciendo
  - Git Init - para iniciar un nuevo repositorio o proyecto local
  - git clone <repo url> Clona un proyecto de git en la carpeta NombreProyecto.
  - Git add + path
  - Git add -A Agrega al repositorio TODOS los archivos y carpetas que estén en nuestro proyecto, los cuales GIT no está siguiendo.
  - Git add . / Git add all Agrega al repositorio todos los archivos.
  - Git commit -m "mensaje" + archivos Hace commit a los archivos que indiquemos, de esta manera quedan guardados nuestras modificaciones.
  - Git commit -am "mensaje" Hace commit de los archivos que han sido modificados y GIT los está siguiendo.
  - Git checkout -b NombreDeBranch Crea un nuevo branch y automaticamente GIT se cambia al branch creado, clonando el branch desde donde ejecutamos el comando.
  - Git branch Nos muestra una lista de los branches que existen en nuestro repositorio.
  - Git checkout NombreDeBranch Sirve para moverse entre branches, en este caso vamos al branch que indicamos en el comando.
  - Git merge NombreDeBranch Hace un merge entre dos branches, en este caso la dirección del merge sería entre el branch que indiquemos en el comando, y el branch donde estémos ubicados.
  - Git status Nos indica el estado del repositorio, por ejemplo cuales están modificados, cuales no están siendo seguidos por GIT, entre otras características.
  - Git push origin NombreDeBranch Luego de que hicimos un git commit, si estamos trabajando remotamente, este comando va a subir los archivos al repositorio remoto, específicamente al branch que indiquemos.
  - Git pull origin NombreDeBranch Hace una actualización en nuestro branch local, desde un branch remoto que indicamos en el comando.
  - Git push para enviar lo cambios / tendremos que colocar nuestro nombre de usuario y clave

Aprender lo basico de Base de Datos para poder realizar las consultas básicas desde PHP
  - CREATE DATABASE (para crear una base de datos en mariadb)
  - DROP DATABASE  (para eliminar una base de datos)
  - CREATE TABLE (para crear tablas en una base de datos)
  - ALTER TABLE  (comando para alterar una tabla existente)
  - DROP TABLE (Comando usado para eliminar una tabla existente)

 Manipulación de datos:
  - SELECT se usa para leer o seleccionar datos
  - INSERT se usa para insertar o añadir nuevos datos
  - UPDATE se unsa para cambiar o actualizar datos existentes
  - DELETE se usa para eliminar datos existente
  - REPLACE es usado para cambiar o reemplazar datos nuevos o que ya existen
  - TRUNCATE comando para eliminar o vaciar la plantilla.

Comandos terminal:
  - mariadb -u "usadio" -p "clave"
  - show databases, para listar o mostrar todas las bases de datos asosicado a un usuario
  - use "nombre de la base de datos"; (sin las comillas).
  - show tables; #para ver todas las tablas de la base de datos.
  - describe "nombre de la tabla"; #para ver todas las filas que contiene la tabla nombrada
  - grant all privileges on 'nombre de la base de datos'.* to usuario@'%' identified by 'clave', para asignar la base de datos a un usuario.

Aprender PHP
  - Arrays: de una dimensión y dos dimensiones;  crear modificar y eliminar
  - Bucles: recorrer arrays con Bucles anidados
  - Condicionales: if y switch
  - Formularios
  - Funciones
  - Ficheros
  - Sesiones
  - Cookies
  - Objetos
  - CRUD (proyecto final)
