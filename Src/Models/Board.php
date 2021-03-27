<?php


namespace App\Models;


class Board
{
//    const LEFT ='L';
//    const RIGHT = 'R';
    private $size;

    /**
     * Board constructor.
     * @param $size
     */
    public function __construct($size) // 8, 16
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }


}