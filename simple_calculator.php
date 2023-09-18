<!DOCTYPE html>
<html>

<head>
    <title>Simple Calculator</title>
</head>

<body>
    <h1>Simple Calculator</h1>

    <form method="post">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="operator">Select an operation:</label>
        <select name="operator" id="operator" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" required>

        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = $_POST['num2'];
        $result = 0;

        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                echo "<p>Result of Addition: $result</p>";
                break;

            case 'subtract':
                $result = $num1 - $num2;
                echo "<p>Result of Subtraction: $result</p>";
                break;

            case 'multiply':
                $result = $num1 * $num2;
                echo "<p>Result of Multiplication: $result</p>";
                break;

            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "<p>Result of Division: $result</p>";
                } else {
                    echo "<p>Cannot divide by zero. Please enter a valid number.</p>";
                }
                break;

            default:
                echo "<p>Invalid operator selection.</p>";
                break;
        }
    }
    ?>
</body>

</html>
