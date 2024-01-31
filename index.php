<?php 

require_once 'conn.php';

session_start();

if(ISSET($_POST['login'])){
	if($_POST['username'] != "" || $_POST['password'] != ""){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=? ";
		$query = $conn->prepare($sql);
		$query->execute(array($username,$password));
		$row = $query->rowCount();
		$fetch = $query->fetch();
		if($row > 0) {
			$_SESSION['user'] = $fetch['mem_id'];
			header("location: homepage.php");
		} else{
			echo "
			<script>alert('Invalid username or password')</script>
			<script>window.location = 'index.php'</script>
			";
		}
	}else{
		echo "
			<script>alert('Please complete the required field!')</script>
			<script>window.location = 'index.php'</script>
		";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Online Bookstore </title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/jpg" href="imgs/LibraryLogo.png"/>
	<style>

  	</style>
</head>
<body>
	<header>
        <nav id="nav">
		<a href="homepage.php"><img class="logo" src="imgs/LibraryLogo.png" alt="Logo"></a>
            <a href="homepage.php" class="navButton">Homepage</a>
            <a href="addbook.php" class="navButton">Add Books</a>
            <a href="event.php" class="navButton">Events</a>
            <a href="location.php" class="navButton">Store Location</a>
            <a href="aboutus.php" class="navButton">About Us</a>
			<a href="profile.php" class="navButton">Profile</a>
			<a href="index.php" class="navButtonSel">Log In</a>
            <a href="registration.php" class="navButton">Sign Up</a>
			<a href="logout.php" class="navButton">Log Out</a>
        </nav>
    </header>


	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<script>
				(function() {
					
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				
				unset($_SESSION['message']);
			?>

			<br />
			<br />
			<br />
			<br />

			<form action="" method="POST">	
				<h4 class="text-success">Login</h4>
				<hr style="border-top:1px groovy #000;">
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
					<button class="btn btn-primary form-control" name="login">Login</button>
				</div>
				<a href="registration.php">Registration</a>


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