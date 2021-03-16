<?php
class Box {
    public $id, $banana;

    public static function getRandom() {
        return 'BOX No.:'.Helper::getRandom();
    }

    public static function orderByCount(array $boxes)
    {

        usort($boxes, function($a, $b){return $a->banana <=> $b->banana;});

        return $boxes;
    }
}
?>