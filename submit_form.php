<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    //display the submitted data
    echo "<h2>Form Data Submitted:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
} else {
    // redirect to the form page
    header("Location: contact.html");
    exit;
}

$conn->close();
?>