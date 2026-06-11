<?php
require_once 'config.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $conn->real_escape_string($_POST['name']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = (int)$_POST['year'];
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);

    if ($name === '' || $course === '' || $year < 1 || $year > 5 || $email === '' || $phone === '' || $address === '') {
        $message = '<p style="color:red;">Please fill in all fields correctly.</p>';
    } else {
        $sql = "INSERT INTO students (name, course, year, email, phone, address)
                VALUES ('$name', '$course', $year, '$email', '$phone', '$address')";

        if ($conn->query($sql)) {
            echo '<p style="color:green; font: size 1.2em;">Student added! Redirecting...</p>';
            header('Refresh: 2; url=index.php');
            exit;
        } else {
            $message = '<p style="color:red;">Error: ' . $conn->error . '</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Student</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background: #f5f5f5;
}

.container {
    max-width: 500px;
    margin: 0 auto;
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input, select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    margin-top: 15px;
    padding: 12px 30px;
    background: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background: #45a049;
}

.cancel {
    display: inline-block;
    margin-left: 10px;
    color: #666;
    text-decoration: none;
}

.message {
    margin-bottom: 15px;
}
</style>
</head>
<body>

<div class="container">
    <h1>Add New Student</h1>

    <div class="message">
        <?= $message ?>
    </div>

    <form method="POST">
        <label for="name">Full Name</label>
        <input
            type="text"
            id="name"
            name="name"
            required
            placeholder="e.g. Juan Dela Cruz">

        <label for="course">Course</label>
        <select id="course" name="course" required>
            <option value="">-- Select Course --</option>
            <option value="BSIT">BSIT</option>
            <option value="BSCS">BSCS</option>
            <option value="BSEd">BSEd</option>
            <option value="BSBA">BSBA</option>
        </select>

        <label for="year">Year Level</label>
        <input
            type="number"
            id="year"
            name="year"
            min="1"
            max="5"
            required
            placeholder="1-5">

        <label for="email">Email</label>
        <input
            type="email"
            id="email"
            name="email"
            required
            placeholder="e.g. juan@example.com">

        <label for="phone">Phone</label>
        <input
            type="tel"
            id="phone"
            name="phone"
            required
            placeholder="e.g. 09123456789">

        <label for="address">Address</label>
        <input
            type="text"
            id="address"
            name="address"
            required
            placeholder="e.g. 123 Main St, City">

        <button type="submit">Add Student</button>
        <a href="index.php" class="cancel">Cancel</a>
    </form>
</div>

</body>
</html>
