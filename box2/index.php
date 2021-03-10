<!-- atsakingas uz indekso atvaizdavima, atvaizuos bananu deze -->
<?php
require __DIR__.'/bootstrap.php';

?>

<?php require DIR.'views/top.php' ?>
<h1>Banana Boxes</h1>
<?php require DIR.'views/menu.php' ?>

    <ul id="list">
    <?php foreach([] as $box) : ?>
        <li>
            <span> ID: <?= $box['id'] ?> </span>
            <span> Count: <?= $box['banana'] ?> </span>
            <a href="<?= URL ?>update.php?id=<?= $box['id'] ?>">EDIT</a>
            <form action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
            <button style="display:block;" type="submit">DELETE</button>
        </li>
    <?php endforeach ?>
    </ul>

    <div style="padding: 26px; border: 1px solid black; margin: 30px;">
    Bannanas in box: <input type="text" id="count">
    <br><br>
    <button class="btn btn-outline-info" type="button">Create</button>
    </div>
    <?php require DIR.'views/bottom.php' ?>