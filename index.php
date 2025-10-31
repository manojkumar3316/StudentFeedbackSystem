<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Student Feedback Form</h2>
    <!-- <div class="container"> -->
        <form method="POST">
            <label for="">Name :</label>
            <input type="text" name="name" placeholder = "Your Name" required id=""><br>
            <label for=""> Email :</label>
            <input type="email" name="email" placeholder = "Your Email" required id=""><br>
            <label for="">Rating :</label>
            <input type="number" name="rating" placeholder = "Rating (1-5)" min="1" max="5" required id=""><br>
            <label for="">Comment Box :</label>
            <textarea name="comments" placeholder = "Enter feedback..." required id=""></textarea><br>
            <button type="submit" name="submit" >SUBMIT</button>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $rating = $_POST['rating'];
            $comments = $_POST['comments'];

            $query = "INSERT INTO feedback(name,email,rating,comments) VALUES('$name','$email','$rating','$comments')";
            // sleep(2);
            if (mysqli_query($conn,$query)){
                echo"<p class='success'>Thank you for your feedback!!!</p>" ;
                exit;
            } 
            
        }
        ?>
    <!-- </div> -->
</body>
</html>

<!-- else{
                echo"Error : " . mysqli_error($conn);
            } -->