<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="viewtable">
    <h2 class="vth">All Student Feedback</h2>
    <table class="viewtable">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Rating</th>
            <th>comments</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM FEEDBACK");
        while ($row = mysqli_fetch_assoc($result)) {
            # code...
            echo"<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['rating']}</td>
                    <td>{$row['comments']}</td>
                </tr>";
        }
        ?>
    </table>
    
</body>
</html>