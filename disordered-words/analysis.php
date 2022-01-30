<?php
print_r($_REQUEST); // -> Para imprimir lo que ingresa el user en el form del front
session_start(); // -> Mepa que no está bien usar session como si fuera para importar una variable... porque se guarda en las cookies, se me hace que es para una sesion de usuario logueado más que para esa funcionalidad.
$words = $_SESSION["words"];

for ($i = 0; $i < count($words); $i++) {
  if ($_REQUEST["word".$i] === $words[$i]) {
    echo "The word you entered was correct";
  } else {
    echo "The word" . $i . "you entered was incorrect. "."\n"."The correct word is: ".$words[$i];
  }
}
