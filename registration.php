<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login - Online Bookstore </title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	
	<header>
        <nav id="nav">
            <a href="homepage.php"><img class="logo" src="imgs/LibraryLogo.png"  alt="Logo"></a>
            <a href="home.php" class="navButton">Homepage</a>
            <a href="addbook.php" class="navButton">Add Books</a>
            <a href="event.php" class="navButton">Events</a>
            <a href="location.php" class="navButton">Store Location</a>
            <a href="aboutus.php" class="navButton">About Us</a>
			<a href="profile.php" class="navButton">Profile</a>
            <a href="index.php" class="navButton">Login</a>
			<a href="registration.php" class="navButtonSel">Sign Up</a>
			<a href="logout.php" class="navButton">Log Out</a>
        </nav>
    </header>

    <br />
	<br />
	<br />
	<br />


	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="register_query.php" method="POST">	
				<h4 class="text-success">Register</h4>
				<hr style="border-top:1px groovy #000;">

				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" />
				</div>

				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" />
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" />
				</div>


				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" />
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" />
				</div>


				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="register">Register</button>
				</div>
				<a href="index.php">Login</a>
			</form>
		</div>
	</div>

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