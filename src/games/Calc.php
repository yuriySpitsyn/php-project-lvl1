<?php

namespace BrainGames\src\games\even;

use function BrainGames\src\Cli\gameInterface;

const INSTRUCTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function parityCheck($number)
{
    return $number % 2 === 0;
}
function data()
{
    $randomNum = rand(0, 100);
    $correctAnswer = parityCheck($randomNum) ? "yes" : "no";
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