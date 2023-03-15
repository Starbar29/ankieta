<?php
  $imie = $_POST["imie"];
  $nazwisko = $_POST["nazwisko"];
  $wiek = $_POST["wiek"];
  $plec = $_POST["plec"];

  $linia = $imie . "," . $nazwisko . "," . $wiek . "," . $plec . "\n";
  file_put_contents("odp.txt", $linia, FILE_APPEND);

  echo "Odpowiedzi zostały zapisane.";
?>