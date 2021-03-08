<?php
require __DIR__.'/../../bootstrap.php';

// get the raw POST data
$rawData = file_get_contents("php://input");
$rawData = json_decode($rawData, 1);
$bananas = $_POST['count'] ?? 0;
$bananas = (int) $bananas;
create($bananas); //sukuria

//GEBERUOJAM PAKEISTA PUSLAPIO VIETA 
ob_start();

foreach(readData() as $box) : ?>
    <li>
        <span> ID: <?= $box['id'] ?> </span>
        <span> Count: <?= $box['banana'] ?> </span>
        <a href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
        <form action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
        <button style="display:block;" type="submit">DELETE</button>
    </li>
<?php endforeach;

$page = ob_get_contents();

// this returns null if not valid json
_d(json_decode($rawData, 1), 'json');
?>