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
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .nav-links {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .nav-links li {
            margin-left: 20px;
        }
        .nav-links a {
            color: black;
            text-decoration: none;
        }
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: white;
            margin: 2px 0;
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
            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #35424a;
                padding: 1rem;
            }
            .nav-links.show {
                display: flex;
            }
            .nav-links li {
                margin: 0.5rem 0;
            }
            .hamburger {
                display: flex;
            }
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
                <h1>Contact Us</h1>
                <p>Please fill out the form below to get in touch with us. We'll get back to you as soon as possible.</p>
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
                        <input type="submit" value="Submit">
                    </p>
                </form>
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