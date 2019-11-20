<?php
namespace Jokenpo;

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

    /**
     * @param $choice1
     * @param $choice2
     * @return string
     */
    public function winner($choice1, $choice2) : string {

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
