<!DOCTYPE html>
<html>
<head>
	<title>Create Tour Package Page</title>
	<link rel="stylesheet" type="text/css" href="css/CreateTourPackagePage.css">
	<link rel="stylesheet" href="css/top_bar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-image: url('img/walk.jpg'); background-size:cover;background-position: center center;background-attachment: fixed; background-repeat:no-repeat;">

	<?php include('inc/top_bar.php');?>

	<div class="con">
		<form>
			<div class="row">
				<div class="col-25">
					<label for="title" class="lbl">Title</label>
				</div>
				<div class="col-75">
					<input type="text" name="title">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="duration" class="lbl">Duration</label>
				</div>
				<div class="col-75">
					<input type="text" name="duration">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="destinations" class="lbl">Destinations</label>
				</div>
				<div class="col-75">
					<input type="text" name="destinations">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="maxNoOfMembers" class="lbl">Maximum No Of Members</label>
				</div>
				<div class="col-75">
					<input type="text" name="maxNoOfMembers">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="imageUpload" class="lbl">Image Upload</label>
				</div>
				<div class="col-75">
					<input type="submit" name="imageUpload" value="Upload Image">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="enterDescription" class="lbl">Enter Description</label>
				</div>
				<div class="col-75">
					<textarea name="enterDescription" style="height: 150px"></textarea>
				</div>
			</div>
			<div class="agreeCls">
				<div class="agreed1">
					<input type="checkbox" name="agree">
				</div>
				<div class="agreed2">
					<label for="agree">I agree that I will take the whole responsibility of the tour and I will not hold Ceylon Trek against any problems occured during tour.</label>
				</div>
			</div>
			<div class="submitCls">
				<input type="submit" name="createPackage" value="Create Package">
			</div>
		</form>
	</div>

<?php include('inc/footer.php');?>

</body>
</html>