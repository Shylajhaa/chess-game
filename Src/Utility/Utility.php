<?php


namespace App\Utility;


class Utility
{
    public function parseInput($ipString)
    {
        $data = [];

        $ipArray = explode(" ", $ipString);
        $data['player'] = $ipArray[0];
    }
}