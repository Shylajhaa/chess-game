<?php


namespace App\Controllers;


use App\Models\Bishop;
use App\Models\Board;
use App\Models\King;
use App\Models\Knight;
use App\Models\Pawn;
use App\Models\Player;
use App\Models\Queen;
use App\Models\Rook;

class BoardsController
{
    public $players;

    /**
     * BoardsController constructor.
     */
    public function __construct()
    {
        $this->players = [];
    }

    public  function initializeBoard()
    {
        $whiteRook = new Rook(0, 0, Player::WHITE, Player::ROOK);
        $this->players[Player::WHITE][] = $whiteRook;
        $whiteRook = new Rook(0, 7, Player::WHITE, Player::ROOK);
        $this->players[Player::WHITE][] = $whiteRook;
        $blackRook = new Rook(7, 0, Player::BLACK, Player::ROOK);
        $this->players[Player::BLACK][] = $blackRook;
        $blackRook = new Rook(7, 7, Player::BLACK, Player::ROOK);
        $this->players[Player::BLACK][] = $blackRook;

        $whiteKnight = new Knight(0,1, Player::WHITE, Player::KNIGHT);
        $this->players[Player::WHITE][] = $whiteKnight;
        $whiteKnight = new Knight(0,6, Player::WHITE, Player::KNIGHT);
        $this->players[Player::WHITE][] = $whiteKnight;
        $blackKnight = new Knight(7,1, Player::BLACK, Player::KNIGHT);
        $this->players[Player::BLACK][] = $blackKnight;
        $blackKnight = new Knight(7,6, Player::BLACK, Player::KNIGHT);
        $this->players[Player::BLACK][] = $blackKnight;

        $whiteBishop = new Bishop(0,2, Player::WHITE, Player::BISHOP);
        $this->players[Player::WHITE][] = $whiteBishop;
        $whiteBishop = new Bishop(0,5, Player::WHITE, Player::BISHOP);
        $this->players[Player::WHITE][] = $whiteBishop;
        $blackBishop = new Bishop(7,2, Player::BLACK, Player::BISHOP);
        $this->players[Player::BLACK][] = $blackBishop;
        $blackBishop = new Bishop(7,5, Player::BLACK, Player::BISHOP);
        $this->players[Player::BLACK][] = $blackBishop;

        $whiteQueen = new Queen(0,3, Player::WHITE, Player::QUEEN);
        $this->players[Player::WHITE][] = $whiteQueen;
        $blackQueen = new Queen(7,3, Player::BLACK, Player::QUEEN);
        $this->players[Player::BLACK][] = $blackQueen;

        $whiteKing = new King(0,4, Player::WHITE, Player::KING);
        $this->players[Player::WHITE][] = $whiteKing;
        $blackKing = new King(7,3, Player::BLACK, Player::KING);
        $this->players[Player::BLACK][] = $blackKing;

        for($j=0;$j<=7;$j++) {
            $whitePawn = new Pawn(1, $j, Player::WHITE, Player::PAWN);
            $this->players[Player::WHITE][] = $whitePawn;

            $blackPawn = new Pawn(6, $j, Player::BLACK, Player::PAWN);
            $this->players[Player::BLACK][] = $blackPawn;
        }
    }

    public function move($data)
    {
        $playerSide = $this->players[$data['color']];
        $opponentColor = ($data['color'] == Player::WHITE) ? Player::BLACK : Player::WHITE;
        $currentPlayer = null;

        foreach ($playerSide as $player) {
            if ($player->getXCor() == $data['start'][0] && $player->getYCor() == $data['start'][1]) {
                $currentPlayer = $player;
            }
        }

        $opponentSide = $this->players[$opponentColor];

        if (!$currentPlayer->isAlive()) {
            // error msg
            return false;
        }

        if (!$currentPlayer->hasMoved()) {
            // error msg
            return false;
        }

        if (!$currentPlayer->isValidMove()) {
            // error msg
            return false;
        }

        $currentPlayer->setEndXCor($data['end'][0]);
        $currentPlayer->setEndYCor($data['end'][1]);

        if ($this->hasWon($currentPlayer, $opponentSide)) {
            return $currentPlayer->getColor() . "Wins!";
        }
    }

    public function hasWon(Player $currentPlayer, $opponentSide)
    {
        $hasWon = false;
        foreach ($opponentSide as $opponent) {
            if ($currentPlayer->getEndXCor() == $opponent->getEndXCor()
                && $currentPlayer->getEndYCor() == $opponent->getEndYCor()
            ) {
                $opponent->setIsAlive(false);

                if ($opponent->getType() == Player::KING) {
                    $hasWon = true;
                    break;
                }
            }
        }

        return $hasWon;
    }
}