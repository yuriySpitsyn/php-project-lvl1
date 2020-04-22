<?php

namespace BrainGames\src\Games\Even;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isParity($number)
{
    return $number % 2 === 0;
}

function data()
{
    $randomNum = rand(0, 100);

    $correctAnswer = isParity($randomNum) ? "yes" : "no";

    return [
        'question' => $randomNum,
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
