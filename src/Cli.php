<?php

namespace BrainGames\src\Cli;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWER = 3;

function startGame($userName, $getData)
{
    for ($countRound = 0; $countRound < CORRECT_ANSWER; $countRound++) {
        $Data = $getData();

        line("Question: {$Data['question']}");
        $answerUser = prompt('Your answer');

        if ($answerUser == $Data['correctAnswer']) {
            line('Correct!');
        } else {
            line("'{$answerUser}' is wrong answer ;(. Correct answer was '{$Data['correctAnswer']}'.
Let's try again, {$userName}!");
            return;
        }
    }
    line("Congratulations, {$userName}!");
}
function gameInterface($instruction, $getData)
{
    line('Welcome to the Brain Games!');
    line($instruction);

    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);

    startGame($userName, $getData);
}
