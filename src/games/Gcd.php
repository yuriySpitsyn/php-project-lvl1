<?php

namespace BrainGames\src\Games\Gcd;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'Find the greatest common divisor of given numbers.';

function greatestCommonDivisor($a, $b)
{
    return ($a % $b) ? greatestCommonDivisor($b, $a % $b) : $b;
}

function data()
{
    $randomNum1 = rand(0, 100);
    $randomNum2 = rand(0, 100);

    $correctAnswer = greatestCommonDivisor($randomNum1, $randomNum2);

    return [
        'question' => $randomNum1 . " " . $randomNum2,
        'correctAnswer' => $correctAnswer,
    ];
}

function run()
{
    $getData = function () {
        return data();
    };

    gameInterface(INSTRUCTION, $getData);
}
