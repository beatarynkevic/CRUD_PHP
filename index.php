<?php
require __DIR__.'/bootstrap.php'; //kodas bendras visiems

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Boxes</title>
</head>
<body>
    <h1>Banana Boxes</h1>
    <a href="<?= URL ?>create.php">Create</a>

    <ul>
    <?php foreach(readData() as $box) : ?>
        <li>
            <span> ID: <?= $box['id'] ?> </span>
            <span> Count: <?= $box['banana'] ?> </span>
            <a href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
        </li>
    <?php endforeach ?>
    </ul>

</body>
</html>