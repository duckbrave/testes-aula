<?php
class Funcoes
{
    // Verifica se um número é par
    public static function ehPar($numero)
    {
        return $numero % 2 === 0;
    }

    // Calcula o fatorial de um número
    public static function fatorial($numero)
    {
        if ($numero < 0) {
            throw new InvalidArgumentException("Números negativos não são permitidos");
        }
        return $numero === 0 ? 1 : $numero * self::fatorial($numero - 1);
    }

    // Verifica se uma palavra ou frase é um palíndromo
    public static function ehPalindromo($texto)
    {
        $texto = strtolower(preg_replace('/[^a-z0-9]/i', '', $texto));
        return $texto === strrev($texto);
    }

    // Converte temperatura de Fahrenheit para Celsius
    public static function fahrenheitParaCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }

    // Calcula o preço com desconto aplicado
    public static function calcularDesconto($preco, $porcentagem)
    {
        if ($preco < 0 || $porcentagem < 0) {
            throw new InvalidArgumentException("Valores negativos não são permitidos");
        }
        return $preco - ($preco * $porcentagem / 100);
    }
}
