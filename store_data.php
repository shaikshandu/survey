<?php
$conn = new mysqli("localhost", "root", "", "house_survey");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$aadhaar = $_POST['aadhaar'];
$phone = $_POST['phone'];
$house_type = $_POST['house_type'];

$sql = "INSERT INTO responses (name, age, gender, aadhaar, phone, house_type)
        VALUES ('$name', $age, '$gender', '$aadhaar', '$phone', '$house_type')";

if ($conn->query($sql) === TRUE) {
    echo "<p style='text-align:center;font-family:sans-serif;'>Survey submitted successfully. <a href='results.php'>View Results</a></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
