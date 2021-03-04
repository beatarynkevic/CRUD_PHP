<?php

function readData() : array
{
    if (!file_exists(DIR.'data/boxes.json')) {// pirmas kartas
        $data = json_encode([]);
        file_put_contents(DIR.'data/boxes.json', $data);
    }

    $data = file_get_contents(DIR.'data/boxes.json');
    return json_decode($data, 1);
}

function writeData(array $data) : void
{
    $data = json_encode($data);
    file_put_contents(DIR.'data/boxes.json', $data);
}

function getBox(int $id) : ?array
{
    foreach(readData() as $box) {
        if($box['id'] == $id) {
            return $box;
        }
    }
    return null;
}

function create(int $count) : void 
{
    $boxes = readData();
    $id = getNextId();
    $box = ['id' => $id, 'banana' => $count];
    $boxes[] = $box;
    writeData($boxes);
}

function getNextId() : int
{
    if (!file_exists(DIR.'data/indexes.json')) {// pirmas kartas
        $index = json_encode(['id'=>1]);
        file_put_contents(DIR.'data/indexes.json', $index);
    }
    $index = file_get_contents(DIR.'data/indexes.json');
    $index = json_decode($index, 1);
    $id = (int) $index['id'];
    $index['id'] = $id + 1;
    $index = json_encode($index);
    file_put_contents(DIR.'data/indexes.json', $index);
    return $id;
}


/*
[
    ['id'=>1, 'bannana'=> 0],
    ['id'=>2, 'bannana'=> 10],
    ['id'=>3, 'bannana'=> 600],
    ['id'=>4, 'bannana'=> 10],
    
]
'index.php' ----> __DIR__ c:/x/box/ <----- atskaitos taskas define DIR
'../index.php' ----> __DIR__ c:/x/box/app
'../../index.php' ----> __DIR__ c:/x/box/app/dargiliau
__DIR__+'index.php'
*/