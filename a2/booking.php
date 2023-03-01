<?php require_once("fragment/head.php");?>
<link rel="stylesheet" href="style/booking_style.css">
<title>Booking Page</title>
</head>
<?php require_once("fragment/header.php");?>
<nav>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="login.php">LOG IN</a></li>
</ul>
</nav>
<?php require_once("tools/tools.php")?>
<main>
    <div>
        <form method="POST">
            <h2>Booking Form</h2>
            <div>
                <label for="id">Patient ID</label>
                <input type="text" name="id" id="id">
                <span class="error"><?php echo $idErr;?></span>
            </div>
            <div>
                <label for="date">Date</label>
                <input type="date" name="date" value="<?php echo date('Y-m-d',strtotime($data["congestart"])) ?>">
                <span class="error"><?php echo $dateErr;?></span>
            </div>
            <div>
                <label for="time[]">Time</label>
                <label class="Pill-item">
                    <input type="checkbox" name="time[]" value="9am-12pm">
                    <span class="Pill-label">9am - 12pm</span>
                </label>
                <label class="Pill-item-second">
                    <input type="checkbox" name="time[]" value="12pm-3pm">
                    <span class="Pill-label-second">12pm - 3pm</span>
                </label> 
                <label class="Pill-item">
                    <input type="checkbox" name="time[]" value="3pm-6pm">
                    <span class="Pill-label">3pm - 6pm</span>
                </label>
                <span class="error"><?php echo $timeErr;?></span>
            </div>
            <div>
                <label for="reason" id="reason">Appointment Reason</label>
                <select name="reason">
                    <option class="option" value="">Please Select</option>
                    <option class="option" value="Childhood Vaccine">Childhood Vaccination Shots</option>
                    <option class="option" value="Influenza Shot">Influenza Shot</option>
                    <option class="option" value="Covid Booster Shot">Covid Booster Shot</option>
                    <option class="option" value="Blood Test">Blood Test</option>
                </select>
                <span class="error"><?php echo $appointmentErr;?></span>
                <ol id="description">
                    <li></li>
                    <li>Childhood vaccines: A disclaimer that multiple vaccines are normally
                    administered in combination and may cause the child to be sluggish
                    or feverous for 24 – 48 hours afterwards.</li>
                    <li>Influenza: The best time to get vaccinated is in April and May each
                    year for optimal protection over the winter months.</li>
                    <li>Covid Booster Shot: Advice that everyone should arrange to have
                    their third shot as soon as possible and adults over the age of 30
                    should have their fourth shot to protect against new variant strains.</li>
                    <li>Blood test: That some tests require some fasting ahead of time and
                    that a staff member will advise them on this prior to the
                    appointment.</li>
                </ol>
            </div>
            <div>
                <div class="success"><?php echo $successful;?></div>
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</main>
<footer>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="login.php">LOG IN</a></li>
    </ul>
<?php require_once("fragment/footer.php");?>
<script src="js/booking.js" type="text/javascript"></script>
</html>