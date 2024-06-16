<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);

    echo "Addition: " . ($num1 + $num2) . "<br>";
    echo "Subtraction: " . ($num1 - $num2) . "<br>";
    echo "Multiplication: " . ($num1 * $num2) . "<br>";
    echo "Division: " . ($num1 / $num2) . "<br>";
    echo "Modulus: " . ($num1 % $num2) . "<br>";
}
?>
