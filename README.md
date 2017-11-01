# SisTec - Laravel 
Repositorio con el codigo fuente del mini-proyecto realizado en clase de Taller de Base de Datos con el Framework Laravel 5.5.14 .

<h3> Requisitos </h3>
<ul>
  <li>PHP>7</li>
  <li>Composer</li>
</ul>


<h3> Librerias </h3>
<ul>
  <li>https://github.com/svenluijten/artisan-view</li>
  <li>https://github.com/jorgejavierleon/LaravelPnotify</li>
  <li>https://github.com/yajra/laravel-datatables</li>
  <li>https://laravelcollective.com/docs/5.4/html</li>
</ul>



<h3> Pasos a seguir para ver aplicacion final</h3>
<ul>
  <li> Clonar/descargar el repositorio: si se tiene GIT instalado se puede utilizar el comando "$ git clone  https://github.com/saidl14s/course-laravel-itcg.git" y automaticamente iniciaria la descarga del proyecto, sino solo darle click en el boton de descargar como zip</li>
  <li>Abir una terminal y ubicarla en la raiz de la carpeta del proyecto</li>
  <li>Ejecutar en la terminal el comando "$ composer update": este comando hara un reconocimiento del proyecto para que posteriormente lo puedan manipular</li>
  <li>Ejecutar en la terminal el comando "$ php artisan migrate": este comando realiza las migraciones. Para ello es necesario tener una DB creada en MySQL, por defecto las migraciones buscaran la DB con nombre "laravel_curso" asi que o modifican el archivo .env (ubicado en la raiz de su proyecto) la linea "DB_DATABASE=laravel_curso" y colocan el nombre su DB ya creada en MySQL ó crean una DB en MySQL con el nombre "laravel_curso"</li>
  <li>Lo ultimo que queda es correr la aplicacion con el comando: "php artisan serve" y abrir la direccion en su navegador preferido.</li>
</ul>

<h3><b>Nota</b></h3>
<ul>Si les marca un error como el siguiente: 
  <p>$ php artisan serve
PHP Warning:  require(C:\course-laravel-itcg/vendor/autoload.php): failed to open stream: No such file or directory in C:\course-laravel-itcg\artisan on line 18

Warning: require(C:\course-laravel-itcg/vendor/autoload.php): failed to open stream: No such file or directory in C:\course-laravel-itcg\artisan on line 18
PHP Fatal error:  require(): Failed opening required 'C:\course-laravel-itcg/vendor/autoload.php' (include_path='C:\xampp\php\PEAR') in C:\Users\robot\Desktop\course-laravel-itcg\artisan on line 18

Fatal error: require(): Failed opening required 'C:\course-laravel-itcg/vendor/autoload.php' (include_path='C:\xampp\php\PEAR') in C:\course-laravel-itcg\artisan on line 18</p>
<p>Ejecutar en la raiz de su proyecto el siguiente comando: "$ composer update" y posteriormente (ya que termine el proceso de instalacion de las dependencias) ejecutar el comando: "$ php artisan serve"</p></ul>
