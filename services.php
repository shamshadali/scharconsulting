<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schar Solutions</title>
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
        .header-image {
            width: 100%;
            height: 500px;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
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
        label {
            font-weight: bold;
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

    }

    .circle-container {
        height: 700px;
        padding:50px;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    .circle {
        width: 500px;
        height: 500px;
        border-radius: 50%;
    }
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.text-xla {
  animation: fadeIn 2s ease-in-out;
}
</style>
</head>
<body>
  <?php include 'header.php' ?>
    <div>
        <img src="/assets/images/technology.png" style= "width:100%;"/>
    </div>

<section style="display: flex; padding-left:40px;">
    <div class="py-6 col-span-2" style="flex: 1; display: flex; justify-content: center; align-items: center;">
      <div class="circle" style="background-color: #e2fce1; padding-left:40px; display: flex; justify-content: center; align-items: center; color: #405e3f;">
          <label class="text-2xl">Highly skilled technical pool</label>
      </div>
    </div>

    <div class="col-span-2">
        <div style="padding-right:20px; margin-top:20px;">
            <label class="text-xl">
                We have huge pool of internal highly technical resources that can supplement your team and boost your development cycle.</label>
            <ul style="padding-top:20px; list-style:circle;"><label>We offer:</label>
                <li>Staff augmentation</li>
                <li>Contract to hire</li>
                <li>Direct hire</li>
            </ul>
        </div>
    </div>
</section>

  <section style="display: flex; padding-left:40px;">
      <div class="col-span-2" style="flex: 1; display: flex; justify-content: center; align-items: center;">
          <div style="padding-right:20px;">
              <label class="text-xl">With our years of technical experience we help companies come up with technical architecture for their product or feature.</label>
              <ul style="padding-top:20px; list-style:circle;"><label>We have helped clients in:</label>
                  <li>Salesforce administration and technical design</li>
                  <li>Event driven architecture for distributed applications</li>
                  <li>Data pipeline to read data from monolithic apps to new architecture</li>
                  <li>Migrating from monolith to building new microservices</li>
              </ul>
          </div>
      </div>
      <div class="py-6 col-span-2" style="flex: 1; display: flex; justify-content: center; align-items: center; color: #257fc4;">
          <div class="circle" style="background-color: #b5ebff; padding-left:40px; display: flex; justify-content: center; align-items: center;">
              <label class="text-xl">Solution Design Consulting</label>
          </div>
      </div>
  </section>

  <section style="display: flex; padding-left:40px;">
      <div class="py-6 col-span-2" style="flex: 1; display: flex; justify-content: center; align-items: center;">
          <div class="circle" style="background-color: #f7dbb7; padding-left:40px; display: flex; justify-content: center; align-items: center; color: #405e3f;">
              <label class="text-2xl">Technologies with strong expertise</label>
          </div>
      </div>

      <div class="col-span-2" style="flex: 1; display: flex; justify-content: center; align-items: center;">
          <div style="padding-right:20px;">
              <label class="text-xl">We have strong expertise in the latest frontend and backend technologies</label>
              <ul style="padding-top:20px; list-style:circle;"><label>Technical services are offered in:</label>
                  <li>Java, Springboot, goLang, Ruby</li>
                  <li>AWS cloud computing like Lambda, EventBridge, DynamoDB, EventStream, Kafka, ElasticSearch</li>
                  <li>Salesforce, Iterable, Kubernetes, Jenkins, Github, Docker</li>
                  <li>Protobuff, Json, GRPC/REST APIs</li>
              </ul>
          </div>
      </div>
  </section>

  <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
      &copy; 2020 Schar Software Solutions. All rights reserved.
    </div>
  </footer>
</body>
</html>
