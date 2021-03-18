<!-- jis visur pasileis, pirmaiausiai pasileis visur -->
<?php
session_start();

define('URL', 'http://localhost/darzasCRUD/box/'); //konstanta deklaruojam viena karta
define('DIR', __DIR__.'/');
require DIR. 'app/functions.php';

_d($_SESSION, 'SESIJA--->');
