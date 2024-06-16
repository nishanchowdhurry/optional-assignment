<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = intval($_POST['guess']);
    $_SESSION['attempts']++;

    if ($guess < $_SESSION['random_number']) {
        echo "Your guess is too low.";
    } elseif ($guess > $_SESSION['random_number']) {
        echo "Your guess is too high.";
    } else {
        echo "Congratulations! You guessed the number in " . $_SESSION['attempts'] . " attempts.";
        session_destroy(); // Reset the game
    }
}
?>
