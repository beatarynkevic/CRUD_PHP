<?php require DIR.'views/top.php' ?>
<h1><?=  $pageTitle?></h1>
<?php require DIR.'views/menu.php' ?>

    <form action="<?= URL ?>delete.php?id=<?= $box['id'] ?>" method="post">
    <button style="display:block;" type="submit">DELETE</button>

<?php require DIR.'views/bottom.php' ?>