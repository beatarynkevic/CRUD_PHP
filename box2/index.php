<?php
require __DIR__.'/bootstrap.php';

_dc($_SERVER);
$uri = explode('/',str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));

// [REQUEST_URI] rodo i kur kreipiames
_d(str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']));
_d($uri);


//ROUTING
if('' == $uri[0]) {
    (new BananaConstructor)->index();
}



echo 'durys';
?>