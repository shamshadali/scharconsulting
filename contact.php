<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schar Solutions - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .header-image {
            width: 100%;
            height: 400px;
            background-size: cover;
            justify-content: center;
            align-items: center;
            background: url('/assets/images/contact_us.jpg');
        }
        .main-div {
            padding: 2rem;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 100px;
        }
        h1 {
            color: #35424a;
            font-weight: bold;
        }
        form {
            display: grid;
            gap: 1rem;
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
        .button {
            background-color: #35424a;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            border-radius: 4px;
        }
        .button:hover {
            background-color: #2c3840;
        }
        footer {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="header-image">

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
                <h1>Contact Us</h1>
                <p>Please fill out the form below to get in touch with us. We'll get back to you as soon as possible.</p>
                <div style="margin-top:10px;">
                    <form action="contact_submitted.php" method="POST">
                        <p>
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </p>
                        <p>
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" required>
                        </p>
                        <p>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </p>
                        <p>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="10" cols ="4" required></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Submit" class="button">
                        </p>
                    </form>
                </div>
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
