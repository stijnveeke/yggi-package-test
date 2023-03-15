<?php
namespace Stijn\YggiPackageTest;
require_once ('envcheck.php');
class Calculation
{
    public function division(int $number1, int $number2): int {
        return $number1 / $number2;
    }

    public function multiplication(int $number1, int $number2): int {
        return $number1 * $number2;
    }
}