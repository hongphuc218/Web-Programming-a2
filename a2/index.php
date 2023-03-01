<?php require_once("fragment/head.php");?>
<link rel="stylesheet" href="style/style.css">
<title>Home Page</title>
</head>
<?php require_once("fragment/header.php");?>
<nav>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="#about-us">ABOUT US</a></li>
    <li><a href="#our-team">OUR TEAM</a></li>
    <li><a href="#our-services">OUR SERVICES</a></li>
    <li><a href="booking.php">BOOK US</a></li>
    <li><a href="login.php">LOG IN</a></li>
</ul>
</nav>
<main>
    <section id="gallery">
        <div id="gallery-container">
            <div class="pictures fade">
                    <img src="photo/Gallery1.jpg">
            </div>
            <div class="pictures fade">
                <img src="photo/Gallery2.jpg">
            </div>
            <div class="pictures fade">
                <img src="photo/Gallery3.jpg">
            </div>
            <div class="pictures fade">
                <img src="photo/Gallery4.jpg">
            </div>
            <div class="pictures fade">
                <img src="photo/Gallery5.jpg">
            </div>
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </section>
    <section id="about-us">
        <h1>About Us</h1>
        <img height="400" width="600" src="photo/Reception.jpg" alt="">
        <div id="text-container">
            <h2>Welcome to Russell Street Medical</h2>
            <p>Russel Street Medical opened in 2020 and is located in Melbourne’s CBD at 340 Russel Street Melbourne, just opposite The Old Melbourne Jail and within walking distance of Melbourne Central Train Station.</p>
            <P>We strive to help all of our patients with a focus on preventative health care, a view to managing chronic health conditions with a holistic approach, and with access to a wide range of specialist care providers when needed.</P>
            <p>Under partnerships, we are able to offer RMIT students & staff discounted rates.</p>
        </div>
    </section>
    <section id="our-team">
        <h1>Our Team</h1>
        <div class="person-container">
            <img height="300" width="300" src="photo/1.jpg" alt="Dr. Abigale Laurentis">
            <h2>Dr. Abigle Laurentis</h2>
            <p>Abigale Laurentis completed her medical degree at the University of Queensland in 2013, where she
            also obtained a Bachelor of Science in Biomedicine.</p>
            <p>Over her training and practice, Abigale has worked in a variety of clinical settings including
            specialities at Latrobe Health.</p>
        </div>
        <div class="person-container">
            <img height="300" width="300" src="photo/2.jpg" alt="Dr. Stephen Hill">
            <h2>Dr. Stephen Hill</h2>
            <p>Stephen Hill graduated from Auckland University in New Zealand in 2014, and obtained his
            Fellowship from the Royal Australian College of General Practitioners in 2017.</p>
            <p>Over his training and practice, Stephen worked in internal medicine at the Royal Children's Hospital
            Melbourne before transitioning to General Practice.</p>
        </div>
        <div class="person-container">
            <img height="300" width="300" src="photo/3.jpg" alt="Ms Kiyoko Tsu">
            <h2>Ms Kiyoko Tsu</h2>
            <p>Kiyoko Tsu completed her Bachelor of Nursing at the Yong Loo Lin School of Medicine in Singapore in 2019.</p>
            <p>She is an accredited Nurse Immuniser and has worked in various hospitals within metropolitan Melbourne.</p>
        </div>
    </section>
    <section id="our-services">
        <h1>Our Services</h1>
        <h3>Primary Health Care</h3>
        <p>Primary health professionals such as general practitioners (GPs), dentists, pharmacists and allied services are available for non-emergency and preventative care during business hours.</p>
        <h3>Pregnancy and birthing services</h3>
        <p>Pregnancy and birthing services include care during pregnancy (antenatal care). Labour and birth are usually overseen by GPs, midwives and obstetricians – or a combination of these.</p>
        <h3>Emergency services</h3>
        <p>Emergency, crisis and support services are available at all times and in all locations. Call 000 in an emergency for fire, ambulance and police services.</p>
        <h3>Aged care providers</h3>
        <p>A wide range of aged care providers offer services such as home support and respite care services (which can help you to stay at home longer), and residential aged care.</p>
        <h3>To access our services and clinics you will need to book an appointment with us by person at our center located in  Melbourne’s CBD at 340 Russel Street
        Melbourne or via online platform.</h3>
    </section>
</main>
<footer>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="#about-us">ABOUT US</a></li>
        <li><a href="#our-team">OUR TEAM</a></li>
        <li><a href="#our-services">OUR SERVICES</a></li>
        <li><a href="booking.php">BOOK US</a></li>
        <li><a href="login.php">LOG IN</a></li>
    </ul>
<?php require_once("fragment/footer.php");?>
<script src="js/script.js" type="text/javascript"></script>
</html>