<!-- cgpa_calculate.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture grades for each subject
    $subject1 = $_POST['subject1'];
    $subject2 = $_POST['subject2'];
    $subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];

    // Calculate CGPA
    $total = $subject1 + $subject2 + $subject3 + $subject4;
    $cgpa = $total / 4;

    // Display CGPA
    echo "<h1>Your CGPA</h1>";
    echo "<p>CGPA: " . round($cgpa, 2) . "</p>";
}
?>
