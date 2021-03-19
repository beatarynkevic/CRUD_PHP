<?php
require __DIR__.'/bootstrap.php'; //kodas bendras visiems

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script> const uriPAth = "<?= URL?>";</script>
    <script src="<?= URL?>app.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Banana Boxes</title>
</head>
<body>
    <h1>Banana Boxes</h1>
    <a href="<?= URL ?>create.php">Create</a>

    <ul id="list">
    <?php foreach(readData() as $box) : ?>
        <li style="padding: 10px;">
            <span> ID: <?= $box['id'] ?> </span>
            <span> Count: <?= $box['banana'] ?> </span>
            <a class="btn btn-outline-success" href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
            <form display="inline:block;" action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
            <button class="btn btn-outline-danger" type="submit">DELETE</button>
        </li>
    <?php endforeach ?>
    </ul>

    <div style="padding: 26px; border: 1px solid black; margin: 30px;">
    Bananas in box: <input type="text" id="count">
    <br><br>
    <button class="btn btn-outline-info" type="button">Create</button>
    </div>

</body>
</html>