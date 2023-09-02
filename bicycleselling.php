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
    <title>Bicycle Selling</title>
    <link rel="stylesheet" href="css/stylevehicles.css">
</head>

<body>
    <section>
        <header class="header">

            <div id="menu-btn" class="fas fa-bars"></div>

            <a href="login/header.php" class="logo"> <span>Pahiya</span>Wala </a>

            <nav class="navbar">
                <a href="login/header.php">home</a>
                <a href="#vehicles">vehicles</a>
                <a href="#services">services</a>
                <a href="#featured">featured</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>

            <div id="login-btn">
           <p style="font-size: larger;"> <strong><span><?php echo $_SESSION['usermail']; ?></span></strong><br> </p>
            <a href="Login/logout.php" class="btn">logout</a>
            <i class="far fa-user"></i>         
        </div>

        </header>
    </section>

    <section>
        <div class="login-form-container">

            <span id="close-login-form" class="fas fa-times"></span>

            

        </div>
    </section>

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>150+</h3>
                <p>branches</p>
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
                <p>new bicycles</p>
            </div>
        </div>

    </section>

    <section class="heading" id="headings">
        <h1>Choose your Bicycle </h1>
    </section>

    <section class="services" id="services">

        <div class="box-container">

        <div class="box">
                <img src="image/Cycles/BattRE Electric Mobility Huge/download (2).jpg" alt="">
                <div class="content">
                    <h3>BattRE Electric Mobility Huge</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/BattRE Electric Mobility Kross/download.jpg" alt="">
                <div class="content">
                    <h3>BattRE Electric Mobility Kross</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/BattRE Electric Mobility Montra/download.jpg" alt="">
                <div class="content">
                    <h3>BattRE Electric Mobility Montra</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/EMotorad Doodle/download (3).jpg" alt="">
                <div class="content">
                    <h3>EMotorad Doodle</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/EMotorad EMX/download (4).jpg" alt="">
                <div class="content">
                    <h3>EMotorad EMX</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Essel Energy GET 1/download (2).jpg" alt="">
                <div class="content">
                    <h3>Essel Energy GET 1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Essel Energy GET 1 Bicycle.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Essel Energy GET 7/download (2).jpg" alt="">
                <div class="content">
                    <h3>Essel Energy GET 7</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Essel Energy GET 7.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Firebox Adventron/download (3).jpg" alt="">
                <div class="content">
                    <h3>Firebox Adventron</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro C1/download (4).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro C1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro C1.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro C5X/download (4).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro C5X</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro C5X.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro C7/download (1).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro C7</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro C7+.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro C7+/download (6).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro C7+</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro C7+.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro C8i/download (5).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro C8i</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro C8i.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro C9/download.jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro C9</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro Electric C3/download (2).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro Electric C3</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro Electric C5/download.jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro Electric C5</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro Electric C5x.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro Electric C6/download (5).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro Electric C6</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro Electric F6i/download (6).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro Electric F6i</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro Electric F6i.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro F1/download.jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro F1</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro F1.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro F2i/download (1).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro F2i</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro F2i.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro F3i/download (4).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro F3i</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro F3i.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro H3/download.jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro H3</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro H3.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro H5/download (2).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro H5</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro H5.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro WINN/download (4).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro WINN</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Hero Lectro WINN-X/download (2).jpg" alt="">
                <div class="content">
                    <h3>Hero Lectro WINN-X</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Lectro Electric C8/download (4).jpg" alt="">
                <div class="content">
                    <h3>Lectro Electric C8</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Hero Lectro C8i.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Motovolt Hum/download (4).jpg" alt="">
                <div class="content">
                    <h3>Motovolt Hum</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Motovolt Hum.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Motovolt Ice/download.jpg" alt="">
                <div class="content">
                    <h3>Motovolt Ice</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Motovolt Ice.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Motovolt Kivo/download (5).jpg" alt="">
                <div class="content">
                    <h3>Motovolt Kivo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Motovolt Kivo.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Motovolt Kivo 24/download (7).jpg" alt="">
                <div class="content">
                    <h3>Motovolt Kivo 24</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Motovolt Kivo 24.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Motovolt Kivo Easy/download (3).jpg" alt="">
                <div class="content">
                    <h3>Motovolt Kivo Easy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Motovolt Kivo Easy.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Motovolt Urbn e-bike/download (4).jpg" alt="">
                <div class="content">
                    <h3>Motovolt Urbn e-bike</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Motovolt Urbn e-bike.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Nexzu Bazinga/download (2).jpg" alt="">
                <div class="content">
                    <h3>Nexzu Bazinga</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="Vehicles Info/Nexzu Bazinga.php" class="btn">check out</a>
                </div>
            </div>

            <div class="box">
                <img src="image/Cycles/Nexzu Roadlark/download (1).jpg" alt=" ">
                <div class="content ">
                    <h3>Nexzu Roadlark</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/Nexzu Roadlark.php " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Scooter/Raftaar Galaxy/5.jpeg " alt=" ">
                <div class="content ">
                    <h3>Raftaar Galaxy</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/ " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/Nexzu Rompus Plus/download.jpg " alt=" ">
                <div class="content ">
                    <h3>Nexzu Rompus Plus</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/Nexzu Rompus Plus.php" class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/Polarity Smart Executive/download (1).jpg " alt=" ">
                <div class="content ">
                    <h3>Polarity Smart Executive</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/ " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/Polarity Smart Sport/download (2).jpg" alt=" ">
                <div class="content ">
                    <h3>Polarity Smart Sport</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="# " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/SVITCH MXE/download (5).jpg" alt=" ">
                <div class="content ">
                    <h3>SVITCH MXE</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/ " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/SVITCH XE/download.jpg" alt=" ">
                <div class="content ">
                    <h3>SVITCH XE</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="# " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/SVITCH XE+/download (1).jpg" alt=" ">
                <div class="content ">
                    <h3>SVITCH XE+</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="# " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/Toutche Electric Heileo H200/download (4).jpg " alt=" ">
                <div class="content ">
                    <h3>Toutche Electric Heileo H200</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/Toutche Heileo M100.php " class="btn ">check out</a>
                </div>
            </div>

            

            <div class="box ">
                <img src="image/Cycles/TOutche Electric Heileo M100/download (5).jpg" alt=" ">
                <div class="content ">
                    <h3>TOutche Electric Heileo M100</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/ " class="btn ">check out</a>
                </div>
            </div>

            <div class="box ">
                <img src="image/Cycles/Toutche Electric Heileo M200/download (6).jpg " alt=" ">
                <div class="content ">
                    <h3>Toutche Electric Heileo M200</h3>
                    <div class="stars ">
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star "></i>
                        <i class="fas fa-star-half-alt "></i>
                    </div>
                    <a href="Vehicles Info/ " class="btn ">check out</a>
                </div>
            </div>


        </div>

    </section>


    <section class="contact " id="contact ">

        <h1 class="heading "><span>contact</span> us</h1>

        <div class="row ">

            <iframe class="map " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5366368065065!2d76.8491072148019!3d23.0774433849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1672863431119!5m2!1sen!2sin "
                allowfullscreen=" " loading="lazy "></iframe>

            <form action=" ">
                <h3>get in touch</h3>
                <input type="text " placeholder="your name " class="box ">
                <input type="email " placeholder="your email " class="box ">
                <input type="tel " placeholder="subject " class="box ">
                <textarea placeholder="your message " class="box " cols="30 " rows="10 "></textarea>
                <input type="submit " value="send message " class="btn ">
            </form>

        </div>

    </section>

    <section class="footer " id="footer ">

        <div class="box-container ">

            <!-- <div class="box ">
                <h3>our branches</h3>
                <a href="# "> <i class="fas fa-map-marker-alt "></i> india </a>
                <a href="# "> <i class="fas fa-map-marker-alt "></i> japan </a>
                <a href="# "> <i class="fas fa-map-marker-alt "></i> france </a>
                <a href="# "> <i class="fas fa-map-marker-alt "></i> russia </a>
                <a href="# "> <i class="fas fa-map-marker-alt "></i> USA </a>
            </div> -->

            <div class="box ">
                <h3>quick links</h3>
                <a href="# "> <i class="fas fa-arrow-right "></i> home </a>
                <a href="# "> <i class="fas fa-arrow-right "></i> vehicles </a>
                <a href="# "> <i class="fas fa-arrow-right "></i> services </a>
                <a href="# "> <i class="fas fa-arrow-right "></i> featured </a>
                <a href="# "> <i class="fas fa-arrow-right "></i> reviews </a>
                <a href="# "> <i class="fas fa-arrow-right "></i> contact </a>
            </div>

            <div class="box ">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 73586 21555 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 75602 54500 </a>
                <a href="# "> <i class="fas fa-envelope "></i> pahiyawala@gmail.com </a>
                <a href="https://goo.gl/maps/adzVULcYLZRwrspG8 " target="_blank "> <i class="fas fa-map-marker-alt "></i> Kotri Kalan, Bhopal, Madhya Pradesh - 466114 </a>
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
</body>

</html>