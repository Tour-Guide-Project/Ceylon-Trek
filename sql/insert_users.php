<?php require_once('C:/xampp/htdocs/ceylon trek/inc/connection.php'); ?>
<?php 


$first_name = 'lakshan';
$last_name  ='Amal';
$email      ='lakshanamal100@gmail.com';
$password   ='lakshan';
$level='moderator';
$address='hikkaduwa,galle,srilanka';
$contact='0762435678';
$gender='Male';
$token= bin2hex(random_bytes(50));
$hashed_password = sha1($password);
//echo "hashed_password ".$hashed_password;
  $Query ="INSERT INTO moderator(first_name,last_name,email,password,gender,address,contact,level,token)VALUES ('{$first_name}','{$last_name}','{$email}','{$hashed_password}','{$gender}','{$address}','{$contact}','{$level}','{$token}')";


  $result=mysqli_query($connection,$Query);

  if($result)
  {
  	echo "1 Record added";
  }
  else
  {
  	echo "database query failed";
  }


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Query</title>
</head>
<body>
	
</body>
</html>
<?php mysqli_close($connection); ?>