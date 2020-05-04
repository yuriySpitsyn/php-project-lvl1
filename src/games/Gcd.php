<?php

namespace BrainGames\src\Games\Gcd;

use function BrainGames\src\Cli\startGame;

const INSTRUCTION = 'Find the greatest common divisor of given numbers.';

function getGreatestCommonDivisor($a, $b)
{
    return ($a % $b) ? getGreatestCommonDivisor($b, $a % $b) : $b;
}

function run()
{
    $getData = function () {
        $randomNum1 = rand(0, 100);
        $randomNum2 = rand(0, 100);

        $question = "{$randomNum1} {$randomNum2}";
        $correctAnswer = getGreatestCommonDivisor($randomNum1, $randomNum2);

        return [
            'question' => $question,
            'correctAnswer' => $correctAnswer,
        ];
    };

    startGame(INSTRUCTION, $getData);
}
