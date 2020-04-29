<?php

namespace BrainGames\src\Cli;

use function cli\line;
use function cli\prompt;

const CORRECT_ANSWERS_COUNT = 3;

function startGame($userName, $getData)
{
    for ($countRound = 0; $countRound < CORRECT_ANSWERS_COUNT; $countRound++) {
        $data = $getData();
        $question = $data['question'];
        $correctAnswer = $data['correctAnswer'];

        line("Question: {$question}");
        $answerUser = prompt('Your answer');

        if ($answerUser == $correctAnswer) {
            line('Correct!');
        } else {
            line("'{$answerUser}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$userName}!");
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
