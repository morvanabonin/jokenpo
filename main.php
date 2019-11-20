<?php

require 'vendor/autoload.php';

use Jokenpo\Jokenpo;

$obj = new Jokenpo();

$player1 = $obj->play();
$player2 = $obj->play();

echo $player1 . PHP_EOL;
echo $player2 . PHP_EOL;

echo $obj->winner($player1, $player2) . PHP_EOL;