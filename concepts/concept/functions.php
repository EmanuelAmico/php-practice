<?php

// Concatenar dos strings
function concatenate($name, $surname) {
  echo $name . " " . $surname . "\n";
}

concatenate("Alex Emanuel", "Amico");

function sumNumbers($numbers) {
  $result = 0;
  for ($i = 0; $i < 4; $i++) {
    $result += $numbers[$i];
  }
  echo "The sum is" . " " . $result;
}

sumNumbers(array(1, 2, 3, 4));

$names = array("Ema", "Abeja", "Polilla");

echo is_array($names) ? "It's an array" : "It's not an array";

