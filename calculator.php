<?php

$formule = readline ("Welke operatie wil je uitvoeren? (+, -):\n");
echo "Eerste getal?\n" ;
$a = readline(">");
echo "Tweede getal?\n" ;
$b = readline('>') ;

if ($formule === "+") {
echo "dit is je antwoord". ($a + $b) ;
}
elseif ($formule === "-") {
echo "dit is jet antwoord". ($a - $b) ;
}

?>
