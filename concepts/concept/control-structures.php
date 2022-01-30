<?php
// If statement
$phrase = "Ahá";
if ($phrase) {
  echo "I'm inside the if! \n";
}

// While statement
$number = 0;
while ($number <= 10) {
  echo $number++;
}

// For loop
$phrases = array("hello", "bye", "lara", "krofichi", 5);
echo "\n\nWith common for: \n";
for ($i = 0; $i < 4; $i++) {
  echo "\n";
  echo $phrases[$i];
}

// Foreach loop
echo "\n\nWith foreach: \n";
foreach ($phrases as $phrase) {
  echo "\n";
  echo $phrase;
}

// Switch
$flag = "lara krofichi";
switch ($flag) {
  case "lara krofichi": {
      echo "You killed Lara. What did you doSSS???";
      break;
    }
  default: {
      echo "Ahá... *lara dies*";
      break;
    }
}
