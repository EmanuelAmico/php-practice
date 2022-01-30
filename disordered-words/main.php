<?php

$words = array("sun", "moon", "sky", "light", "stars", "rain");
$disorderedWords = array();

$form = '<form action="analysis.php">';
$button = '<button type="submit">Send</button>';
$formCierre = '</form>';

for ($i = 0; $i < count($words); $i++) {
  $form .= "The word: " . str_shuffle($words[$i]) . " " . '<input type="text" name="word' . $i . '"id="">'; // el operador .= sirve para concatenar supongoS
}

print_r($disorderedWords);

echo $form . $button . $formCierre;

session_start();
$_SESSION["words"] = $words;