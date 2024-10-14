<style>
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
        main {
            padding: 1rem;
        }

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
</style>
<header>
    <nav>
      <div><a href="/"><img src="/assets/images/schar.png" height="100px" width="100px"></a></div>
      <ul class="nav-links">
          <li><a href="/index.php">Home</a></li>
          <li><a href="/about.php">About Us</a></li>
          <li><a href="/services.php">Services</a></li>
          <li><a href="/contact.php">Contact Us</a></li>
      </ul>
      <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
      </div>
    </nav>
</header>
