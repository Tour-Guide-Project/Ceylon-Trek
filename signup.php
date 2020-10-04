<?php  require_once('inc/connection.php');?>
<?php 
session_start();
//check the submit button has been pressed
if (isset($_POST['submit'])) {

	$errors = array();
	//check correct details has been entered
	if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1){
		$errors[]= 'First Name is required/Invalid';
	}

	if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1){
		$errors[]= 'Last Name is required/Invalid';
	}
	if(!isset($_POST['tel_no']) || strlen(trim($_POST['tel_no']))<1){
		$errors[]= 'Contact Details is required/Invalid';
	}

	if(!isset($_POST['address']) || strlen(trim($_POST['address']))<1){
		$errors[]= 'Address is required/Invalid';
	}
	if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
		$errors[]= 'Email Address is required/Invalid';
	}

	if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
		$errors[]= 'Password is required/Invalid';
	}
	if(!strlen(trim($_POST['password'])<6))
	{
        $errors[]="Password must contain at least 6 characters!";
	}
	if(empty($errors)){
		//get values in to variables
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$email=$_POST['email'];
		$address=$_POST['address'];
		$contact=$_POST['tel_no'];
		$password=$_POST['password'];
		$hashed_password=sha1($password);
		$level=$_SESSION['level'];
		$token= bin2hex(random_bytes(50));

		if (isset($_POST['gender']) && $_POST['gender']=="male"){
			$gender='Male';
		}
		if (isset($_POST['gender']) && $_POST['gender']=="female"){
			$gender='Female';
		}
		//insert records into table
		$Query ="INSERT INTO $level(first_name,last_name,email,password,gender,address,contact,level,token)VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}','{$gender}','{$address}','{$contact}','{$level}','{$token}')";

 		$result=mysqli_query($connection,$Query); 
	// if($result)
 	// 	{
  	// 	    echo "one record added";
 	// 	}
 	
  // 	else
  // 	{
  // 		echo "database query failed";
  // 	}
  		
    }
    // else{
    // 	print_r($errors);
    // } 
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
	<div class="signup_box">
		<form action="signup.php" method="post">
			<h1>Sign Up</h1>
			<?php
				if (isset($_POST['submit'])) {

				//check correct details has been entered
					if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1){
						echo '<p  class="error">First name is requried/Invalid!</p>';
					}

					if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1){
						echo '<p  class="error">Last name is requried/Invalid!</p>';
					}
					if(!isset($_POST['tel_no']) || strlen(trim($_POST['tel_no']))<1){
						echo '<p  class="error">Contact Details is requried/Invalid!</p>';
					}

					if(!isset($_POST['address']) || strlen(trim($_POST['address']))<1){
						echo '<p  class="error">Address is requried/Invalid!</p>';
					}
					if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
						echo '<p  class="error">Email Address is requried/Invalid!</p>';
					}

					if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
						echo '<p  class="error">Password is requried/Invalid!</p>';
					} 
					if((strlen(trim($_POST['password']))<6))
					{
					    echo '<p class="error">Password must contain at least 6 characters!</p>';
					}
				}
			?>
			<div class="text_box">
				<div>
					<input class="input" type="text" name="first_name" placeholder="First Name">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="text" name="last_name" placeholder="Last Name">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="Phone" name="tel_no" placeholder="Contact Details">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="text" name="address" placeholder="Address">
				</div>
			</div><!-- text_box -->	
			<div class="text_box">
				<div>
					<input class="input" type="email" name="email" placeholder="Email Address">
				</div>
			</div><!-- text_box -->	
		
			<div>
				<input class="input_radio" type="radio" name="gender" required="" value="male">
				<label>Male</label>
			</div><!-- label -->
			<div>
				<input class="input_radio" type="radio" name="gender" required="" value="female">
				<label>Female</label>
			</div><!-- label -->	

			<div class="text_box">
				<div>
					<input class="input" type="password" name="password" placeholder="Password" id="myInput1">
					<span class="eye" onclick="myFunction1()">
						<i id="hide1" class="fa fa-eye"></i>
						<i id="hide2" class="fa fa-eye-slash"></i>
					</span>
					<script>
						function myFunction1(){
							var x=document.getElementById("myInput1");
							var y=document.getElementById("hide1");
							var z=document.getElementById("hide2");
						
						if(x.type === "password"){
							x.type ="text";
							y.style.display = "block";
							z.style.display = "none";
						}
						else{
							x.type ="password";
							y.style.display = "none";
							z.style.display = "block";
						}
					}
					</script>
				</div>
			</div><!-- text_box -->	

			<div class="check_signup">
				<input type="checkbox" id="check" name="signup" required="">
  				<label for="check"> "I accept the Terms of Service "or" I accept the privacy statement" Click here the indicate that you have read and agree to the terms presented in the Terms and Conditions agreement.</label>
			</div>
			
			<button class="cancel" type="cancel" name="cancel">Cancel</button>
			<button class="submit" type="submit" name="submit">Create Account</button>

			<p>Already have an account? <a href="login.php">Log In</a></p>
			
			</form>

			<?php 
			if(isset($errors)&&empty($errors)){
				 
			function function_alert($message) { 
      		// Display the alert box  
   				echo "<script>alert('$message');</script>"; 
			} 
  			function_alert("Welcome to Ceylon Trek !"); 
			}
			?>
			
	</div><!-- signup_box -->

</body>
<script type="text/javascript" src="js/jscript.js"></script>
</html>
<?php mysqli_close($connection);?>
