<?php require_once('inc/connection.php'); 
session_start();?>
<?php 
	if (isset($_POST['submit_admin'])){
		header('Location: create_admin_and_moderator_account.php');
		$_SESSION['level']='admin';
	}
	if(isset($_POST['submit_moderator'])){
		header('Location: create_admin_and_moderator_account.php');
		$_SESSION['level']='moderator';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create Admin & Moderator Account-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body style="background-image: url('img/ct7.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<div class="signup_selection_page_box">
		<form action="admin_and_moderator_selection_page.php" method="post">
			<h1>Create Account >></h1>

			<button class="submit" type="submit" name="submit_admin">SignUp as Admin</button>
			<button class="submit" type="submit" name="submit_moderator">SignUp as Moderator</button>
			
			</form>

	</div><!-- signup_box -->

</body>
<script type="text/javascript" src="js/jscript.js"></script>
</html>
<?php mysqli_close($connection);?>