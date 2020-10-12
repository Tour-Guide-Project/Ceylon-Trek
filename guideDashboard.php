<html  lang="en">
    <head>
        <title>Guide dash board</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/Guidedashboardpage.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/top_bar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="body">
    <div class="dashnav"></div>
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
                                <spn class="manu-title">View Tour Package</span>
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
                <div class="schedule">
                    <h1>Today's Schedule</h1><br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis voluptatibus, recusandae itaque voluptate architecto excepturi harum quaerat iure quisquam esse consectetur vitae adipisci debitis, earum necessitatibus! Soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quasi voluptas quam ea. Nesciunt nobis quae tempore incidunt impedit ex fuga repudiandae praesentium est, corporis assumenda obcaecati atque qui expedita!Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eveniet nemo impedit voluptatum cumque vero fugiat unde sint earum, harum ullam velit voluptatibus ducimus quae tenetur. Officia ducimus praesentium non!<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis voluptatibus, recusandae itaque voluptate architecto excepturi harum quaerat iure quisquam esse consectetur vitae adipisci debitis, earum necessitatibus! Soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quasi voluptas quam ea. Nesciunt nobis quae tempore incidunt impedit ex fuga repudiandae praesentium est, corporis assumenda obcaecati atque qui expedita!Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eveniet nemo impedit voluptatum cumque vero fugiat unde sint earum, harum ullam velit voluptatibus ducimus quae tenetur. Officia ducimus praesentium non!<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis voluptatibus, recusandae itaque voluptate architecto excepturi harum quaerat iure quisquam esse consectetur vitae adipisci debitis, earum necessitatibus! Soluta?Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quasi voluptas quam ea. Nesciunt nobis quae tempore incidunt impedit ex fuga repudiandae praesentium est, corporis assumenda obcaecati atque qui expedita!Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur eveniet nemo impedit voluptatum cumque vero fugiat unde sint earum, harum ullam velit voluptatibus ducimus quae tenetur. Officia ducimus praesentium non!   <br>  ******************* <br>   Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis vLorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis vLorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis vLorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis vLorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis vLorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis v33Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos cum amet quis v  </p>   
                    
                        <div><button class="schedule_button">View Tommorow</button></div>
                        <button class="schedule_button ">Schedule Complete</button>
                        <button class="schedule_button ">Schedule Not Complete</button>
                 
                </div><!--schedule-->
          
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
                            <button class="cobutton"><i class="fa fa-credit-card" aria-hidden="true"></i>Pay Sysytem Fee</button>
                        </div>

                        <div>
                            
                            <button class="cobutton"><i class="fa fa-phone" aria-hidden="true"></i>Contact Ceylon Treck</button>
                        </div>
                </div><!--corner_button-->
</div>
                <div class="dashend"> <?php include('inc/footer.php'); ?> </div>
        <script src="js/guide dashboard.js"></script>

        </div>
    </body>
</html>