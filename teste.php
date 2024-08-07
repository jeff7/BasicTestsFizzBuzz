<?php

require_once('FizzBuzz.php');

$faixa = [0,1,2,3,4,5];

$result = fizzbuzz($faixa);

echo "1 ".(($result[0] == $faixa[0]) ? "OK" :"falha"). "\n";
echo "2 ".(($result[1] == $faixa[1]) ? "OK" :"falha"). "\n";
echo "3 ".(($result[2] == $faixa[2]) ? "OK" :"falha"). "\n";
echo "4 ".(($result[3] == 'fizz') ? "OK" :"falha"). "\n";
echo "5 ".(($result[4] == $faixa[4]) ? "OK" :"falha"). "\n";
echo "6 ".(($result[5] == 'buzz') ? "OK" :"falha"). "\n";