<?php

namespace BrainGames\src\games\progression;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'What number is missing in the progression?';

function data()
{
    $progressionLength = 10;
    $firstNum = rand(0, 100);
    $step = rand(1, 100);
    $endNum = $firstNum + $step * ($progressionLength - 1);

    $progression = range($firstNum, $endNum, $step);
    $hiddenElementIndex = array_rand($progression);

    $correctAnswer = $progression[$hiddenElementIndex];

    $progression[$hiddenElementIndex] = '..';
    $arrayToString = implode(' ', $progression);
    return [
        'question' => $arrayToString,
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
