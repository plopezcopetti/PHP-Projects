<?php

/* Budget Calculator App

Bob's new job has a $48,150 gross salary. Where Bob lives, there is a progressive tax system. He pays 12% (keeps 88%) on the first 9,700, 22% (keeps 78%) on 
the next 29,775, and pays 24% (keeps 76%) on the remainder of his salary. This data is stored in $incomeSegments.

$incomeSegments is an array that contains an array for each income segment with the amount being taxed and the percent that he gets to keep. */
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Calculating net annual income

$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$netIncome -= $socialSecurity;

$annualIncome = $netIncome;

echo "Annual net income prior to expenses:\n$ $annualIncome\n";

$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

echo "\nAnnual income after annual expenses calculation:\n$ $annualIncome\n";

// Calculating monthly income

$monthlyIncome = round(($annualIncome / 12), 2);

echo "\nMonthly income prior to monthly expenses is:\n$ $monthlyIncome\n";

$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\nMonthly income after monthly expenses calculation:\n$ $monthlyIncome\n";

// Calculating weekly income

$weeklyIncome = round(($monthlyIncome / 4), 2);

echo "\nWeekly income prior to weekly expenses calculation:\n$ $weeklyIncome\n";

$weeklyExpenses = [
  "gas" => 25,
  "food" => 90,
  "entertainment" => 47
];

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\nWeekly income after weekly expenses calculation:\n$ $weeklyIncome\n";

// Calculating potential savings per year

$savingsMoney = $weeklyIncome * 52;
echo "\nThe amount of money that can be saved per year (if no extra expenses) is:\n$ $savingsMoney\n";
