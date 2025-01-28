<?php
class Math {
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    public static function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiply($num1, $num2) {
        return $num1 * $num2;
    } 
}
$result1 = Math::add(4, 3);
$result2 = Math::subtract(14, 4);
$result3 = Math::multiply(8, 2);

echo "Addition: " . $result1 . "";
echo "Subtraction: " . $result2 . "";
echo "Multiplication: " . $result3 . "";
/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */
