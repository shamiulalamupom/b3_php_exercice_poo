<?php
/*
 * ÉNONCÉ :
 * Créez une classe Calculator avec des méthodes statiques add, subtract, multiply, divide.
 * Utilisez ces méthodes pour effectuer des opérations sur deux nombres.
*/
class Calculator {
    public static function add(int $number1, int $number2): int
    {
        return $number1 + $number2;
    }

    public static function subtract(int $number1, int $number2): int
    {
        return $number1 - $number2;
    }

    public static function multiply(int $number1, int $number2): int
    {
        return $number1 * $number2;
    }

    public static function divide(int $number1, int $number2): float
    {
        if ($number2 === 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }
        return $number1 / $number2;
    }
}

$calculator = new Calculator();
echo "Addition: " . Calculator::add(10, 5) . "\n";
echo "Subtraction: " . Calculator::subtract(10, 5) . "\n";
echo "Multiplication: " . Calculator::multiply(10, 5) . "\n";
echo "Division: " . Calculator::divide(10, 5) . "\n";