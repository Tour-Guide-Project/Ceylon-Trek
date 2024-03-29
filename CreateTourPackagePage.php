<html  lang="en">
    <head>
        <title>Create Tour Package</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/top_bar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/CreateTourPackagePage.css">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="body">
    
   
            <div class="section1"> 
            <?php include('inc/new_top_bar.php'); ?>
                <div class="side_bar">
                    <img src="img/home/logo2.png" class="dashlogo">
                    <img src="img/reviewimg.jpg" class="profile" >
                    <button class="edit"> Edit Profile</button><br>
                  <div class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                <spn class="manu-title">Inbox</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-plus-square fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Create tour package</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">View My Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">View My Tour Packages</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-fast-forward fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Upcoming Tours</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-fast-backward fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Previous Tours</span>
                            </a>
                        </li>
                    </ul>
                  </div><!--sidebar-manu-->        
                </div><!--side_bar-->
             <div class="content">
               
                <div class="con">
		<form>
			<div class="row">
				<div class="col-25">
					<label for="title" class="lbl">Title :</label>
				</div>
				<div class="col-75">
					<input type="text" name="title">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="duration" class="lbl">Duration :</label>
				</div>
				<div class="col-75">
					<input type="text" name="duration">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="destinations" class="lbl">Destinations :</label>
				</div>
				<div class="col-75">
					<input type="text" name="destinations">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="maxNoOfMembers" class="lbl">Maximum No Of Members :</label>
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
					<label for="enterDescription" class="lbl">Description:</label>
				</div>
				<div class="col-75">
					<textarea name="enterDescription" style="height: 100px"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="enterDescription" class="lbl">Schedule :</label>
				</div>
				<div class="col-75">
					<textarea name="enterDescription" style="height: 250px"></textarea>
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
    <!-- form -->
                
          
                <div class="guidecalender">
                    <div class="month">
                        <i class="fa fa-caret-left prev" aria-hidden="true"></i>
                        <div class="date"><h2></h2><h3></h3><p></p></div>
                        <i class="fa fa-caret-right next" aria-hidden="true"></i>
                    </div><!--month-->  
                    
                    <div class="weekdays">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div><!--weeekdays-->
                             
                    <div class="days">
                              
                    </div><!--days-->
                </div><!--guidecalender-->

                <div class="corner_buttons">
                        <div>
                            <button class="cobutton" style="width:275px"><i class="fa fa-credit-card" aria-hidden="true"></i>Pay System Fee</button>
                        </div>

                        <div>
                            
                            <button class="cobutton" style="width:275px; margin-top:20px"><i class="fa fa-phone  aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div><!--corner_button-->
</div>
                <div class="dashend"> <?php include('inc/footer.php'); ?> </div>
        <script src="js/guide dashboard.js"></script>

        </div>
    </body>
</html>