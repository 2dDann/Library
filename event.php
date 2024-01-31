<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="imgs/LibraryLogo.png"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/event.css">
    <title>Events & News</title>
</head>
<body>
    <header>
        <nav id="nav">
            <a href="homepage.php"><img class="logo" src="imgs/LibraryLogo.png" alt="Logo"></a>
            <a href="homepage.php" class="navButton">Homepage</a>
            <a href="addbook.php" class="navButton">Add Books</a>
            <a href="event.php" class="navButtonSel">Events</a>
            <a href="location.php" class="navButton">Store Location</a>
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
                <h1>Events</h1>
                <h5>Find exciting events here</h5>
            </div>
        </div>
        <br><br>
        <!-- events section -->
        <div class="event-row">
            <div class="event-columns">
                <div class="card">
                    <img src="imgs/guitarshow.png" alt="" style="width: 100%;">
                    <div class="container">
                        <h2>Live Band Concert</h2>
                        <p>Students from YSHHB School have come to perfrom some of their covers and original songs.</p>
                        <p>The event will be on Saturday, 1st September from 8:00 until 10:00 AM.</p>
                        <p><a href="#"><button class="event-button">Read more</button></a></p>
                    </div>
                </div>
            </div>
            <div class="event-columns">
                <div class="card">
                    <img src="imgs/chesstornament.png" alt="" style="width: 100%;">
                    <div class="container">
                        <h2>Chess Competition</h2>
                        <p>The winner of the competition will win a prize worth RM 30. Registration will be open to everyone with registration fee of RM 30.</p>
                        <p>The event will be held on August 6th at 8:15 AM.</p>
                        <p><a href="#"><button class="event-button">Read more</button></a></p>
                    </div>
                </div>
            </div>
            <div class="event-columns">
                <div class="card">
                    <img src="imgs/reptileshowcase.png" alt="" style="width: 100%;">
                    <div class="container">
                        <h2>Reptile Showcase</h2>
                        <p>Come visit our library for a chance to touch the reptile. PS. we are not responsible for any injury, come at your own risk.</p>
                        <p>Entrance fee is RM 5 for adults, RM 15 for students and children.</p>
                        <p><a href="#"><button class="event-button">Read more</button></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- second row -->
        <div class="event-row">
            <div class="event-columns">
                <div class="card">
                    <img src="imgs/nationalbookday.png" alt="" style="width: 100%;">
                    <div class="container">
                        <h2>National Book Day</h2>
                        <p>Come and join us to celebrate the national book day. We will give a voucher for starbucks for each book you borrow or buy from our store located at Times Square.</p>
                        <p>The event will last for one day on the 23 April. Although the event month is in April, this is not a prank, just come and get your vouchers courtersy of Starbucks. (trust me)</p>
                        <p><a href="#"><button class="event-button">Read more</button></a></p>
                    </div>
                </div>
            </div>
            <div class="event-columns">
                <div class="card">
                    <img src="imgs/donatebook.png" alt="" style="width: 100%;">
                    <div class="container">
                        <h2>Donate a Book</h2>
                        <p>Come to our library with books. We take any kinds of books, magazines, dictionaries, childrens books, textbooks, family photo book. We dont care what book we get, "a book is a book" - Ghandi</p>
                        <p>The event will be held on the 2th January until the 8th of September.</p>
                        <p><a href="#"><button class="event-button">Read more</button></a></p>
                    </div>
                </div>
            </div>
            <div class="event-columns">
                <div class="card">
                    <img src="imgs/hauntedhouse.png" alt="" style="width: 100%;">
                    <div class="container">
                        <h2>Haunted House</h2>
                        <p>Come experience the haunted house with your friends, family, or alone. It will open on the 31st december so make sure you have no plans before, or after. and it might be wise to bring an extra pair of pants. (speaking from experience)</p>
                        <p>"Experienced the spooky one time, very scary, peed my pants" - satisfied customer</p>
                        <p><a href="#"><button class="event-button">Read more</button></a></p>
                    </div>
                </div>
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