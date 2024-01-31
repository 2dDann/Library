<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="imgs/LibraryLogo.png"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/location.css">
    <title>Store Location</title>
</head>
<body>
    <header>
        <nav id="nav">
            <a href="homepage.php"><img class="logo" src="imgs/LibraryLogo.png" alt="Logo"></a>
            <a href="homepage.php" class="navButton">Homepage</a>
            <a href="addbook.php" class="navButton">Add Books</a>
            <a href="event.php" class="navButton">Events</a>
            <a href="location.php" class="navButtonSel">Store Location</a>
            <a href="aboutus.php" class="navButton">About Us</a>
            <a href="profile.php" class="navButton">Profile</a>
            <a href="index.php" class="navButton">Log In</a>
            <a href="registration.php" class="navButton">Sign Up</a>
            <a href="logout.php" class="navButton">Log Out</a>
        </nav>
    </header>
    <main>
        <!-- banner section -->
        <div class="banner-img">
            <div class="banner-text">
                <h1>Find our stores</h1>
                <h5>We might be closer than you think</h5>
            </div>
        </div>
        
        <!-- map section -->
        <div style="display: flex; margin: 30px; margin-left: 50px;">
            <div class="store-list">
                <div style="padding: 20px; text-align: center; margin-bottom: 10px;">
                    <div class="title">
                        <h2>Store List</h2>
                    </div>
                </div> 
                <div style="text-align:center; ">
                    <button onclick="newSrc('utext');" class="button">U - Text</button>
                    <button onclick="newSrc('popular');" class="button">POPULAR</button>
                    <button onclick="newSrc('appletree');" class="button">AppleTree</button>
                    <button onclick="newSrc('ffsunway');" class="button">F8f Sunway</button>
                    <button onclick="newSrc('animix');" class="button">Animix</button>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.114273876277!2d101.61389691470434!3d3.064109997768656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5f9450eaf9%3A0xe4c38bd5f7d440b1!2sTaylor&#39;s%20University%20Lakeside%20Campus!5e0!3m2!1sen!2smy!4v1653641597168!5m2!1sen!2smy" width="800" height="600" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="theMap"></iframe>
            </div>
        </div>

    </main>
    <footer>
        <div class="footerHeading footer-1">
            <h3>Copyright Information &copy;</h3>
            <a href="#">W3School</a>
        </div>
        <div class="footerHeading footer-2">
            <h3>Contact Us &#9743;</h3>
            <a href="#">Email us</a>
            <a href="#">Instagram</a>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Whatsapp</a>
        </div>
        <div class="footerEmailForm">
            <h3>Get newsletter</h3>
            <input type="email" placeholder="Enter your email address" id="footerEmail">
            <input type="submit" value="Sign Up" id="footerEmailBtn">
        </div>
    </footer>
</body>
</html>
<script>

// chaneg the location of the map when the button is clicked.
function newSrc(store) {
    if (store == "utext"){
        var newerSrc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.101357825918!2d101.60081021576623!3d3.067577997766134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c8f6a6870d7%3A0x2aab63fcb3daef9f!2sU%20-%20Text!5e0!3m2!1sen!2smy!4v1668155272410!5m2!1sen!2smy";
    } else if (store == "popular") {
        var newerSrc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0806942904514!2d101.60114493209451!3d3.0731180906042583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c876ee11e81%3A0x5e65045135bce78f!2sPOPULAR%20bookstore%20%40%20Sunway%20Pyramid!5e0!3m2!1sen!2smy!4v1668155331122!5m2!1sen!2smy";
    } else if (store == "appletree") {
        var newerSrc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0744813201527!2d101.60336521576613!3d3.074781897760907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c8785269dfb%3A0x529906bf2e935f0c!2sAppleTree!5e0!3m2!1sen!2smy!4v1668155362441!5m2!1sen!2smy";
    } else if (store ="ffsunway") {
        var newerSrc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0744813201527!2d101.60336521576613!3d3.074781897760907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4dfad1ee7953%3A0xd63a61c07266cb13!2sF8f%20sunway!5e0!3m2!1sen!2smy!4v1668155430623!5m2!1sen!2smy";
    } else if (store == "animix"){
        var newerSrc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5743.9185321461655!2d101.60749427993143!3d3.0652462860097573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4dd72c50c40d%3A0x88467e33083a1188!2sAnimix!5e0!3m2!1sen!2smy!4v1668155518682!5m2!1sen!2smy";
    } else {
        var newerSrc="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.114273876277!2d101.61389691470434!3d3.064109997768656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c5f9450eaf9%3A0xe4c38bd5f7d440b1!2sTaylor&#39;s%20University%20Lakeside%20Campus!5e0!3m2!1sen!2smy!4v1653641597168!5m2!1sen!2smy";
    }
    document.getElementById("theMap").src = newerSrc;
}

</script>