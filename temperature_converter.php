
<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
</head>

<body>
    <h1>Temperature Converter</h1>

    <form method="post">
        <label for="temperature">Enter temperature:</label>
        <input type="number" name="temperature" id="temperature" required>

        <label for="conversion">Select conversion:</label>
        <select name="conversion" id="conversion" required>
            <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
        </select>

        <button type="submit">Convert</button>
    </form>

    <?php
    function celsiusToFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }

    function fahrenheitToCelsius($fahrenheit)
    {
        return ($fahrenheit - 32) * 5 / 9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST['temperature'];
        $conversion = $_POST['conversion'];

        if ($conversion === 'celsiusToFahrenheit') {
            $converted_temperature = celsiusToFahrenheit($temperature);
            echo "<p>Converted temperature: $converted_temperature °F</p>";
        } elseif ($conversion === 'fahrenheitToCelsius') {
            $converted_temperature = fahrenheitToCelsius($temperature);
            echo "<p>Converted temperature: $converted_temperature °C</p>";
        }
    }
    ?>
</body>

</html>
