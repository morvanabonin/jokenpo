<?php

class Jokenpo
{
    private const ROCK = 0;
    private const PAPER = 1;
    private const SCISSORS = 2;

    /**
     * @return int
     */
    public function play() : int {
        return rand(0, 2);
    }

    public function winner($choice1, $choice2) {
        if ($choice1 == self::ROCK && $choice2 == self::ROCK ||
           $choice1 == self::PAPER && $choice2 == self::PAPER ||
           $choice1 == self::SCISSORS && $choice2 == self::SCISSORS
        ) {
           return "Deadlock";
        }

        if ($choice1 == self::ROCK && $choice2 == self::PAPER ||
           $choice1 == self::PAPER && $choice2 == self::ROCK
        ) {
           return "Paper beats Rock";
        }

        if ($choice1 == self::ROCK && $choice2 == self::SCISSORS ||
            $choice1 == self::SCISSORS && $choice2 == self::ROCK
        ) {
            return "Rock beats Scissors";
        }

        if ($choice1 == self::SCISSORS && $choice2 == self::PAPER ||
            $choice1 == self::PAPER && $choice2 == self::SCISSORS
        ) {
            return "Scissors beats Paper";
        }
    }
}

$obj = new Jokenpo();
$player1 = $obj->play();
$player2 = $obj->play();

echo $player1 . PHP_EOL;
echo $player2 . PHP_EOL;

echo $obj->winner($player1, $player2) . PHP_EOL;

?>