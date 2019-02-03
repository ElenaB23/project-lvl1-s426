<?php
namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const ROUNDS = 3;

function gameEngine($rule, $getData)
{
    line('Welcome to the Brain Game!');
    line($rule . PHP_EOL);
    $name = prompt('May I have your name?');
    line("Hello, %s!" . PHP_EOL, $name);

    for ($currentRound = 0; $currentRound < ROUNDS; $currentRound++) {
        [$question, $rightAnswer] = $getData();

        line("Question: %s", $question);
        $answer = prompt("Your answer");

        if ($answer == $rightAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
