<?php
function isPerfectNumber($number) {
    if ($number < 1) return false;

    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    return $sum == $number;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST['number']);
    if (isPerfectNumber($number)) {
        echo "$number is a perfect number.";
    } else {
        echo "$number is not a perfect number.";
    }
}
?>
