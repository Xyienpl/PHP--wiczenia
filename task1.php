<?php

$NazwaZmiennej = 1;
$int = 1;
$float = 2.0;
$string = "tekst";
$bool = true;

var_dump($string);
print $string . PHP_EOL;
echo $int . PHP_EOL;

$array =  [$int, $float, $string, $bool];

var_dump($array);

$a = 1;
$b = 10;
$c = 15;
$d = 21;

echo ($a + $b) . PHP_EOL;
echo ($b - $a) . PHP_EOL;
echo ($d * $a) . PHP_EOL;
echo ($b / $d) . PHP_EOL;
echo ($c % $b) . PHP_EOL;

$word1 = "Word 1";
$word2 = "Word 2";
$word3 = "Word 3";
$word4 = "Word 4";

echo "First word: $word1" . PHP_EOL;
echo 'First word: $word1' . PHP_EOL;
echo 'First word: ' . $word1 . PHP_EOL;
echo sprintf('First word %s, second %s', $word2, $word3) . PHP_EOL;
