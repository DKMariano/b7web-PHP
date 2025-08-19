<?php
/*
String: Representa caracteres no geral (texto) Ex. 'Alessandro'
Integer: representa números inteiros, Ex: 10, 20, 30, 1, 5
Float (Double): Representa números decimais, Ex: 10.1, 1.5, 0.93
Boolean: Representa Verdadeiro ou False: true, false
*/

// Exemplo de string:
$nome = 'José';
$sobrenome = 'Kobs';
$numeroCaracteres = strlen($nome);


// Exibir:
 echo $nome;
echo "<hr> <br>";

// Concatenar
echo $nome.' '.$sobrenome;
echo "<hr> <br>";

// Exibir junto com string:
echo "Meu nome é $nome";
echo "<hr> <br>";


// Execício
echo "Seu nome é $nome, ele tem $numeroCaracteres caracteres";
echo "<hr> <br>";

// Exemplo de string:
$texto = 'Pera, uva, maçã e salada mista';

// strlen() - Conta o número de caracteres de uma string.
$numeroCaracteres = strlen($texto);
$caracteresPalavraPera = strlen("Pera");
$caracteresPalavraUva = strlen("uva");
$caracteresPalavraSalada = strlen("salada");


// strpos() - busca a posição de uma palavra em uma string.
$posicaoPalavraPera = strpos($texto, "Pera");
$posicaoPalavraUva = strpos($texto, "uva");
$posicaoPalavraSalada = strpos($texto, "salada");

// substr() - Retorna uma parte de uma string
$parteDaString = substr($texto, 6, 4);
$palavraPera = substr($texto, $posicaoPalavraPera, $caracteresPalavraPera);
$palavraUva = substr($texto, $posicaoPalavraUva,$caracteresPalavraUva);
$palavraSalada = substr($texto, $posicaoPalavraSalada, $posicaoPalavraSalada);


// Exercício: Retirar apenas a palavra Pera, usando a função substr()
echo $palavraPera;
echo "<hr> <br>";
echo $palavraUva;
echo "<hr> <br>";
echo $palavraSalada

?>