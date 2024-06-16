<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task = $_POST['task'];

    switch ($task) {
        case 'task1':
            echo task1();
            break;
        case 'task2':
            echo task2();
            break;
        case 'task3':
            echo task3();
            break;
        case 'task4':
            echo task4();
            break;
    }
}

function task1() {
    return '
    <form method="post" id="task1Form">
        Enter a number: <input type="text" name="number">
        <input type="submit" value="Check">
    </form>
    <div id="task1Output"></div>
    <script>
        $("#task1Form").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: "perfect_number.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    $("#task1Output").html(data);
                }
            });
        });
    </script>
    ';
}

function task2() {
    return '
    <form method="post" id="task2Form">
        Number 1: <input type="text" name="num1"><br>
        Number 2: <input type="text" name="num2"><br>
        <input type="submit" value="Calculate">
    </form>
    <div id="task2Output"></div>
    <script>
        $("#task2Form").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: "arithmetic_operations.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    $("#task2Output").html(data);
                }
            });
        });
    </script>
    ';
}

function task3() {
    return '
    <button id="getWeatherBtn">Get Weather Info</button>
    <div id="weatherInfo"></div>
    <script>
        $("#getWeatherBtn").click(function() {
            $.ajax({
                url: "weather.json",
                dataType: "json",
                success: function(data) {
                    let weatherInfo = "";
                    $.each(data.weather, function(index, weather) {
                        weatherInfo += "City: " + weather.city + ", Temperature: " + weather.temperature + "°C, Condition: " + weather.condition + "<br>";
                    });
                    $("#weatherInfo").html(weatherInfo);
                }
            });
        });
    </script>
    ';
}

function task4() {
    session_start();
    if (!isset($_SESSION['random_number'])) {
        $_SESSION['random_number'] = rand(1, 50);
        $_SESSION['attempts'] = 0;
    }
    return '
    <form method="post" id="task4Form">
        Guess a number between 1 and 50: <input type="text" name="guess">
        <input type="submit" value="Guess">
    </form>
    <div id="task4Output"></div>
    <script>
        $("#task4Form").submit(function(event) {
            event.preventDefault();
            $.ajax({
                url: "guessing_game.php",
                type: "POST",
                data: $(this).serialize(),
                success: function(data) {
                    $("#task4Output").html(data);
                }
            });
        });
    </script>
    ';
}
?>
