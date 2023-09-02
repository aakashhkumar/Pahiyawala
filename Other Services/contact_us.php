<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/../../css/style.css">
    <link rel="shortcut icon" href="../image/logo.jpeg" type="image/png">

    <title>Contact Us</title>


</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="../Login/header.php" class="logo"> <span>Pahiya</span>Wala </a>

        <nav class="navbar">
            <a href="../Login/header.php">home</a>
            <a href="#vehicles">vehicles</a>
            <a href="#services">services</a>
            <a href="#featured">featured</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
        </nav>

        <div id="login-btn">
           <p style="font-size: larger;"> <strong><span><?php echo $_SESSION['usermail']; ?></span></strong><br> </p>
            <a href="../Login/logout.php" class="btn">logout</a>
            <i class="far fa-user"></i>         
        </div>

    </header>

    <div class="login-form-container">

        <span id="close-login-form" class="fas fa-times"></span>

        

    </div>



    <section class="home" id="home">

        <img  class="home-parallax" src="images/help.jpeg" alt="">

    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fa-motorcycle"></i>
            <div class="content">
                <h3>150+</h3>
                <p>Bike Sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>cars sold</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>320+</h3>
                <p>happy clients</p>
            </div>
        </div>

        <div class="icons">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>1500+</h3>
                <p>news cars</p>
            </div>
        </div>

    </section>

    <div class="box-container">
        <p style="font-size: 2.5rem; text-align: center;">Dial our customer care agent on the number below:
            <p style="font-size: 3rem; text-align: center;">
                <a href="#contact"> <i class="fas fa-phone"></i> <b>1234567890</b> </a>
            </p>
            <p style="text-align: center;">------------------------------------------------------------------------</p>
        </p>
        <p style="font-size: 4rem; text-align: center;">
            <i class="fas fa-car"></i> <b>Car Enquiry</b> <br>
            <p style="font-size: 3rem; text-align: center;">
                <a href="#contact"> <i class="fas fa-phone"></i> <b>1234567890</b> </a>
            </p>
            <p style="text-align: center;font-size: 2rem;">Available 24X7</p>
            <p style="text-align: center;">------------------------------------------------------------------------</p>
        </p>
        <p style="font-size: 4rem; text-align: center;">
            <i class="fas fa-motorcycle"></i> <b>Bike Enquiry</b> <br>
            <p style="font-size: 3rem; text-align: center;">
                <a href="#contact"> <i class="fas fa-phone"></i> <b>1234567890</b> </a>
            </p>
            <p style="text-align: center;font-size: 2rem;">Available 24X7</p>
            <p style="text-align: center;">------------------------------------------------------------------------</p>
        </p>
        <p style="font-size: 4rem; text-align: center;">
            <i class="fas fa-motorcycle"></i> <b>Scooter Enquiry</b> <br>
            <p style="font-size: 3rem; text-align: center;">
                <a href="#contact"> <i class="fas fa-phone"></i> <b>1234567890</b> </a>
            </p>
            <p style="text-align: center;font-size: 2rem;">Available 24X7</p>
            <p style="text-align: center;">------------------------------------------------------------------------</p>
        </p>
        <p style="font-size: 4rem; text-align: center;">
            <i class="fas fa-bicycle"></i> <b>Bicycle Enquiry</b> <br>
            <p style="font-size: 3rem; text-align: center;">
                <a href="#contact"> <i class="fas fa-phone"></i> <b>1234567890</b> </a>
            </p>
            <p style="text-align: center; font-size: 2rem;">Available Mon-Fri</p>
            <p style="text-align: center;">------------------------------------------------------------------------</p>
        </p>
        <p style="font-size: 4rem; text-align: center;">
            <i class="fas fa-car"></i> <b>Auto-Rickshaw Enquiry</b> <br>
            <p style="font-size: 3rem; text-align: center;">
                <a href="#contact"> <i class="fas fa-phone"></i> <b>1234567890</b> </a>
            </p>
            <p style="text-align: center; font-size: 2rem;">Available Mon-Fri</p>
            <p style="text-align: center;">------------------------------------------------------------------------</p>
        </p>
        <p style="font-size: 4rem; text-align: center;">
            <i class="fas fa-wrench"></i> <b>Other Services</b> <br>
            <p style="font-size: 3rem; text-align: center;">
                <a href="#contact"> <i class="fas fa-phone"></i> <b>1234567890</b> </a>
            </p>
            <p style="text-align: center; font-size: 2rem;">Available Mon-Fri</p>
        </p>
        </p>
    </div>

    </div>


    <!-- Newsletter -->

    <section class="newsletter">

        <h3>Never miss an update</h3>
        <p>Recieve latest alerts from Pahiya Wala</p>

        <form action="">
            <input type="email" placeholder="Enter your email">
            <input type="submit" value="subscribe">
        </form>

    </section>



    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span> us</h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5366368065065!2d76.8491072148019!3d23.0774433849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1672863431119!5m2!1sen!2sin"
                allowfullscreen="" loading="lazy"></iframe>

                <form action="">
                    <h3>get in touch</h3>
                    <input type="text" placeholder="your name" class="box">
                    <input type="email" placeholder="your email" class="box">
                    <input type="tel" placeholder="subject" id="Subject" class="box">
                    <textarea placeholder="your message" id="Message" class="box" cols="30" rows="10"></textarea>
                    <input type="button" value="send message" id="EmailButton" class="btn" onclick="SendMail()">
                </form>

        </div>


    </section>

    <section class="footer" id="footer">

        <div class="box-container">



            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
                <a href="Other Services/Terms and Condition/t&c.html"> <i class="fas fa-arrow-right"></i> Terms and Conditions </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> pahiyawala@gmail.com </a>
                <a href="https://goo.gl/maps/adzVULcYLZRwrspG8" target="_blank"> <i class="fas fa-map-marker-alt"></i> Kotri Kalan, Bhopal, Madhya Pradesh - 466114 </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="https://www.facebook.com/profile.php?id=100089343104174" target="_blank"> <i class="fab fa-facebook-f" target="_blank"></i> facebook </a>

                <a href="https://twitter.com/Pahiyawala" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>

                <a href="https://www.instagram.com/pahiyawala/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>

                <a href="https://www.linkedin.com/in/pahiya-wala-137073262/" target="_blank"> <i class="fab fa-linkedin" target="_blank"></i> linkedin </a>

                <a href="https://in.pinterest.com/pahiyawala/" target="_blank"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>


    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="../js/script.js"></script>

</body>

</html>