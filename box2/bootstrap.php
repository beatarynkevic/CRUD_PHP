<!-- visur pasileis-->
<?php
session_start();

define('URL', 'http://localhost/darzasCRUD/box2/'); //konstanta deklaruojam viena karta
define('INSTALL_DIR', '/darzasCRUD/box2/');
define('DIR', __DIR__.'/');



require DIR.'app/BananaController.php';
require DIR.'app/Json.php';
require DIR.'app/Box.php';
require DIR.'app/Helper.php';


_d($_SESSION, 'SESIJA--->');
?>
