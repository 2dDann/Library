<?php

include 'conn.php';

session_start();

$user_id = $_SESSION['user'];

if(!isset($user_id)){
   header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="imgs/LibraryLogo.png"/>
    
    <title>Profile</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/main.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav id="nav">
            <a href="homepage.php"><img class="logo" src="imgs/LibraryLogo.png" alt="Logo"></a>
            <a href="homepage.php" class="navButton">Homepage</a>
            <a href="search.php" class="navButton">Search</a>
            <a href="addbook.php" class="navButton">Add Books</a>
            <a href="location.php" class="navButton">Store Location</a>
            <a href="aboutus.php" class="navButton">About Us</a>
            <a href="profile.php" class="navButtonSel">Profile</a>
            <a href="index.php" class="navButton">Login</a>
			<a href="registration.php" class="navButton">Sign Up</a>
            <a href="logout.php" class="navButton">Log Out</a>
        </nav>
    </header>
    <main>

     <!-- HOME -->
     <div class="container">
          <div class="profile">
               <?php
                    $select_profile = $conn->prepare("SELECT * FROM `member` WHERE mem_id = ?");
                    $select_profile->execute([$user_id]);
                    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
               ?>
               <br><br><br>
               <div class="profile">
                    <h2>Welcome, <?= $fetch_profile['firstname']." " . $fetch_profile['lastname']; ?></h3>
                    <h4>Username: <?= $fetch_profile["username"]?></h4>
                    <h4>First name: <?= $fetch_profile["firstname"]?></h3>
                    <h4>Last name: <?= $fetch_profile["lastname"]?></h4>
                    <h4>Email: <?= $fetch_profile["email"]?></h4>
                    <br>
                    <p>Welcome to our site, out site is an online library where you can explore the books that we have or add books if you are an admin. Please enjoy the website evne though it is wonky</p>
                    <hr>
                    <div class="flex-btn" style="text-align: center;">
                         <a href="logout.php" class="delete-btn">logout</a>
                         <a href="index.php" class="option-btn">login</a>
                         <a href="registation.php" class="option-btn">register</a>
                    </div>
               </div>
               
          </div>
     </div>
     <br><br><br>
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