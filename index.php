

<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font awsome -->

    <link rel="stylesheet" href="medical.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>medical</title>
</head>

<body>

    <!-- heder start -->

    <header class="header">

        <a href="#" class="logo"><i class="fa fa-heartbeat"></i> <strong>SF</strong>medical</a>
        <nav class="navbar">


            <a href="#home">Home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#doctors">doctors</a>
            <a href="#appointment">appointment</a>
            <!--  <a href="#review">review</a> -->
            <a href="#bloges">bloges</a>
        </nav>

        <div id="menu-btn" class="fa fa-bars"></div>




    </header>
    <!-- header end -->

    <!-- home stats -->
    <section class="home" id="home">
        <div class="image">
            <img src="image/staff.jpg" alt="" height="400" width="300">
        </div>
        <div class="content">
            <h3>we take care of your helthy life</h3>
            <p> Wherever the art of medicine is loved, there is also a love of humanity</p>
            <a href="#appointment" class="btn">appointment us <span class="fa fa-chevron-right">

                </span></a>
        </div>

    </section>




    <!-- home end -->
    <!-- icon -->

    <section class="icons-container">

        <div class="icons">
            <i class="fa fa-user-md"></i>
            <h3>150+</h3>
            <p>docters at work</p>

        </div>

        <div class="icons">
            <i class="fa fa-users" aria-hidden="true"></i>
            <h3>1030+</h3>
            <p>satisfied patiants</p>

        </div>



        </div>

        <div class="icons">
            <i class="fa fa-hospital-o"></i>
            <h3>70+</h3>
            <p>available hospitals</p>


        </div>







    </section>
    <!--   icon end -->


    <!--  about start -->


    <section class="about" id="about">

        <h1 class="heading"><span>about</span>us</h1>

        <div class="row">

            <div class="image">
                <img src="" alt="">
            </div>

            <div class="content">
                <h3>take the world's best quality treatment</h3>
                <p>Dedicated to compassionate care and medical excellence, serving our community with integrity and
                    respect."


                </p>

                <p>Where healing begins, compassion thrives, and patients come first.</p>
                <a href="#" class="btn">learn more <span class="fa fa-chevron-right"></span></a>
            </div>
        </div>
    </section>



    <!--  about end-->



    <!--    services start -->

    <section class="services" id="services">

        <h1 class="heading">our <span>services</span></h1>
        <div class="box-container">

            <div class="box">
                <i class="fa fa-stethoscope"></i>
                <h3>free checkups</h3>
                <p></p>
                <a href="#" class="btn">learn more <span class="fa fa-chevron-right"></span></a>
            </div>


            <div class="box">
                <i class="fa fa-ambulance"></i>
                <h3>24/7</h3>
                <p></p>
                <a href="#" class="btn">learn more <span class="fa fa-chevron-right"></span></a>
            </div>



            <div class="box">
                <i class="fa fa-user-md"></i>
                <h3>expert doctors</h3>
                <p></p>
                <a href="#" class="btn">learn more <span class="fa fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <p></p>
                <a href="#" class="btn">learn more <span class="fa fa-chevron-right"></span></a>
            </div>


            <div class="box">
                <i class="fa fa-procedures"></i>
                <h3>bed facility</h3>
                <p></p>
                <a href="#" class="btn">learn more <span class="fa fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fa fa-heartbeat"></i>
                <h3>Total care</h3>
                <p></p>
                <a href="#" class="btn">learn more <span class="fa fa-chevron-right"></span></a>
            </div>




        </div>
    </section>


    <!--    services end -->

    <!-- docters end -->

    <section class="doctors" id="doctors">


        <h1 class="heading">our <span>docters</span></h1>
        <div class="box-container">

            <div class="box">
                <img src="image/d.jpg" alt="">
                <h3>Slase</h3>
                <span>expert docters</span>
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>



            </div>


            <div class="box">
                <img src="image/d.jpg" alt="">
                <h3>Slase</h3>
                <span>expert docters</span>
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="image/o.jpg" alt="">
                <h3>Slase</h3>
                <span>expert docters</span>
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/o.jpg" alt="">
                <h3>Slase</h3>
                <span>expert docters</span>
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/r.jpg" alt="">
                <h3>Slase</h3>
                <span>expert docters</span>
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/r.jpg" alt="">
                <h3>Slase</h3>
                <span>expert docters</span>
                <div class="share">
                    <a href="#" class="fa fa-facebook-f"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
            </div>
    </section>



    <!-- docters end -->


    <section class="appointment" id="appointment">

        <h1 class="heading">appointment <span>now</span></h1>

        <div class="for">
            <div class="image">
                <img src="image/res.jpg" alt="" width="400 " height="400">
            </div>


            <form action="<?php echo$-SERVER['PHP_SELF'];?> " method="post">
                <?php
                if(isset(message)){
                    foreach($message as $message){
                    echo'<p class ="message">'.$message.'</p>';
                }

                }
                <h3>make appointment</h3>
                <input type="text" name="name" placeholder="your name" class="box">
                <input type="number" name="number" placeholder="you number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <input type="date" name="date" class="box">
                <input type="submit" name="submit" value="appoinment now" class="btn">

            </form>


        </div>





        <hr>
    </section>



    <!--  blogs -->

    <section class="blogs" id="bloges">

        <h1 class="heading"><span>our</span>blogs</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="image/s.jpg" alt="">
                </div>

                <div class="content">
                    <div class="icon">
                        <a href="#"><i class="fa fa-calender"></i> 21 septemper 2024</a>
                        <a href="#" class="fa fa-user">by slase</a>
                    </div>

                    <h3> bloge title slase goes here</h3>
                    <p>Compassionate care, advanced medical expertise for you</p>

                    <a href="#" class="btn">learn more<spane class="fa fa-chevron-right"></spane></a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/home.jpg" alt="">
                </div>

                <div class="content">
                    <div class="icon">
                        <a href="#"><i class="fa fa-calender"></i> 21 septemper 2024</a>
                        <a href="#" class="fa fa-user">by slase</a>
                    </div>

                    <h3> bloge title slase goes here</h3>
                    <p>Expert care, personalized treatment for every patient.</p>

                    <a href="#" class="btn">learn more<spane class="fa fa-chevron-right"></spane></a>

                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="image/st.jpg" alt="">
                </div>

                <div class="content">
                    <div class="icon">
                        <a href="#"><i class="fa fa-calender"></i> 21 septemper 2024</a>
                        <a href="#" class="fa fa-user">by slase</a>
                    </div>

                    <h3> bloge title slase goes here</h3>
                    <p>Your health, our priority: trusted medical services</p>

                    <a href="#" class="btn">learn more<spane class="fa fa-chevron-right"></spane></a>

                </div>
            </div>
        </div>
    </section>






    </section>

    <!--  footer -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3 class="box">quick links</h3>
                <a href="#"><i class="fa fa-chevron-right"></i>home</a>
                <a href="#"><i class="fa fa-chevron-right"></i>about</a>
                <a href="#"><i class="fa fa-chevron-right"></i>services</a>
                <a href="#"><i class="fa fa-chevron-right"></i>docters</a>
                <a href="#"><i class="fa fa-chevron-right"></i>appointment</a>
                <a href="#"><i class="fa fa-chevron-right"></i>blogs</a>
            </div>

            <div class="box">
                <h3>our servisers</h3>
                <a href="#"><i class="fa fa-chevron-right"></i>Dentel care</a>
                <a href="#"><i class="fa fa-chevron-right"></i>massage therapy</a>
                <a href="#"><i class="fa fa-chevron-right"></i>cardioloty</a>
                <a href="#"><i class="fa fa-chevron-right"></i>diagnosis</a>
                <a href="#"><i class="fa fa-chevron-right"></i>ambulence services</a>


            </div>

            <div class="box">
                <h3>apoinment now</h3>
                <a href="#"><i class="fa fa-phone"></i>+0753637360</a>
                <a href="#"><i class="fa fa-phone"></i>+0765434357</a>

                <a href="https://github.com/mhdFarvis02/my-work-files"><i class=" fa fa-envelope"></i>
                    mhdfar@gmail.com</a>
                <a href="#"><i class="fa fa-map-marker-alt"></i>
                    nugegoda, colombo</a>



            </div>

        </div>
    </section>


</body>


</html>