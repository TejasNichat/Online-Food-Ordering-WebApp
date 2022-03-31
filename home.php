<?php
session_start();

if(!isset($_SESSION['login_user'])){
header("location: index.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>|Online food ordering system</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jfif" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>

        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to MyOnlineMeal</h1>
        <p>Giving your Hunger a new Option </p>
        <p>Good Food for Good Moments </p>
        <button onclick="location.href='ordernow.php'" type="button">
                Order Now</button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="img/1.png" alt="">
                <h2 class="h-secondary center">Food Catering</h2>
                <p class="center">We Provide food service at a remote site or a site such as a hotel, hospital, pub, aircraft, cruise ship, park, filming site or studio, entertainment site, or event venue.</p>
            </div>
            <div class="box">
                <img src="img/2.png" alt="">
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p class="center">An order to buy a large quantity of a good at once</p>
            </div>
            <div class="box">
                <img src="img/3.png" alt="">
                <h2 class="h-secondary center">Food Ordering</h2>
                <p class="center">order food from a local restaurant or food cooperative through a web page</p>
            </div>
        </div>
    </section>
    <section id="client-section">
        <h1 class="h-primary center">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="img/logo1.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo2.png" alt="Our Client">
            </div>

            <div class="client-item">
                <img src="img/logo4.png" alt="Our Client">
            </div>
            <div class="client-item">
                <img src="img/logo3.png" alt="Our Client">
            </div>
        </div>

    </section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.myOnlineMeal.com. All rights reserved!
        </div>
    </footer>
</body>

</html>

</body>

</html>