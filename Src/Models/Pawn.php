<?php


namespace App\Models;


class Pawn extends Player
{
    /**
     * Pawn constructor.
     */
    public function __construct($xCor, $yCor, $colour)
    {
        parent::__construct($xCor, $yCor, $colour);
    }

    public function isValidMove()
    {
        $yDiff = abs($this->getEndYCor() - $this->getYCor());
        $xDiff = abs($this->getEndXCor() - $this->getXCor());

        if ($yDiff > 2 || $xDiff > 2) {
            return false;
        }

        return true;
    }
}