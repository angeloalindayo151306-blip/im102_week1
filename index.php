<?php
require_once 'config.php';

$sql = "SELECT * FROM students ORDER BY id ASC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student List</h1>

    <p>
        <a href="add.php" style="
            display: inline-block;
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        ">
            + Add Student
        </a>
    </p>

    <!-- TABLE WRAPPER (prevents breaking) -->
    <div class="table-wrapper">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Year</th>
                <th>Email</th>
                <th>Address</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['course']) ?></td>
                <td><?= $row['year'] ?></td>
                <td><?= htmlspecialchars($row['email'] ?? '') ?></td>
                <td><?= htmlspecialchars($row['address'] ?? '') ?></td>
                <td><?= $row['created_at'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>"
                       style="color:#2196F3; text-decoration:none; margin-right:10px;">
                        Edit
                    </a>

                    <a href="delete.php?id=<?= $row['id'] ?>"
                       style="color:#f44336; text-decoration:none;"
                       onclick="return confirm('Delete <?= htmlspecialchars(addslashes($row['name'])) ?>?')">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <p style="margin-top:15px;">
        Total: <?= $result->num_rows ?> student(s)
    </p>

</div>

</body>
</html>
