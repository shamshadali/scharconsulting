<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schar Software Development and IT Consulting Services</title>
  <meta name="description" content="We offer custom software development and IT consulting services to help businesses streamline operations and enhance productivity.">
  <meta name="keywords" content="software development, IT consulting, custom software solutions, technology consulting, salesforce development, cloud computing, aws, google cloud, azure, technical design">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
   <script type="text/javascript">
        let slider = document.querySelector('.testimonial-slider');
        let testimonials = document.querySelectorAll('.testimonial');
        let currentIndex = 0;

        setInterval(() => {
          currentIndex++;
          if (currentIndex >= testimonials.length) {
            currentIndex = 0;
          }
          slider.scrollLeft = testimonials[currentIndex].offsetLeft;
        }, 1000);
   </script>
  <link href="sal.css" rel="stylesheet">
  <style>
  body {
        font-family: Open Sans, sans-serif !important
        line-height: 1.6;
        margin: 0;
        padding: 0;
        background-color: #ffffff;
        }
        header {
            background-color: #ffffff;
            color: black;
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
        .center-content {
            padding: 2rem;
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
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
    }
    .img-class{
        width: auto;
        height: auto;
        object-fit: cover;

    }

</style>
</head>
<body>
  <?php include 'header.php' ?>
  <div class="header-image" style="position: relative;">
      <img src="/assets/images/home.jpg">
      <div class="row py-4" style="position: absolute; top: 40%; left: 5%; color: white; padding: 20px; font-size:35px; font-weight:bold;">
          Unlock growth potential with innovative technology solutions
      </div>
  </div>

  <section>
      <div>
          <div class="row py-4" style="padding:40px; height:500px; background: linear-gradient(to right, #ffffff, #e6faeb);box-shadow: 0 0 10px rgba(0,0,0,0.2);">
              <div class="grid grid-cols-4 gap-4 container mx-auto py-8">
                  <div class="px-4">
                      <img src="/assets/images/business.png" alt="Technical Design" class="img-class" style="width: 120%; height: 120%;" loading="lazy">
                  </div>
                  <div class="col-span-3" style="padding-left: 20px;">
                      <h2 class="text-3xl font-bold mb-2">Who we are</h2>
                      <div class="text-gray-700 text-xl mb-4">
                          <p>We are a technology driven software development and services company specializing in developing products, architecting platforms and delivering end-to-end solutions to customers around the world.</p>
                          <p style="padding-top:10px;">We specialize in staff augmentation in the areas of salesforce development, event driven architecture, cloud computing, monolith to microservices migration.</p>
                          <p style="padding-top:10px;">We embrace a microservices centric approach starting with consultation in solution design, development, testing,  deployment and production support.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section>
      <h2 class="text-3xl font-bold mb-2 text-center py-6">What we offer</h2>
      <div class="row">
          <div class="grid grid-cols-4 gap-4 container mx-auto py-8 space-y-8">
              <div class="col-span-3">
                  <div class="text-gray-700 text-xl mb-4">
                      <div class="py-10">
                          <img src="/assets/images/team.svg" alt="Technical Design" style="width: 8%; height: 8%; float: left; margin-right: 10px;">
                          <label>Staff Augmentation</label>
                          <p>We have a huge pool of internal technical resources specializing in cloud computing, event driven architecture, breaking monoliths into microservices, salesforce feature development and administration, manual and automation testing.</p>
                      </div>
                      <div class="py-10">
                          <img src="/assets/images/end_to_end.svg" alt="Technical Design" style="width: 8%; height: 8%; float: left; margin-right: 10px;">
                          <label>End to end product delivery</label>
                          <p>Bring your requirements to life with our technically skilled team of developers. We undertake end to end projects in organization specific framework or design new platform from scratch.</p>
                      </div>
                      <div class="py-10">
                          <img src="/assets/images/tech_approach.svg" alt="Technical Design" style="width: 8%; height: 8%; float: left; margin-right: 10px;">
                          <label>Solution Designing</label>
                      <p>Our team of internal experienced architects can work with your architect team to design robust, scalable, and efficient systems.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <section class="text-center" style="background-color:#f4f4f4;box-shadow: 0 0 10px rgba(0,0,0,0.2); height:500px; padding:40px;">
      <div class="grid grid-cols-4 gap-4 h-full" style="padding-top:150px;">
          <div class="col-span-2">
              <h2 class="text-3xl font-bold mb-2">Want to connect with us?</h2>
              <p>Please submit your information and we would revert back to you as soon as possible.</p>
          </div>
          <div class="col-span-1">
              <a href="/contact"><input type="button" name="Contact Us" value ="Contact Us" style="background-color:#35424a; color:#ffffff;"/></a>
          </div>
      </div>
  </section>

  <section class="text-center py-8">
      <h2 class="text-3xl font-bold mb-2">Testimonials</h2>
        <section class="text-center grid grid-cols-3 gap-3 py-8 px-6 italic">
          <div>
              <div class="container mx-auto">
                  <p class="text-gray-700 text-l mb-4 py-8">
                      Schar Consulting team worked with us for 2 years. Team was very professional and delivered the project on time. We are extremely happy with the services provided.
                      <br/> - Steven, VP Engineering
              </div>
          </div>
          <div class="container mx-auto">
              <p class="text-gray-700 text-l mb-4 py-8">
                  Really happy with Schar Consulting team, they are really good at what they do.
                  <br/> - Amit Gupta, CTO
          </div>
          <div class="container mx-auto">
              <p class="text-gray-700 text-l mb-4 py-8">
                  Schar Consulting team delivered online coupon functionality for us. Team undertook end-to-end delivery of the project including technical design, implementation and production support.
                  <br/> - Mark Schramack, VP Engineering
          </div>
        </section>
  </section>


<!--  <div class="center-content">-->
<!--    <div class="grid grid-cols-4 gap-4  container mx-auto py-8 space-y-8">-->
<!--        <div class="col-span-3">-->
<!--          <h2 class="text-3xl font-bold mb-2">Engineering Services</h2>-->
<!--          <p class="text-gray-700 text-xl mb-4">   -->
<!--            <label>Engineering Services</label> -->
<!--            Technology opens new doors to customer intimacy, product innovation, and revenue streams. Yet with all the promise of new technologies and their applications, without proper management, technology is just another source of overhead.-->
<!--            Software Development-->
<!--            Software Testing-->
<!--            Solution Architecture-->
<!--            Business Analysis-->
<!--            Operations Support-->
<!--            Product Management-->
<!--            Technical Communication -->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--  </div>-->

  <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
      &copy; 2020 Schar Software Solutions. All rights reserved.
    </div>
  </footer>
</body>
</html>