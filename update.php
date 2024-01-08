    <?php
    include 'connection.php';

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $newName = $_POST['newName'];
        $newActive = $_POST['newActive'];
    

        $sql_update = "UPDATE project_skills SET name='$newName',active='$newActive'  WHERE id=$id";
        $conn->query($sql_update);
        

        header("Location: read.php"); 
        exit();
    }

    $conn->close();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Project</title>
        <link rel="stylesheet" href="update.css">
    </head>
    <body>
    <form method="post">
        Project ID: <input type="number" name="id" required><br>
        Updated Project Skills: <input type="text" name="newName" required><br>
        Active status: <input type="number" name="newActive" required><br>

        <input type="submit" name="update" value="Update">
        
        
    </form>
    <a href="read.php">Back to Projects Skills</a>

    </body>
    </html>
