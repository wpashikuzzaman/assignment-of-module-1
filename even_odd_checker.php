<!DOCTYPE html>
<html>

<head>
    <title>Even or Odd Checker</title>
</head>

<body>
    <h1>Even or Odd Checker</h1>

    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        if ($number % 2 === 0) {
            echo "<p>The number $number is even.</p>";
        } else {
            echo "<p>The number $number is odd.</p>";
        }
    }
    ?>
</body>

</html>
