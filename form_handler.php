<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    
    // Store the details in Details.txt
    $file = fopen("Details.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nMessage: $message\n---------------------\n");
    fclose($file);

    // Send an email alert
    $to = "worldson70@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: noreply@yourwebsite.com";

    mail($to, $subject, $body, $headers);

    // Redirect back to the previous page
    echo "<script>alert('Form submitted successfully!'); window.history.back();</script>";
}
?>
