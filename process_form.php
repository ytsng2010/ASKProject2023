<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["user_name"];
    $subject = $_POST["subject"];
    $email = $_POST["user_email"];
    $message = $_POST["message"];

    // Perform any necessary processing (send email, save to database, etc.)
    // For demonstration purposes, we'll simply print the data here
    echo "Form data received:\n";
    echo "Name: $name\n";
    echo "Subject: $subject\n";
    echo "Email: $email\n";
    echo "Message: $message\n";
} else {
    echo "Invalid request";
}
?>
