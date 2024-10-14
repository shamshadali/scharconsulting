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
            background: url('/assets/images/office.png');
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
        <div class="row py-4" style="position: absolute; top: 40%; left: 5%; color: #35424a; padding: 20px; font-size:35px; font-weight:bold; ">
            Years of Experience in Software Development
        </div>
    </div>

    <section style="padding:40px; height:50vh;">
        <div class="px-2 col-span-1">
            <label class="text-2xl">About Schar Consulting</label>
        </div>
        <div class="px-2 col-span-1 py-4">
            With over 22 years of experience in software development and services, Schar Consulting is a trusted in the IT service industry.
            We have a team of highly skilled professionals who are dedicated to providing the best technical solutions to our clients.
            Our services include staff augmentation, solution design and end to end delivery in web development, mobile app development, third party integrations and custom software development.
            <div class="grid grid-cols-4 gap-4 h-full" style="padding-top:50px;">
                <div class="col-span-2">
                    <p>Contact us today to learn more about how we can help you achieve your business goals.</p>
                </div>
                <div class="col-span-1">
                    <a href="/contact"><input type="button" name="Contact Us" value ="Contact Us Now" style="background-color:#35424a; color:#ffffff;"/></a>
                </div>
            </div>
        </div>
    </section>
<!--    <section class="text-center" style="background-color:#f4f4f4;box-shadow: 0 0 10px rgba(0,0,0,0.2); height:500px; padding:40px;">-->
<!--        <div class="grid grid-cols-4 gap-4 h-full" style="padding-top:150px;">-->
<!--            <div class="col-span-2">-->
<!--                <h2 class="text-3xl font-bold mb-2">Want to connect with us?</h2>-->
<!--                <p>Please submit your information and we would revert back to you as soon as possible.</p>-->
<!--            </div>-->
<!--            <div class="col-span-1">-->
<!--                <a href="contactus.html"><input type="button" name="Contact Us" value ="Contact Us" style="background-color:#35424a; color:#ffffff;"/></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

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
