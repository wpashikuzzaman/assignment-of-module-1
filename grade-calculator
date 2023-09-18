
<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>

    <form method="post">
        <label for="score1">Enter Test Score 1:</label>
        <input type="number" name="score1" id="score1" min="0" max="100" required>

        <label for="score2">Enter Test Score 2:</label>
        <input type="number" name="score2" id="score2" min="0" max="100" required>

        <label for="score3">Enter Test Score 3:</label>
        <input type="number" name="score3" id="score3" min="0" max="100" required>

        <button type="submit">Calculate</button>
    </form>

    <?php
    function calculateAverage($score1, $score2, $score3)
    {
        return ($score1 + $score2 + $score3) / 3;
    }

    function determineGrade($average)
    {
        if ($average >= 90) {
            return 'A';
        } elseif ($average >= 80) {
            return 'B';
        } elseif ($average >= 70) {
            return 'C';
        } elseif ($average >= 60) {
            return 'D';
        } else {
            return 'F';
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];

        $average = calculateAverage($score1, $score2, $score3);
        $grade = determineGrade($average);

        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>

</html>
