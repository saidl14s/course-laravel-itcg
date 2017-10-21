# Sistec - Laravel 
Repositorio con el codigo fuente del mini-proyecto realizado en clase de Taller de Base de Datos con el Framework Laravel 5.5.

<h3> Requisitos </h3>
<li>
  <ul>PHP>7</ul>
  <ul>Composer</ul>
</li>


<h3> Librerias </h3>
<li>
  <ul>PHP>7</ul>
  <ul>Composer</ul>
</li>a



<h3> Pasos a seguir </h3>
<li>
  <ul> Clonar/descargar el repositorio: si se tiene GIT instalado se puede utilizar el comando "$ git clone  https://github.com/saidl14s/course-laravel-itcg.git" y automaticamente iniciaria la descarga del proyecto, sino solo darle click en el boton de descargar como zip</ul>
  <ul>Abir una terminal y ubicarla en la raiz de la carpeta del proyecto</ul>
  <ul>Ejecutar en la terminal el comando "$ composer update": este comando hara un reconocimiento del proyecto para que posteriormente lo puedan manipular</ul>
  <ul>Ejecutar en la terminal el comando "$ php artisan migrate": este comando realiza las migraciones. Para ello es necesario tener una DB creada en MySQL, por defecto las migraciones buscaran la DB con nombre "laravel_curso" asi que o modifican el archivo .env (ubicado en la raiz de su proyecto) la linea "DB_DATABASE=laravel_curso" y colocan el nombre su DB ya creada en MySQL ó crean una DB en MySQL con el nombre "laravel_curso"</ul>
  <ul>Lo ultimo que queda es correr la aplicacion con el comando: "php artisan serve" y abrir la direccion en su navegador preferido.</ul>
</li>
