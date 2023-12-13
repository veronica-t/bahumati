<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'dataForm');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error) {
    die('Connection Failed ' . $conn->connect_error);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $sub = $_POST["submit"];
        $query = $conn->prepare("INSERT INTO user_inquiries (Name,Email,Message,)
        VALUES (?,?,?)");
        $query->bind_param('ssss', $name, $email, $message, $sub);
        $query->execute();
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <meta name="author" content="Veronica Tanukula">

        
        <script>  </script>
    </head>
    </body>

        <form id="formal" method="POST">
        <!-- Name Input -->
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Full Name Required *" required>

        <br>

        <!-- Email Input -->
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Required *" required>

        <br>

        <label for="message"></label>
        <textarea id="message" name="message" rows="6" cols="40" placeholder="Let us know!" required></textarea>

        <br>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
        </form>
    </body>
</html>