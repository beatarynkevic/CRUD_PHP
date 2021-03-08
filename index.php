<?php
require __DIR__.'/bootstrap.php'; //kodas bendras visiems

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script const uriPAth = "<?= URL?>";></script>
    <script src="<?= URL?>app.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
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
            <form action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
            <button style="display:block;" type="submit">DELETE</button>
        </li>
    <?php endforeach ?>
    </ul>

</body>
</html>