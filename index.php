<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "im102_week1";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $year = $_POST['year'];

    $sql = "INSERT INTO students (name, course, year)
            VALUES ('$name', '$course', '$year')";
    
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 70%; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
        form { margin-top: 20px; }
        input { margin: 5px; padding: 5px; }
    </style>
</head>
<body>

<h2>Students List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Year</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['course']}</td>
                    <td>{$row['year']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No students found</td></tr>";
    }
    ?>
</table>

<h3>Add New Student</h3>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="course" placeholder="Course" required>
    <input type="number" name="year" placeholder="Year" required>
    <input type="submit" value="Add Student">
</form>

</body>
</html>

<?php
$conn->close();
?>