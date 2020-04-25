<?php

namespace BrainGames\src\Games\Even;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0;
}

function run()
{
    $getData = function () {
        $randomNum = rand(0, 100);

        $correctAnswer = isEven($randomNum) ? "yes" : "no";

        return [
            'question' => $randomNum,
            'correctAnswer' => $correctAnswer,
        ];
    };

    gameInterface(INSTRUCTION, $getData);
}
