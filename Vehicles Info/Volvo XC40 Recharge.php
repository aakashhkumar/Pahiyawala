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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="Vehicles Info.css">
    <!--favicon-->
    <link rel="shortcut icon" href="../image/LOGO.jpg" type="image/png">

    <title>Volvo XC40 Recharge </title>

</head>

<body>

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="../login/header.php" class="logo"> <span>Pahiya</span>Wala </a>

        <nav class="navbar">
            <a href="../login/header.php">home</a>
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

        <h3>Volvo XC40 Recharge</h3>
        <img src="../image/Cars/Volvo XC40 Recharge/Volvo XC 40 Recharge.png" class="responsive" alt="">



    </section>


    <section>
        <div class="Vehicle_bar" id="Vehicle_bar">
            <p><b>
                <a href="#Images">Images           </a>
                <a href="#Specifications">Specifications        </a>
                <a href="#Price_Variants">Prices</a>
                <a href="#Summary">Summary</a>
                <a href="#Brochure">Brochure</a>
                <a href="#featured">Colour</a>
                <a href="#VIDEO">Video</a></b>
                <b><a href="#Test_drive">Book Test Ride</a></b>
                </b>
            </p>
        </div>
    </section>

    <section class="vehicles" id="vehicles">

        <h4 class="heading" id="Images"> Images </h4>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Volvo XC40 Rechargable.jpg" alt="Volvo XC40 Recharge">
                    <div class="content">

                        <h3>Volvo XC40 Recharge</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Side View.jpg" alt="">
                    <div class="content">
                        <h3>Side View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Front View.png" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Boot View.png" alt="">
                    <div class="content">
                        <h3>Boot View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Interior.jpg" alt="Interior">
                    <div class="content">
                        <h3>Interior</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/" alt="">
                    <div class="content">
                        <h3> </h3>

                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section style="text-align: center;">
        <a href="#" class="btn">check out</a>
    </section>

    <!-- Overview or Specifications of the Vehicle -->
    <section class="Specifications " id="Specifications">
        <h3 class="heading">Specifications </h3>
        <div style="font-size: 1.2vw;">
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 56.90 Lakh onwards &emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Transmission</strong> :- Automatic<br>
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 418 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-40 hours &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br>
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity</strong> :- 78 kWh &nbsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-car-side"></i> <strong> Body Type</strong> :- 5 seater SUV &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 414
        </div>
    </section>

    <!-- Prices of Different Varriants  -->
    <!-- <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Price <span>Variants</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Versions</th>
                    <th>Ex-Showroom price</th>
                    <th>Specifications</th>
                </tr>
                <tr>
                    <td>Nexon EV Max XZ Plus 3.3 KW</td>
                    <td>₹ 18.34 Lakh</td>
                    <td> Cruise Control, Push Button Start, Wireless Charger, Alloy Wheels, Steering Mounted Controls</td>
                </tr>
            </table>
        </div>


    </section>

    <!- Summary of the Vehicle 
     <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>Tata Motors launched the new long-range Nexon EV Max in India on 11 May, 2022. This electric SUV features a larger battery pack with significantly more travel range and several new features. It is available in three paint options – Pristine White,
            Daytona Grey, and a new Intensi-Teal across two variants – XZ+ and XZ+ Lux.
            <span id="dots">...</span><span id="more">
        
         <br><br><strong>Exterior</strong><br>
        
         The new Nexon EV Max bears the same exterior design as the Nexon EV. Tata continues to offer projector headlamps, fog lamps, and the signature electric-blue inserts. However, the new electric SUV comes with four-wheel disc brakes and new 16-inch alloys. <br>
         <br>
         Tata has given it a few new features too, such as an electronic stability program with i-VBAC, hill hold assist, hill descent control, three driving modes (Eco, City, and Sport), multi-mode regenerative braking, and cruise control. 
        
         <br><br><strong>Interior</strong><br>
        
        
         The Nexon EV Max features a new Makarana Beige interior with leatherette upholstery for the seats. In addition, it gets cooled front seats, auto-dimming IRVM, a wireless handset charger, smartwatch compatibility, an air purifier, and a new drive-mode rotary dial. 
        
         <br><br><strong>Electric powertrain</strong><br>
        
        
          The new Nexon EV Max boasts a 40.5kWh battery pack delivering 141bhp and 250Nm. As per ARAI, this larger battery pack gives out a 437km travel range. Tata Motors offers a new 7.2kW AC charger with the Nexon EV Max, while a 3.3kW AC charger is available too.   <br>
         <br>
        
        
         The SUV achieves zero to 100kmph in under nine seconds with an upgraded top speed rated at 140kmph. Meanwhile, the Nexon EV Max can be charged from zero to 80 per cent in a claimed 56 minutes with the 50kW DC fast charger, whereas the 7.2kW charger takes 6.5 hours.
        </span>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section> -->

    <!-- For Download Brochure of the Vehicle -->
    <section style="text-align: center;" id="Brochure">
        <a href="https://www.volvocars.com/in/l/brochures/" class="btn" target="_blank">Click Here!! For Brochure</a>
    </section>


    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Onyx Black.jpg" alt="Onyx Black">
                    <div class="content">
                        <h3>Onyx Black</h3>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Crystal White.png" alt="Crystal White">
                    <div class="content">
                        <h3>Crystal White</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Fjord Blue.png" alt="Fjord Blue">
                    <div class="content">
                        <h3>Fjord Blue</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Thunder Gray.jpg" alt="Thunder Gray">
                    <div class="content">
                        <h3>Thunder Gray</h3>
                        <!-- <div class="price">$55,000/-</div> -->
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Cars/Volvo XC40 Recharge/Front View.png" alt="Sage Green">
                    <div class="content">
                        <h3>Sage Green</h3>
                        <!-- <a href="#" class="btn">check out</a> -->
                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>


    </section>

    <!-- Video Information of Vehicles -->
    <section class="VIDEO" id="VIDEO">
        <h3 class="heading">VIDEO </h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/xcNh-hG23Wc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

        <!-- <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/uwgfiJ-xEW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
     <br> -->


        <br> <strong>For More Information : </strong> <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjylL26qtb8AhVkmWYCHQxEAm0YABAAGgJzbQ&ohost=www.google.com&cid=CAESa-D2mNKPpAJgFlf0ycPNYRmgpybmfqvmPhpaSe5fs9ZGPGwKhHhi8AoDZdO5cv4wEDWD8imVkRHqW0flLdzkMZr2P_qO-DQf7TmF3hM0A1DKHHmvZ_i7ij6mL-nGYpYnY79FQnVuXJ9EQYEx&sig=AOD64_3SDttdQy6-TgBvrE_K2EDvgLOGWQ&q&adurl&ved=2ahUKEwjJybK6qtb8AhU7xDgGHX1KC1QQ0Qx6BAgIEAE"
            target="_blank">Click Here </a>

    </section>

    <section class="Test_drive" id="Test_drive">
        <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjG4dPKqtb8AhUDDisKHRO3AiEYABAEGgJzZg&ohost=www.google.com&cid=CAESa-D2UuElvQFxCgE-ZLEM2PN-7mP6SXdTemm8SywuGebAhD3biMzjb2yPkK1wjmbZW0Fnki8jfSznssmclfSHOL-q8Od46ehyKcAYBfYfYvJc7Q2zg_5D1TZgtAQpxU8s3pfFBoJGhkCDEBi1&sig=AOD64_0uFmc0DMhlwW6WdEQnEJVPNCoE7w&adurl&ved=2ahUKEwipv8rKqtb8AhWH7TgGHRBqAF0QqyQoAHoECAsQBQ"
            class="btn" target="_blank">Book a Test Ride</a>

    </section>


    <!--     
<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, suscipit.</p>

   <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
   </form>

</section> -->


    <!-- Footer Section -->

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
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> pahiyawala@gmail.com </a>
                <a href="https://goo.gl/maps/adzVULcYLZRwrspG8" target="_blank"> <i class="fas fa-map-marker-alt"></i> Kotri Kalan, Bhopal, Madhya Pradesh - 466114 </a>
            </div>

            <div class="box">
                <h3>Social media</h3>
                <a href="https://www.facebook.com/profile.php?id=100089343104174" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com/Pahiyawala" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.instagram.com/pahiyawala/" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
                <a href=" www.linkedin.com/in/pahiyawala" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="https://in.pinterest.com/pahiyawala/" target="_blank"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>


    </section>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="Vehicles Info.js"></script>

</body>

</html>