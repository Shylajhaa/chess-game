<?php


namespace App\Models;


class Knight extends Player
{
    /**
     * Knight constructor.
     */
    public function __construct($xCor, $yCor, $colour)
    {
        parent::__construct($xCor, $yCor, $colour);
    }

    public function isValidMove()
    {
        $diffs = [];
        $diffs[] = abs($this->getEndYCor() - $this->getYCor());
        $diffs[] = abs($this->getEndXCor() - $this->getXCor());

        $diffs = sort($diffs);

        if ($diffs[0] != 1 || $diffs[1] != 2) {
            return false;
        }

        return true;


    }
}