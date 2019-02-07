<?php
namespace BrainGames\Games\Progression;

use function BrainGames\Engine\gameEngine;

const RULE = 'What number is missing in the progression?';
const SIZE_OF_PROGRESSION = 10;

function run()
{
    $getData = function () {
        $firstElement = rand(1, 20);
        $step = rand(3, 10);
        for ($i = 0; $i < SIZE_OF_PROGRESSION; $i++) {
            $progression[$i] = $firstElement + $step * $i;
        }
        $keyOfHideElem = array_rand($progression);
        $rightAnswer = $progression[$keyOfHideElem];

        $progression[$keyOfHideElem] = '..';
        $question = implode(' ', $progression);

        return [$question, $rightAnswer];
    };

    gameEngine(RULE, $getData);
}
