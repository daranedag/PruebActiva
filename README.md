# PruebActiva
#### Entregar Viernes 6 de Abril 2018

## Presentacion de la pagina y descripcion de los archivos
Se presenta la carpeta app donde se encuentra toda la estructura de archivos y carpetas utilizados
### config.php 
Contiene los datos de conexion para la base de datos Mysql. (Modificar en caso de necesitar probar con otra BD)
### session.php
Contiene las instrucciones para iniciar y mantener la sesión iniciada al cambiarse de pagina
### logout.php
Se encarga de cerrar la sesión y redirigir a la pagina de login
### login.php
Contiene las instrucciones y llamados para validar los datos ingresados por el usuario al iniciar sesión
### index.php
Pagina mostrada al momento de iniciar correctamente la sesión. En ella se despliega una tabla con todos los datos existentes en la tabla "datos"
### niveles.php
Pagina que muestra un combobox con las tiendas existentes. Al seleccionar alguna de las opciones y presionar el boton "Graficar" se actualiza el gráfico y la tabla con los datos obtenidos de la BD
### graficos.php
Archivo que contiene llamados a funciones para hacer el calculo de los datos solicitados (base, satisfaccion, insatisfaccion y neta)

### css/miCss.css
Contiene modificaciones al login.php

### img/
Carpeta que contiene los logos utilizados dentro de la pagina como el del icono de la pestaña del navegador.

### js/llamadoGraficos.js
Contiene instrucciones para desplegar datos dinámicamente en la página al interactuar con ella.

## Herramientas utilizadas
### Servidor de pruebas: Apache
### Base de datos: MySQL
### Desarrollo web: PHP, HTML5, CSS3 + bootstrap 4, jQuery 3.3.1, Ajax, Chart.js (graficos)
