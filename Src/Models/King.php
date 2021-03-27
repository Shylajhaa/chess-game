<?php


namespace App\Models;


class King extends Player
{

    /**
     * King constructor.
     * @param $xCor
     * @param $yCor
     * @param $colour
     */
    public function __construct($xCor, $yCor, $colour)
    {
        parent::__construct($xCor, $yCor, $colour);
    }

    public function isValidMove($xCor, $yCor)
    {
        $yDiff = abs($this->getEndYCor() - $this->getYCor());
        $xDiff = abs($this->getEndXCor() - $this->getXCor());

        if ($xDiff > 1 || $yDiff > 1) {
            return false;
        }

        return true;
    }
}