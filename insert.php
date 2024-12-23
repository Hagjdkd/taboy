<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST["studentName"];
    $course = $_POST["course"];
    $contact_number = $_POST["contactNumber"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO students (student_name, course, contact_number, gender)
            VALUES ('$student_name', '$course', '$contact_number', '$gender')";

   
}

?>
