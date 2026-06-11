<?php
require_once 'config.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $conn->real_escape_string($_POST['name']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = (int)$_POST['year'];
    $email = $conn->real_escape_string($_POST['email'] ?? '');
    $phone = $conn->real_escape_string($_POST['phone'] ?? '');
    $address = $conn->real_escape_string($_POST['address'] ?? '');

    if (empty($name) || empty($course) || empty($year)) {
        $message = '<p style="color:red;">All fields are required.</p>';
    } else {

        $sql = "INSERT INTO students 
        (name, course, year, email, phone, address)
        VALUES ('$name', '$course', $year, '$email', '$phone', '$address')";

        if ($conn->query($sql)) {
            echo '<p style="color:green; font-size:1.2em;">Student added! Redirecting...</p>';
            header('Refresh: 2; URL=index.php');
            exit;
        } else {
            $message = '<p style="color:red;">Error: ' . $conn->error . '</p>';
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Add New Student</h1>

    <?= $message ?>

    <form method="POST">
        <label>Full Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email">

        <label>Course</label>
        <select name="course" required>
            <option value="">-- Select Course --</option>
            <option value="BSIT">BSIT</option>
            <option value="BSCS">BSCS</option>
        </select>

        <label>Year Level</label>
        <input type="number" name="year" min="1" max="5" required>

        <label>Phone</label>
        <input type="text" name="phone">

        <label>Address</label>
        <textarea name="address" rows="3"></textarea>

        <button type="submit">Add Student</button>
        <a href="index.php" style="margin-left:10px;">Cancel</a>
    </form>
</div>
</body>
</html>
