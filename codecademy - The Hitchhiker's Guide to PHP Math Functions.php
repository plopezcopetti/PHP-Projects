<?php
$initial = '555';
// Converting decimal from octal
$a = octdec($initial);
echo $a;
echo "\n";
// Converting deg to rad
$b = deg2rad($a);
echo $b;
echo "\n";
// Cosine of $b
$c = cos($b);
echo $c;
echo "\n";
// Rounding the value of $c into 3 decimal places and storing it in a new variable $d
$d = round($c, 3);
echo $d;
echo "\n";
// Calculate the logarithm of the value given by $d
$e = log($d);
echo $e;
echo "\n";
// Absolute value of log($e) stored in variable $f
$f = abs($e);
echo $f;
echo "\n";
// Arcosine of $f
$g = acos($f);
echo $g;
echo "\n";
// Converting rad to deg
$h = rad2deg($g);
echo $h;
echo "\n";
// Flooring the value of $h into a new variable
$i = floor($h);
echo $i;
echo "\n";
// Reaching the solution
$j = $i - 47; //solution to this exercise
echo $j;