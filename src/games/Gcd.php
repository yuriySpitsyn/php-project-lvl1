<?php

namespace BrainGames\src\games\gcd;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'Find the greatest common divisor of given numbers.';

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function data()
{
    $randomNum1 = rand(0, 100);
    $randomNum2 = rand(0, 100);
    $correctAnswer = gcd($randomNum1, $randomNum2);
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
