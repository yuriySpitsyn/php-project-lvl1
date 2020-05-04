<?php

namespace BrainGames\src\Games\Calc;

use function BrainGames\src\Cli\startGame;

const INSTRUCTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function calculate($randNum1, $randNum2, $operation)
{
    switch ($operation) {
        case "+":
            $result = $randNum1 + $randNum2;
            break;
        case "-":
            $result = $randNum1 - $randNum2;
            break;
        case "*":
            $result = $randNum1 * $randNum2;
    }
    return $result;
}

function run()
{
    $getData = function () {
        $randNum1 = rand(0, 100);
        $randNum2 = rand(0, 100);
        $mathOperations = ['+', '-', '*'];

        $randOperation = array_rand(array_flip($mathOperations));

        $mathExpression = $randNum1 . $randOperation . $randNum2;

        $correctAnswer = calculate($randNum1, $randNum2, $randOperation);

        return [
            'question' => $mathExpression,
            'correctAnswer' => $correctAnswer,
        ];
    };

    startGame(INSTRUCTION, $getData);
}
