<?php

/**
 * Leia 4 valores inteiros A, B, C e D.
 * A seguir, se B for maior do que C e se D for maior do que A, e 
 * a soma de C com D for maior que a soma de A e B e se C e D, ambos, forem positivos e 
 * se a variável A for par escrever a mensagem "Valores aceitos", senão escrever "Valores nao aceitos".
 * 
 * Entrada
 * Quatro números inteiros A, B, C e D.
 * 
 * Saída
 * Mostre a respectiva mensagem após a validação dos valores. 
 * Escreva a sua solução aqui
 * Code your solution here
 * Escriba su solución aquí

 */

// Valores de teste
// $a = 5;
// $b = 6;
// $c = 7;
// $d = 8;

// $a = 2;
// $b = 3;
// $c = 2;
// $d = 6;

$a = (int)readline();
$b = (int)readline();
$c = (int)readline();
$d = (int)readline();

if ($b > $c && $d > $a && $c > 0 && $d > 0 && ($c + $d) > ($a + $b) && $a % 2 == 0) {
	echo "Valores aceitos";
} else {
	echo "Valores nao aceitos";
}

?>
