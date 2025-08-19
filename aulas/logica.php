<?php
// Exemplo de Boolean:
$estaEstudando = true;
var_dump($estaEstudando);
echo "<br>";

$estaEstudando = !$estaEstudando;

// Verdadeiro - True, 1
// Falso - False, 0

var_dump($estaEstudando);
echo "<br>";

if ($estaEstudando) {
    echo "Parabéns";
} else {
    echo "Vá estudar";
}



?>