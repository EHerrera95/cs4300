<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F & M's</title>
    <link href='https://fonts.googleapis.com/css?family=Nova Flat' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "assets/css/index.php" ?>
</head>

<body>
    <?php require "config/connection.php" ?>
    <header>
        <nav>
            <a href="index.php" class="logo">
                <img src="img/logo1.png" height="80">
            </a>

            <ul>
                <li>
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </li>
                <li class="active">
                    <a href="testimonials.php" class="nav-link">Testimonials</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="products-sec">
            <h1 class="title">Testimonials</h1>
        </section>
    </main>
    <footer>
        <div class="social">
            <h3 class="f-title">Social Media</h3>
            <ul>
                <li>
                    <i class="fa fa-facebook-square"></i>
                    <a href="#">Facebook</a>
                </li>
                <li>
                    <i class="fa fa-instagram"></i>
                    <a href="#">Instagram</a>
                </li>
                <li>
                    <i class="fa fa-twitter-square"></i>
                    <a href="#">Twitter</a>
                </li>
                <li>
                    <i class="fa fa-google-plus-square"></i>
                    <a href="#">Google</a>
                </li>
            </ul>
        </div>
        <div class="contact">
            <h3 class="f-title">Contact Us</h3>
            <ul>
                <li>
                    <address>
                        ABC Jewlers <br>
                        XYZ STREET <br>
                        New York
                    </address>
                </li>
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:email@xyz.com">email@xyz.com</a>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <a href="tel:(590) 423 446 924">(590) 423 446 924</a>
                </li>
            </ul>
        </div>
        <div class="frequently">
            <h3 class="f-title">Frequently asked questions</h3>
            <ul>
                <li>
                    Questions???
                </li>
                <li>
                    Questions???
                </li>
                <li>
                    Questions???
                </li>
                <li>
                    Questions???
                </li>
                <li>
                    Questions???
                </li>
            </ul>
        </div>
        <div class="sub-footer">
            <p>Current Date & Time: <span id="time"></span></p>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>
