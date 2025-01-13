<!-- view.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture the data from the form
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];
    $cgpa = $_POST['cgpa'];
    
    echo "<h1>Student Information</h1>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Roll Number: " . htmlspecialchars($roll) . "</p>";
    echo "<p>Course: " . htmlspecialchars($course) . "</p>";
    echo "<p>CGPA: " . htmlspecialchars($cgpa) . "</p>";
}
?>
