<?php require_once('inc/connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['submit_tourguide'])){
		header('Location: signup.php');
		$_SESSION['level']='tourguide';
	}
	if(isset($_POST['submit_tourist'])){
		header('Location: signup.php');
		$_SESSION['level']='tourist';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign Up-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body style="background-image: url('img/ct3.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<div class="signup_selection_page_box">
		<form action="signup_selection_page.php" method="post">
			<h1>Sign Up >></h1>

			<button class="submit" type="submit" name="submit_tourist">SignUp as Tourist</button>
			<button class="submit" type="submit" name="submit_tourguide">SignUp as Tour-Guide</button>
			
			</form>

	</div><!-- signup_box -->

</body>
<script type="text/javascript" src="js/jscript.js"></script>
</html>
<?php mysqli_close($connection);?>