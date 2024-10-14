<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schar Consulting - Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #ffffff;
            color: white;
            padding: 1rem;
        }
        .header-image {
            width: 100%;
            height: 300px;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        .header-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .main-div {
            padding: 2rem;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 100px;
            height: 300px;
        }
        h1 {
            color: #35424a;
        }
        form {
            display: grid;

        }
        label {
            font-weight: bold;
        }
        input, textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #35424a;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #2c3840;
        }
        footer {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
        @media (max-width: 768px) {
            .header-image {
                height: 200px;
            }
            main {
                padding: 1rem;
            }
            p {
                margin: 0px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php' ?>

    <div class="header-image">
        <img src="/assets/images/contact_us.jpg"  />
    </div>

    <section style="display: flex;">
        <div class="px-2 col-span-2" style="flex: 1;  display: flex; justify-content: center; padding-top:80px;">
            <div>
               <label style="font-size:30px; color:#35424a;">Connect with a technical expert today!</label>
                <ul>
                    <li>Priority treatment for every partner</li>
                    <li>Highly skilled resource pool</li>
                    <li>Quality assurance at every step of web development cycle</li>
                    <li>Every end-to-end product delivery comes with production support for 3 weeks</li>
                </ul>
            </div>
        </div>
        <div class="col-span-3" style="flex: 1;">
            <div class="main-div col-span-2">
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

            </div>
        </div>
        <p style="color: green;"><flash[:notice]></p>
        <p style="color: red;"><flash[:alert]></p>
    </section>

    <footer>
        <p>&copy; 2020 Schar Software Solutions. All rights reserved.</p>
    </footer>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('show');
        });
    </script>
</body>
</html>


