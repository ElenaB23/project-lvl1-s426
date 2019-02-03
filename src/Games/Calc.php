<?php
namespace BrainGames\Games\Calc;

use function BrainGames\Engine\gameEngine;

const RULE = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

function run()
{
    $getData = function () {
        $operation = OPERATIONS[array_rand(OPERATIONS)];
        $firstOperand = rand(1, 20);
        $secondOperand = rand(1, 20);
        $question = "{$firstOperand} {$operation} {$secondOperand}";
        $rightAnswer = calculate($firstOperand, $secondOperand, $operation);

        return [$question, $rightAnswer];
    };

    gameEngine(RULE, $getData);
}

function calculate($firstOperand, $secondOperand, $operation)
{
    switch ($operation) {
        case '+':
            return $firstOperand + $secondOperand;
        case '-':
            return $firstOperand - $secondOperand;
        case '*':
            return $firstOperand * $secondOperand;
        default:
            break;
    }
}
