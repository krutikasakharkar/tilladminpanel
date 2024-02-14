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
       <h1>Contact Us</h1>      
    </section>

<!-- contact us  content -->

<section class="location">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120562.31417583775!2d72.91905835058785!3d19.21387353580082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8fcfe76fd59%3A0xcf367d85f7c50283!2sThane%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1707678157287!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>
<section class="contact-us">

    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa-solid fa-house"></i>
                <span>
                    <h5>Address</h5>
                    <p>XYZ road, ABC building,Thane, Maharashtra</p>
                </span>
            </div>
            <div>
                <i class="fa-solid fa-phone"></i>
                <span>
                    <h5>Phone</h5>
                    <p>+91 0123456789</p>
                </span>
            </div>
            <div>
                <i class="fa-solid fa-envelope"></i>
                <span>
                    <h5>Email</h5>
                    <p>nachde@gmail.com</p>
                </span>
            </div>
            <div>
                
                <span>
                    <h5>Opening hours</h5>
                    <p>Mon - Fri 11 am - 9 pm</p>
                    <p>Sat - Sun 10:30 am -  pm</p>
                </span>
            </div>
        </div>
        <div class="contact-col">

            <form action="form-handler.php" method="post">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="text" name="email" placeholder="Enter email address" required>
                <input type="text" name="query" placeholder="Enter your query" required>
                <textarea rows="8" name="message" placeholder="message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
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

