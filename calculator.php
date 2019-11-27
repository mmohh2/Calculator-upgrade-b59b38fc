<?php
echo "Welke operatie wil je uitvoeren?";
echo "". PHP_EOL;
echo "eerste getal?";
$a = readline(">");
echo $a, "\n";
echo "Tweede getal?";
$b = readline('>');
echo $b, "\n";
echo "Uw resultaat is =";
echo $a + $b;
