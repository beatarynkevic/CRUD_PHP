<?php

class BananaConstructor {
    



    public function index()
    {
        $pageTitle = 'Banana Boxes';
        require DIR.'views/index.php';
    }

    public function create()
    {
        $pageTitle = 'New Banana Box';
        require DIR.'views/create.php';
    }

    public function store()
    {
        $box = new Box;
        $box->banana =(int) ($_POST['count'] ?? 0);

        $bananas = $_POST['count'] ?? 0;
        $bananas = (int) $bananas;
        Json::getDB()->store();
        header('Location:'. URL);
        die;
    }
}


?>