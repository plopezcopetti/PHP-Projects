<?php

// Initializing variables

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

// Explaining the game to the user
echo "Welcome to the game. We're going to think of numbers between 1 and 10 (inclusive). Can you guess correctly the number we picked?\n";

// Main Function

function guessNumber() {
  global $guess_high, $guess_low, $correct_guesses, $play_count;
    $play_count ++;
  $num = rand(1,10);
    echo "\nMake your guess...\n";

  $response = readline(">>");
  $response = intval($response);

  echo "Round: $play_count\nMy number: $num\nYour guess: $response";

  if ($response === $num){
    $correct_guesses++;
  }

  if ($response > $num) {
    $guess_high++;
  }

  if ($response < $num) {
    $guess_low++;
  }
}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

// Player stats

$percent_correct = $correct_guesses/$play_count * 100;
echo "\nAfter $play_count rounds, here are some facts about your guessing skills:\nYou guessed the right number $percent_correct% of the time.\n";

if ($guess_high > $guess_low){
    echo "When you guessed wrong, you tended to guess high";
} else if ($guess_high < $guess_low) {
    echo "When you guessed wrong, you tended to guess low";
}