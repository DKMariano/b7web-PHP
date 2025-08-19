<?php

// FLOAT
echo "<hr><br>";
echo "FLOAT";
echo "<br><br><hr>";

// Exemplo de Float
$altura = 1.0;

$num1 = 1.10;
$num2 = 2.50;

echo 'Multiplicação: ' . ($num1 * $num2);
echo '<br />';
echo 'Adição: ' . ($num1 + $num2);
echo '<br />';
echo 'Subtração: ' . ($num1 - $num2);
echo '<br />';
echo 'Divisão: ' . ($num1 / $num2);
echo '<br />';



// Arredondamento
echo '<br />';
echo "Arredondamento";
echo '<br />';
$num3 = 2.50;
echo "Número: $num3";
echo '<br />';

// round()
echo 'Arredondamento com round(): ' . round($num3);
echo '<br />';

// floor()
echo 'Arredondamento com floor(): ' . floor($num3);
echo '<br />';

// ceil()
$numeroArredondadoParaCima = ceil($num3);
echo 'Arredondamento com ceil(): ' . $numeroArredondadoParaCima;
echo "<br><hr>";
