<?php


namespace App\Models;


class Player // Piece
{
    const WHITE = "W";
    const BLACK = "B";

    const ROOK = "Rook";
    const KNIGHT = "Knight";
    const BISHOP = "Bishop";
    const QUEEN = "Queen";
    const KING = "King";
    const PAWN = "Pawn";

    private $xCor;
    private $yCor;
    private $colour;
    private $isAlive;
    private $endXCor;
    private $endYCor;
    private $type;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getEndXCor()
    {
        return $this->endXCor;
    }

    /**
     * @param mixed $endXCor
     */
    public function setEndXCor($endXCor)
    {
        $this->endXCor = $endXCor;
    }

    /**
     * @return mixed
     */
    public function getEndYCor()
    {
        return $this->endYCor;
    }

    /**
     * @param mixed $endYCor
     */
    public function setEndYCor($endYCor)
    {
        $this->endYCor = $endYCor;
    }

    /**
     * Player constructor.
     * @param $xCor
     * @param $yCor
     * @param $colour
     */
    public function __construct($xCor, $yCor, $colour, $type)
    {
        $this->xCor = $xCor;
        $this->yCor = $yCor;
        $this->colour = $colour;
        $this->isAlive = true;
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isAlive()
    {
        return $this->isAlive;
    }

    /**
     * @param bool $isAlive
     */
    public function setIsAlive($isAlive)
    {
        $this->isAlive = $isAlive;
    }

    /**
     * @return mixed
     */
    public function getXCor()
    {
        return $this->xCor;
    }

    /**
     * @param mixed $xCor
     */
    public function setXCor($xCor)
    {
        $this->xCor = $xCor;
    }

    /**
     * @return mixed
     */
    public function getYCor()
    {
        return $this->yCor;
    }

    /**
     * @param mixed $yCor
     */
    public function setYCor($yCor)
    {
        $this->yCor = $yCor;
    }

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    public function hasMoved($xCor, $yCor)
    {
        // validates if current positon != new position
    }

}