<?php


namespace App\Models;


class Queen extends Player
{
    /**
     * Queen constructor.
     */
    public function __construct($xCor, $yCor, $colour)
    {
        parent::__construct($xCor, $yCor, $colour);
    }

    public function isValidMove($xCor, $yCor)
    {
        // incomplete
        if ($this->getXCor() == $this->getEndXCor()
            || $this->getYCor() != $this->getEndYCor()
        ) {
            return false;
        }

        return true;
    }
}