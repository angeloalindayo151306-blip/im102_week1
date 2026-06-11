<?php
require_once 'config.php';

$id = (int)($_GET['id'] ?? 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn->query("DELETE FROM students WHERE id = $id");
    header('Location: index.php');
    exit;
}

$result = $conn->query("SELECT name, course, year FROM students WHERE id = $id");
$student = $result->fetch_assoc();

if (!$student) {
    die("Student not found.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container" style="text-align:center;">
    <h1>Delete Student</h1>

    <p>Are you sure you want to delete:</p>

    <p style="font-size:1.3em; font-weight:bold;">
        <?= htmlspecialchars($student['name']) ?>
    </p>

    <p>
        <?= $student['course'] ?> — Year <?= $student['year'] ?>
    </p>

    <p style="color:#f44336;">This action cannot be undone.</p>

    <form method="POST" style="display:inline;">
        <button type="submit"
        style="padding:12px 30px; background:#f44336; color:white; border:none;">
        Yes, Delete</button>
    </form>

    <a href="index.php"
    style="padding:12px 30px; background:#9e9e9e; color:white; text-decoration:none;">
    Cancel</a>
</div>
</body>
</html>
