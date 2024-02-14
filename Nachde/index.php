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
    <!-- boostrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    
        
</head>
<body>
    <section class="header">
       <!---------navbar file included-----------------> 
<?php
    include "navbar.php";
?>
       
    <div class="text-box">
        <h1>NEED SOME DANCE THERAPY?</h1>
        <p>Express your soul and heal through dance</p>
        
        <a href="signup.php" class="hero-btn">Come join us now!</a>
        

    </div>       
    </section>

<!-- dance styles -->

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

<!-- studio -->

<section class="location">
    <h1>Location</h1>

    <div class="row">
        <div class="location-col">
            <img src="images/studio.jpeg" alt="Thane studio">
            <div class="layer">
                <h3>Thane studio (near Cadbury Road)</h3>
            </div>
        </div>
    </div>   
</section>

<!-- testimonials -->

<section class="testimonials">
    <h1>What Our Student Says</h1>

    <div class="row">
        <div class="testimonial-col">
            <img src="images/user.jpeg">
            <div>
                <h3>Esha Mishra</h3>
                <p>Taking a dance class has been an incredible experience for me.
                    Not only have I improved my dancing skills, but I've also gained confidence 
                    and made new friends along the way. The atmosphere in the class is always welcoming and supportive,
                    which has helped me feel comfortable trying new moves and expressing myself through dance.
                    The instructors are talented and patient, providing clear instructions and helpful feedback to help us improve.
                    Dance class has become the highlight of my week, and I look forward to continuing my journey and exploring new styles of dance.</p>
            </div>  
        </div>
    </div>          
</section>

<!-- contact us -->

<section class="contact">
    <h1>Feel free to reach out to us with any questions or concerns!<br> We're here to help.</h1>
    <a href="" class="hero-btn">CONTACT US</a>
</section>


<!-- footer -->

<section class="footer">
    <h2>About Us</h2>
    <p>Ultimate destination for dance training and expression!
    At Nachde, we believe that dance is more than just movement; it's a form of self-expression,
    a way to connect with others, and a journey of self-discovery.</p>
    <div class="icons">
        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        <i class="fa-brands fa-facebook" aria-hidden="true"></i>
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