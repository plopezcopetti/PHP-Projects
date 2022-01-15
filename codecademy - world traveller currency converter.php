<?php

//Foreign currency left
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "At the start point of your transaction you had $riel riel, $kyat kyat, $krones krones, and $lek lek.";
echo "\n";
echo "\n";

//Converting currency to USD

$rielusd = $riel * 0.00025;
$kyatusd = $kyat * 0.00056;
$kronesusd = $krones * 0.11;
$lekusd = $lek * 0.0094;

echo "With today's conversion rate you get $rielusd USD from your riel, $kyatusd USD from your kyat, $kronesusd USD from your krones, and $lekusd USD from your lek.";

//Total amount of dollars converted

$flatfee = 1;
$usdconv = $rielusd + $kyatusd + $kronesusd + $lekusd - (4 * $flatfee);

echo "\n";
echo "\n";
echo "Thanks for using our services. The total amount of dollars is $usdconv USD, sum calculated after applying our $flatfee USD per transaction.";