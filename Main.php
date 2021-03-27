<?php

const DS = DIRECTORY_SEPARATOR;
require getcwd() . DS . "vendor" . DS . "autoload.php";
use App\Controllers\BoardsController;

echo "Hello World!!" . "\n";

$boardsController = new BoardsController();

$boardsController->initializeBoard();

do {
    echo "Enter player, colour, current cor, move cor" . "\n";
    $ipData = (new App\Utility\Utility())->parseInput(fgets(STDIN));

    $ipData = [
        "player" => "Rook",
        "color" => "W",
        "start" => [0,0],
        "end" => [0,5]
    ];
    $result = $boardsController->move($ipData);
} while (fgets(STDIN) != "Y");


/*
 * Player Color xcor,ycor xcor,ycor
 * Rook W 0,0 0,7
 */


