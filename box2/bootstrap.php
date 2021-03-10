<!-- jis visur pasileis, pirmaiausiai pasileis visur -->
<?php
session_start();

define('URL', 'http://localhost/darzasCRUD/box2/'); //konstanta deklaruojam viena karta
define('INSTALL_DIR', '/darzasCRUD/box2/');
define('DIR', __DIR__.'/');
// require DIR. 'app/functions.php';



require DIR.'app/BananaConstructor.php';


_d($_SESSION, 'SESIJA--->');
