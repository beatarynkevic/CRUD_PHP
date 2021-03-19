<?php require DIR.'views/top.php' ?>
<h1><?=  $pageTitle?></h1>
<?php require DIR.'views/menu.php' ?>

    <div style="padding: 26px; border: 1px solid black; margin: 30px;">
        <form action="<?= URL ?>store" method="post">
            Bannanas in box: <input type="text" name="count">
            <br><br>
            <button class="btn btn-outline-info" type="button">Create</button>
        <form> 
    </div>
    
<?php require DIR.'views/bottom.php' ?>