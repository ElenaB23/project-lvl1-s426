<?php
namespace BrainGames\Games\IsEven;

use function BrainGames\Engine\gameEngine;

const RULE = 'Answer "yes" if number even otherwise answer "no".';

function run()
{
    $getData = function () {
        $question = rand(1, 100);
        $rightAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rightAnswer];
    };
    gameEngine(RULE, $getData);
}

function isEven($number)
{
    return $number % 2 === 0;
}
