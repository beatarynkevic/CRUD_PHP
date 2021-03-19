<?php

class BananaController {

    public function index()
    {
        $pageTitle = 'Banana Boxes';
        $randDigit = Helper::getRandom();
        // $boxes = Json::getDB()->readData();

        $boxes = Json::getDB()->readAndSortData('banana');

        //$boxes = Box::orderByCount($boxes); //specifinis box sorrtas

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

        Json::getDB()->store($box); // sukuria
        header('Location: '.URL);
        die;
    }
    public function edit(int $id)
    {
        $box = Json::getDB()->getBox($id);
        $pageTitle = 'Edit Bananna Box NR: '.$box->id;
        require DIR.'views/edit.php';
    }

    public function update(int $id)
    {
        $box = Json::getDB()->getBox($id);
        $box->banana = (int) ($_POST['count'] ?? 0);
        Json::getDB()->update($box); // updeitina
        header('Location: '.URL);
        die;
    }

    public function delete(int $id)
    {
        Json::getDB()->delete($id);
        header('Location: '.URL);
        die;
    }
}


?>