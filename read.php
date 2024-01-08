<?php
include 'connection.php';

$sql_read = "SELECT * FROM project_skills";
$result = $conn->query($sql_read);

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Skills</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
<h2>Project Skills</h2><br>
<a href="add_project.php">Add New Skills</a><br>
<a href="update.php">Update Skills</a><br>

<table>
    <tr>
        <th>Project ID</th>
        <th>Project Skills</th>
        <th>Active Status</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['active']}</td>
            </tr>";
    }
    ?>
</table> 
</body>
</html>
