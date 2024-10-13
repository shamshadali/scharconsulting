<?php
// Check if the form is submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Check if all required fields are filled
    if (!empty($name) && !empty($phone) && !empty($email)) {

        // Recipient email address
        $to = "saifi.shamshad@gmail.com";  // Replace with your email address

        // Subject of the email
        $subject = "New Contact Form Submission";

        // Construct the email message
        $message = "You have received a new contact form submission.\n\n";
        $message .= "Name: " . $name . "\n";
        $message .= "Phone: " . $phone . "\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Message: " . $message . "\n";

        // Headers
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            // Email sent successfully
            echo "<h2>Thank you for contacting us!</h2>";
            echo "<p>We have received your message and will get back to you soon.</p>";
        } else {
            // Failed to send the email
            echo "<h2>Oops! Something went wrong.</h2>";
            echo "<p>We couldn't send your message. Please try again later.</p>";
        }

    } else {
        // If any field is empty, display an error
        echo "All fields are required!";
    }
} else {
    echo "Invalid form submission.";
}
?>
