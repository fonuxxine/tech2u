<?php

if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "lsm.team@utoronto.ca";
    $headers = "From: Tech2U - ".$email;
    $txt = "You have received an email from ".$first." ".$last.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    echo
    '

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech2U</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- Header -->
    <div class="landing-banner">
        <div class="nav-banner-about">
            <a class="pos-banner" href="index.html">
                <img class="logo" src="assets/other/image4.svg" alt="">
            </a>
            <nav>
                <ul class="nav_links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="tech.html">Technology</a></li>
                    <li><a href="accessibility.html">Accessibility</a></li>
                    <li><a href="stories.html">Stories</a></li>
                    <li id="underline"><a href="contacttech.html">Contact Us</a></li>
                </ul>
            </nav>
            <a class="cta" href="contacttech.html" target="_blank"><button>Get Tech Support</button></a>
        </div>
        <div class="contact-body">
            <div class="contact-text">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>

    <!-- Body -->
    <section class="quest-sec">
        <div class="login-quest">
            <a href="#book" class="quest-box">
                <img class="quest-img" src="assets/contact/Group477.svg" alt="" />
                <h3>I am ready to book Tech Support</h3>
            </a>
            <a href="#form" class="quest-box">
                <img class="quest-img" src="assets/contact/Group493.svg" alt="" />
                <h3>I have more questions</h3>
            </a>
        </div>
        <h2 id="book">I am ready to book Tech Support</h2>
        <div class="contact-part">
            <div class="part">
                <img class="quest-img" src="assets/contact/Group486.svg" alt="" />
                <p>1. Login to the LSM Portal</p>
            </div>
            <div class="part">
                <img class="quest-img" src="assets/contact/Group487.svg" alt="" />
                <p>2. Visit My Classrooms</p>
            </div>
            <div class="part">
                <img class="quest-img" src="assets/contact/Group363-3.svg" alt="" />
                <p>3. Learn more about each classroom and request support</p>
            </div>
        </div>
        <a href="https://lsm.utoronto.ca/lsm_portal" target="_blank">
            <div class="centre-btn">
                <button class="contact-btn">Login to the Instructor Portal</button>
            </div>
        </a>
    </section>

    <h2 class="form-quest">I have more questions.</h2>
    <div id="form">
        <form class="contact-form" action="contactform.php" method="post">
            <div class="contact-name">
                <div class="field first-name">
                    <p>First Name</p>
                    <input type="text" name="first"/>
                </div>
                <div class="field">
                    <p>Last Name</p>
                    <input type="text" name="last"/>
                </div>
            </div>
            <div class="field">
                <p>Email Address</p>
                <input type="text" name="email"/>
            </div>
            <div class="field">
                <p>Phone Number</p>
                <input type="text" name="phone"/>
            </div>
            <div class="field">
                <p>Message</p>
                <textarea id="subject" name="message"></textarea>
            </div>
            <div class="centre-btn">
                <button class="contact-btn" type="submit" value="send">Send Message</button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <a class="pos-banner" href="index.html">
            <img class="footer-logo" src="assets/other/image4.svg" alt="">
        </a>
        <div class="footer-col">
            <a href="index.html">
                <h3 class="footer-h3">Home</h3>
            </a>
            <a href="about.html">
                <h3 class="footer-h3">About</h3>
            </a>
            <a href="tech.html">
                <h3 class="footer-h3">Technology</h3>
            </a>
        </div>
        <div class="footer-col">
            <a href="accessibility.html">
                <h3 class="footer-h3">Accessibility</h3>
            </a>
            <a href="stories.html">
                <h3 class="footer-h3">Stories</h3>
            </a>
            <a href="contacttech.html">
                <h3 class="footer-h3">Contact Us</h3>
            </a>
        </div>
        <a href="contacttech.html" target="_blank">
            <button class="footer-cta" type="submit" name="submit">Get Tech Support</button>
        </a>
    </div>
</body>
</html>

    ';
}

?>