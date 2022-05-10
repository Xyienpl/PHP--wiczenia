<?php

$true = true;
$false = false;

$and = $true && $false;
$or = true || $false;
$nor = !($true || $false);
$not = !$true;

if ($or) {
    echo "and is true" . PHP_EOL;
}

$a = 1;
$b = 2;
$b2 =  '2';
$word1 = 'word1';
$word2 = 'word2';
$word22 = 'word22';

if ($a < $b) {
    echo "true" . PHP_EOL;
}

if ($b == $b2) {
    echo 'false' . PHP_EOL;
} // Soft

if ($b === $b2) {
    echo 'false' . PHP_EOL;
} // heavy
