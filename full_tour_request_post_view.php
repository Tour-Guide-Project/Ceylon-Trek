<?php  require_once 'inc/connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Full Tour Request Post View-Ceylon Trek</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/tour_request_post.css">
	<link rel="stylesheet" href="css/top_bar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url('img/ct5.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">
	<?php include('inc/top_bar.php'); ?>
	<div class="full_tour_request_post_view_box" style="margin-bottom:120px">
			<form action="full_tour_request_post_view.php" method="post">
				
				<div class="text_box">
					
					<h1 style="text-align:left; margin-left:8px; color:white;">Title</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					<br>
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div><!-- text_box -->
				<button class="msg">Message Tourist</button>
				<button class="report">Report</button>
			</form>
	</div><!-- tour_request_post_box -->
	
<?php include('inc/footer.php'); ?>
</body>
</html>
<?php mysqli_close($connection);?>
