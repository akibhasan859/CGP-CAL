<!-- result.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Calculation</title>
</head>
<body>
    <h1>CGPA Calculation</h1>
    <form action="cgpa_calculate.php" method="POST">
        <label for="subject1">Subject 1 Grade:</label>
        <input type="number" id="subject1" name="subject1" min="0" max="4" required><br><br>

        <label for="subject2">Subject 2 Grade:</label>
        <input type="number" id="subject2" name="subject2" min="0" max="4" required><br><br>

        <label for="subject3">Subject 3 Grade:</label>
        <input type="number" id="subject3" name="subject3" min="0" max="4" required><br><br>

        <label for="subject4">Subject 4 Grade:</label>
        <input type="number" id="subject4" name="subject4" min="0" max="4" required><br><br>

        <input type="submit" value="Calculate CGPA">
    </form>
</body>
</html>
