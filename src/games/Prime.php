<?php

namespace BrainGames\src\Games\Prime;

use function BrainGames\src\Cli\startGame;

const INSTRUCTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getData = function () {
        $randomNum = rand(0, 100);

        $correctAnswer = isPrime($randomNum) ? "yes" : "no";

        return [
            'question' => $randomNum,
            'correctAnswer' => $correctAnswer,
        ];
    };

    startGame(INSTRUCTION, $getData);
}
