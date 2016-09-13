<?php
echo strtoupper('Formatowanie stringów') . PHP_EOL;

// $string = file_get_contents(__DIR__ . "/samp1.txt");
$string = file_get_contents(__DIR__ . "/samp2.txt");

echo PHP_EOL . 'String podstawowy: ' . $string . PHP_EOL;

echo "* Po funkcji addslashes()" . PHP_EOL;
echo addslashes($string) . PHP_EOL;

echo "* Po funkcji htmlspecialchars()" . PHP_EOL;
$spCh = htmlspecialchars($string);
echo $spCh . PHP_EOL;

echo "* Po funkcji htmlspecialchars_decode()" . PHP_EOL;
echo htmlspecialchars_decode($spCh) . PHP_EOL;

echo "* Po funkcji htmlentities()" . PHP_EOL;
echo htmlentities($string) . PHP_EOL;



