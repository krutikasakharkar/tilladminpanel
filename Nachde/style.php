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
       <h1>Dance styles</h1>      
    </section>

<!-- dance style content -->

<section class="dancestyles">
    <h1>Dance styles We Offer</h1>
    <p>Learn about our various dance-styles and pick the one </p>
    <h5>PERFECT for YOU</h5>

    <div class="row">
        <div class="dancestyles-col">
            <h3>Contemporary</h3>
            <p>If you have a real passion for dance, if you want to learn self-rejuvenating for your body, if you want to find some balance in your body, 
             NACHDE is the place to enrol yourself or your kids.Contemporary as a style can be very graceful, and pleasant but at the same time be very dynamic and powerful.
             You will get to learn proper skills and techniques particularly “the pointed toe” technique used to get it right!</p>
        </div>
        <div class="dancestyles-col">
            <h3>Hip-Hop</h3>
            <p>Characterised by bouncing, rocking, and leaping into the latest styles!
            At NACHDE, we help you learn how to let go of all your troubles, move freely, and enjoy the rhythm of the music.
            Hip-hop is a dance form that is really cool, lets you bring in your own swag, is empowering, lets you portray your fearless attitude, and is energetic and playful.</p>
        </div>
        <div class="dancestyles-col">
            <h3>Bollywood</h3>
            <p>Bollywood dancing is a highly colourful and dynamic way of expressing yourself either solo or in a group. For all you filmy geeks, movie buffs, and crazy dancer lovers,
             to get to learn the latest, trendy hook steps, what better than getting to learn it from the most trendy choreographers at NACHDE? We teach you the smooth moves of all the trendy songs as well as reels to level up your social media game!</p>
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

