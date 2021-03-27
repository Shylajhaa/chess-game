<?php


namespace App\Models;


class Rook extends Player
{
    /**
     * Rook constructor.
     */
    public function __construct($xCor, $yCor, $colour, $type)
    {
        parent::__construct($xCor, $yCor, $colour, $type);
    }

    public function isValidMove()
    {
        // either x-pair or y-pair can differ, both can't
        if ($this->getXCor() != $this->getEndXCor()
            && $this->getYCor() != $this->getEndYCor()
        ) {
            return false;
        }

        return true;
    }
}