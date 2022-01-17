<?php

function magic8Ball() {
  echo "Please do tell... What is your question?\n";
  
  $question = readline(">");

  echo "\nHmmm... This is interesting. Your question is... $question, and now it's time to consult the spirits what they foresee in your future.\nHere is your answer: ";

  $choice = rand(0, 19);

  switch ($choice) {
    case 0: 
        echo "It is certain.\n";
        break;
    case 1:
        echo "It is decidely so.\n";
        break;
    case 2:
        echo "Without a doubt.\n";
        break;
    case 3:
        echo "Yes - definitely.\n";
        break;
    case 4:
        echo "You may rely on it.\n";
        break;
    case 5:
        echo "As I see it, yes.\n";
        break;
    case 6:
        echo "Most likely.\n";
        break;
    case 7:
        echo "It leans to a yes.\n";
        break;
    case 8:
        echo "I am not seeing it right now.\n";
        break;
    case 9:
        echo "It all depends on your efforts.\n";
        break;
    case 10:
        echo "Not likely to happen.\n";
        break;
    case 11:
        echo "No, I am not seeing it.\n";
        break;
    case 12:
        echo "Choose another path.\n";
        break;
    case 13:
        echo "By no means.\n";
        break;
    case 14:
        echo "The odds are against you.\n";
        break;
    case 15:
        echo "Are you sure that is what you want?\n";
        break;
    case 16: 
        echo "I see a bright future for you.\n";
        break;
    case 17:
        echo "Keep insisting. Consistence is key.\n";
        break;
    case 18:
        echo "Concentrate and ask again.\n";
        break;
    default:
        echo "Signs point to yes.\n";
        break;
  }
}   
  
magic8Ball();