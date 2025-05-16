<?php
/**
 *  Clase para el Archivo del ejercicio 1.2
 *
 * @author Paula Ollora Mestanza
 * @version 1.0.0
 * @internal Nota para desarrolladores.
 */
class Operaciones{
/**
 * Compara dos números y devuelve el mayor.
 *
 * @param float $num1 Primer número.
 * @param float $num2 Segundo número.
 * @return float El número mayor entre los dos.
 */
function obtenerMayor($num1, $num2) {
    return ($num1 > $num2) ? $num1 : $num2;
}

/**
 * Multiplica un número por 10.
 *
 * @param float $numero Número a multiplicar.
 * @return float El resultado de multiplicar el número por 10.
 */
function multiplicarPorDiez($numero) {
    return $numero * 10;
}
}