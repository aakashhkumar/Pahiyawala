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
    <link rel="icon" type="image/png" href="../image/logo.png">

    <title>Ujaas Energy eZy</title>

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

        <h3>Ujaas Energy eZy</h3>
        <img src="../image/Scooter/ola s1 images/cover.jpg" class="responsive" alt="">



    </section>


    <section>
        <div class="Vehicle_bar" id="Vehicle_bar">
            <p><b>
                <a href="#Images">Images           </a>
                <a href="#Specifications">Specifications        </a>
                <a href="#Price_Variants">Prices</a>
                <a href="#Summary">Summary</a>
                <a href="#featured">Colour</a>
                </b>
            </p>
        </div>
    </section>

    <section class="vehicles" id="vehicles">

        <h4 class="heading" id="Images"> Images </h4>

        <div class="swiper vehicles-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (252).png" alt="">
                    <div class="content">
                        <h3>Cross View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (253).png" alt="">
                    <div class="content">
                        <h3>Front View</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (255).png" alt="">
                    <div class="content">
                        <h3>Headlight</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (254).png" alt="">
                    <div class="content">
                        <h3>Taillight</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (257).png" alt="">
                    <div class="content">
                        <h3>Speedometer</h3>


                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (256).png" alt="">
                    <div class="content">
                        <h3>Seat</h3>


                    </div>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    <section style="text-align: center;">
        <a href="#Price_Variants" class="btn">Checkout</a>
    </section>

    <!-- Overview or Specifications of the Vehicle -->
    <section class="Specifications " id="Specifications">
        <h3 class="heading">Specifications </h3>
        <div style="font-size: 1.2vw;">
            <i class="fa-solid fa-indian-rupee-sign"></i><strong> Price</strong> :- ₹ 32 Thousands onwards &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-charging-station"></i><strong> Fuel</strong> :- Electric &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
            <i class="fa-solid fa-gears"></i><strong> Motor Power</strong> :- 250 Watt <br>
            <i class="fa-solid fa-gears"></i><strong> Motor </strong> :- BLDC &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-road"></i><strong> Driving Range</strong> :- 60 km &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-battery-three-quarters"></i><strong> Charging Time </strong> :-6 - 7 hours&nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
            <!-- <i class="fa-solid fa-couch"></i><strong> Seating Capacity</strong> :- 5 People <br> -->
            <i class="fa-solid fa-car-battery"></i> <strong> Battery Capacity </strong> :- 1.24 kWh &nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <i class="fa-solid fa-suitcase-rolling"></i> <strong>Boot</strong> :- 30 litre &emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa-solid fa-car-side"></i> <strong> Max Speed</strong> :- N/A &nbsp;
        </div>
    </section>

    <!-- Prices of Different Varriants  -->
    <section class="Price_Variants" id="Price_Variants">
        <h3 class="heading">Price <span>Variants</span> </h3>
        <div style="overflow-x:auto">
            <table style="width:100%">
                <tr>
                    <th>Versions</th>
                    <th>Ex-Showroom price</th>
                    <th>Specifications</th>
                </tr>

                <tr>
                    <td>eZy LA 48V</td>
                    <td>₹ 34,863</td>
                    <td>60 Km, 48 V, 6-7 Hrs</td>
                    <td><a href="#" class="btn">buy</a></td>
                </tr>
            </table>
        </div>


    </section>


    <!-- Summary of the Vehicle -->
    <section class="Summary" id="Summary">
        <h3 class="heading">Summary </h3>
        <p>The Ujaas eZy price in Delhi is Rs 31,880 (ex-showroom). You can also check on-road price (which includes ex-showroom price + RTO charges + Insurance and other costs) of the eZy in Delhi. You can also get Ujaas eZy at Rs/month at Rate Of Interest
            of upto 9.7%%.
            <span id="dots">...</span><span id="more">
        <br>
        The top rivals for the eZy are Avon E Plus starting at Rs 25,000, Nexzu Rompus Plus starting at Rs 33,999, Hero Lectro F3i starting at Rs 40,999, Motovolt Ice starting at Rs 28,449.
        <br>
        </p>
        <button onclick="myFunction()" id="myBtn" style="background-color:#d7f8db; cursor: pointer;">Read more</button>

    </section>

    <!-- Colour Variants of the Vehicles -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Colour</span> Variants </h1>

            <div class="swiper featured-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (250).png" alt="Red">
                        <div class="content">
                            <h3>Red</h3>
                        </div>
                    </div>

                    <div class="swiper-slide box">
                        <img src="../image/Scooter/Ujaas Energy eZy/Screenshot (251).png" alt="Red">
                        <div class="content">
                            <h3>Blue</h3>
                        </div>
                    </div>

                </div>

                <div class="swiper-pagination"></div>

            </div>


    </section>

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
                <h3>contact info</h3>
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