

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project Skills</title>
    <link rel="stylesheet" href="add.css">
</head>

    <body>

        <?php include 'connection.php'; ?>

        <?php
        if (isset($_POST['create'])) {
            $id =$_POST['id'];
            $name = $_POST['name'];
            $active = $_POST['active'];

            $sql_create = "INSERT INTO project_skills (id,name, active) VALUES ('$id','$name', $active)";
            $conn->query($sql_create);

            header("Location: read.php"); 
            exit();
            
        }

        $conn->close();
        ?>

        <h2>Add Project Skills</h2>
        <form method="post">
            Project ID:<input type="number" name="id" required placeholder="Enter Project ID"><br><br>
            Name: <input type="text" name="name" required placeholder="Enter Project skills "><br><br>
            Active Status: <input type="text" name="active" placeholder="Enter Active Status" required><br>
            <input type="submit" name="create" value="Add Skills">
        </form>

        <a href="read.php">Back to Projects Skills</a>

    </body>

    </html>