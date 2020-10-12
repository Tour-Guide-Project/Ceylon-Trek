<html  lang="en">
    <head>
        <title>Tourist dash board</title>
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
                                <spn class="manu-title">Favourite Guides</span>
                            </a>
                        </li>


                        <li>
                            <a href="#">
                                <span class="menu-icon"><i class="fa fa-eye fa-1x" aria-hidden="true"></i></span>
                                <spn class="manu-title">Favourite Packages</span>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique libero repellat accusantium ipsum incidunt nulla sint doloribus! Ad corrupti magnam totam alias, eos distinctio porro magni dicta, suscipit, velit illo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, non, eius voluptatibus dolorum sit quaerat dolores culpa corporis nemo est veritatis ad ipsam laboriosam placeat laborum dolore tenetur aspernatur Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione corrupti aliquam quae, temporibus fuga facilis nisi dicta similique perspiciatis iste, est a quam et. Aperiam itaque ipsa id iusto blanditiis. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut eius, facilis esse accusantium, cupiditate minus eligendi veritatis ad dolorem minima voluptate? Doloribus facere nam qui consequatur, numquam fugiat incidunt a! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore reprehenderit dolor sequi culpa magnam consectetur velit unde itaque, facilis id voluptatum, architecto iste odit, nisi quam rem perspiciatis numquam porro! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem similique maiores quod neque minus ea quam, unde quae laboriosam, dolorum dolores magnam aspernatur explicabo distinctio. Minima maxime voluptate repellendus  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi minus veniam eaque distinctio ut aliquam rem! Fugit quia vel mollitia iste corporis tenetur tempore, fuga doloribus fugiat necessitatibus dolorum nam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt deserunt unde nostrum sit veniam dolorum ipsum mollitia quisquam. Id commodi eaque dolor voluptate alias maiores magnam quibusdam aliquid voluptas minus!</p>   
                    
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
                            <button class="cobutton"><i class="fa fa-credit-card" aria-hidden="true"></i>Make a Complain</button>
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