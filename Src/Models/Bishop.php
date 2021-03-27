<?php


namespace App\Models;


class Bishop extends Player
{
    /**
     * Bishop constructor.
     */
    public function __construct($xCor, $yCor, $colour)
    {
        parent::__construct($xCor, $yCor, $colour);
    }

    public function isValidMove($xCor, $yCor)
    {
        $yDiff = abs($this->getEndYCor() - $this->getYCor());
        $xDiff = abs($this->getEndXCor() - $this->getXCor());

        if ($xDiff != $yDiff) {
            return false;
        }
    }
}