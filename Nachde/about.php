<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dance website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
</head>
<body>
    <section class="sub-header">
       <nav>
            <a href="index.html"><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                    <li><a href="style.php">DANCE STYES</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="signup.php">SIGNUP</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
       </nav>
       <h1>About Us</h1>      
    </section>

<!-- about us content -->

<section class="about-us">

    <div class="row">
        <div class="about-col">
            <h1>Ultimate destination for dance training and expression!</h1>
            <p>At Nachde, we believe that dance is more than just movement; it's a form of self-expression,
            a way to connect with others, and a journey of self-discovery. Our dance classes cater to dancers of all levels, 
            from beginners to advanced, and cover a wide range of dance styles including Bollywood, Hip Hop, Contemporary.
            Whether you're looking to learn a new dance style, improve your technique, or just have fun and stay active, we have something
            for everyone. What sets Nachde apart is our passionate and experienced team of instructors who are dedicated to helping you unleash 
            your full potential as a dancer. Our classes are not just about learning choreography; they're about building confidence, fostering creativity, 
            and creating a supportive community where dancers can thrive.</p>
            <a href="style.php" class="hero-btn red-btn">EXPLORE NOW</a>
        </div> 
        <div class="about-col">
            <img src="images/background.jpeg">
        </div>
        <div class="icons">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-facebook" aria-hidden="true"></i>
        </div>
    </div>
</section>




<!-- java script for toggle menu -->
    <script>

        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>
</body>
</html>

