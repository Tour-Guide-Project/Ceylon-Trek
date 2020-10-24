<html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>About_us</title>
        <link rel='stylesheet' type='text/css' media='screen' href='css/about&contactus.css'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/top_bar.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
 
    <body class="about_body">
    <?php include('inc/new_top_bar.php'); ?> 
        <div class="about_header">
        
           <h4>ABOUT US</h4>
        </div>
        <div class="middle-content">
        <div class="content">
            <h3>| WHO WE ARE</h3>
             <p>Our web site http//ceylontreck.com has been founded local tour guides , to have better visibility and a fair price on their services.</p>
        </div>
       
        <div class="content 2">
            <h3>| EXCELLENT SERVICES AND A REVIEW PLATFORM</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit corporis ipsa consequatur facere sapiente ea harum exercitationem fugiat provident impedit omnis, veniam dolor laborum numquam incidunt possimus sed illum atque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam obcaecati nisi corrupti consectetur magnam minus quod perferendis, voluptate maiores enim tempora assumenda provident eos itaque iste excepturi earum libero veritatis! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus debitis harum commodi earum voluptas officiis maxime dolores ad iusto explicabo modi nemo est maiores asperiores velit odit, vel consequuntur corporis.</p>
        </div>

        <div class="content 3">
            <h3>| OUR GOAL</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolores aspernatur, tempora eveniet laudantium corrupti, laborum natus quae esse error enim architecto excepturi consectetur voluptatem voluptas voluptatum illum debitis numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus esse itaque officia quisquam repudiandae quo omnis architecto rerum dolorum eligendi quibusdam asperiores, placeat dolores nesciunt porro maxime vero magnam. Vero?</p>
        </div>

      </div><!--middle-content--> 
      
        <div class="contactus">
             <table>
                 <tr>
                     <td>
                         <div class="contact_form" >
                            <form>
                            <h4>For more information visit our Frequently Asked Questions Page <a href="">here</a> </h4>
                            <h3>To contact us with any questions you have, fill out the form below. </h3>
                                <label for="name">Name</label><br>
                                <input type="text" id="name" name="name"><br>
                                <label for="email">Email</label><br>
                                <input type="email" id="email" name="email"><br>
                                <label for="subject">Subject</label><br>
                                <input type="subject" id="subject" name="subject"><br>
                                <label for="message">Message</label><br>
                                <textarea style="border-radius:10px; margin-top:10px" name="message" cols="78" rows="5"></textarea><br>
                                <button name="send">Send</button>
                            </form>

                            <div style="text-align: center;">
                                <div
                                    class="g-recaptcha" 
                                    data-sitekey="YOUR SITE KEY"    
                                ></div>
                            </div>
                         </div>
                     </td>
                     <td>
                       
                         
                     </td>
                        

                     
                 </tr>
             </table>
        </div><!--contactus-->
        <div class="aboutend"><?php include('inc/footer.php'); ?> </div>
       
       
    </body>


   
</html>
