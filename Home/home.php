<?php
    
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="newstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <title>Nano Clinic Health [Home]</title>
</head>
<body>
    

    <!--Starting of the header-->


    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>nanoClinic</a>
    
        <nav class="navbar">
            <a href="..\Home\home.php">home</a>
            <a href="..\Services_Facilities\services.php" >services & facilities</a>
            <a href="..\Appoinment\appointment.php" >Channelings</a>
            <a href="..\Aboutus\about.php">About us</a>
            <a href="..\Profile\profile.php">Profile</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
        <div class="name">
            <p>
                <?php
                
                if(isset($_SESSION['username'])){


                    $name=$_SESSION['username'];
                    echo "<h1>Hello ... . <span> $name</span></h1>";

                }

                ?>
            </p>
        </div>
        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div> 
            <div class="fas fa-user" id="login-btn"></div>
        </div>
    
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    
    
        <form action="#" method="post" class="login-form">
            <h3>login now</h3>
            <input type="text" placeholder="username" name="username" class="box">
            <input type="password" placeholder="your password" name="password" class="box">
            <p>don't have an account <a href="..\Registration\registration.php">create now</a></p>
            <input type="submit" value="login now" name="login" class="btn">
            <input type="submit" value="logout now" name="logout" class="btn">
        </form>

        <?php

$hostname = "localhost:3308";
$username = "root";
$password = "";
$db = "nanoclinic";
$conn= new mysqli($hostname,$username,$password,$db);
// Check connection
if ($conn->connect_error) {
die("Database Connection failed: " . $conn->connect_error);
}
      
      if(isset($_POST['login'])){

         $username = $_POST['username'];
         $password = $_POST['password'];
        
         $check = " SELECT * FROM logged_user WHERE fname = '$username' and password = '$password' ";
      
         $result=mysqli_query($conn, $check);
  
        if(mysqli_num_rows($result) > 0){

            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header('location:..\Home\home.php');

        }
        else{

            echo "<script>alert('Please enter correct login details!!')</script>";
        }
        
    }
    if(isset($_POST['logout'])){

        session_unset();
        session_destroy();

        header('location:..\Home\home.php');
       
   }
                  
        ?>
    
    </header>

    



    <!--Ending of the header-->


    <section class="home overla" id="home">

        <div class="image">
           
        </div>
    
        <div class="content">
            <h3 class="anim">Inspiring <span class="autoo"> Better Health.</span></h3>
            <p class="anim">Affordable Health Care in the island paradise,as good as anywhere in the world,for patients from anywhere in the world.Convalesce in the most beautiful country, on the beaches, on the hills, in the wilderness.</p>
            <a href="..\Aboutus\about.php" class="btn anim"> contact us <span class="fas fa-chevron-right"></span> </a>
        </div>
    
    </section>
    
    <!-- home section ends -->


    <!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"><span>Gallery</span> </h1>

    <div class="box-container">

        <div class="box anim">
            <img src="Images/1.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>24/7 ambulance</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>
        <div class="box anim">
            <img src="Images/2.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>bed facility</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>
        <div class="box anim">
            <img src="Images/3.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>medicines</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>
        <div class="box anim">
            <img src="Images/4.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>modern cafeteria</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>
        

        <div class="box anim">
            <img src="Images/5.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>laboratories</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>
        <div class="box anim">
            <img src="Images/6.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>covid-19 treatment</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>
        <div class="box anim">
            <img src="Images/7.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>emergency centre</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>
        <div class="box anim">
            <img src="Images/8.jpg">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>mental health centre</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            </div>
            
        </div>

       
       


    </div>

</section>

<!-- services section ends -->


 <!-- Channeling section starts  -->

 <section class="channeling" id="channeling">

    <h1 class="heading"> our <span>Channelings</span> </h1>
    <div class="bg">

        <div class="content">
            <h3 class="anim">Make an appointment</h3>
            <p class="anim">Video/Audio Doctor Channeling Service<br>Call 225 on your mobile or 1225 on your SLT Landline</p>
            <a  href="..\Appoinment\appointment.php" class="btn anim">GO <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

    

</section>

<!-- Channeling section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img class="anim" src="Images/extraprofileformimage.png" alt="">
        </div>

        <div class="content">
            <h3 class="anim">History</h3>
            <p class="anim">Counting more than 30 years of excellence in healthcare.Nano clinic Health comprises nanoClinic Surgical Hospital, nanoClinic Medical Hospital, nanoClinic Central Hospital, nanoClinic Hospital.

                nanoClinic Health has a reputation for continuously investing in its infrastructure in order to offer patients the very latest in medical care.</p>
            <a href="..\Aboutus\about.php"  class="btn anim"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->


<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="Images/doc-1.jpg" alt="">
            <h3>Dr.Amandi Weerathunga</h3>
            <span>Radiologists</span>
            <div class="share">
                <a  class="fab fa-facebook-f"></a>
                <a  class="fab fa-twitter"></a>
                <a  class="fab fa-instagram"></a>
                <a  class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="Images/doc-2.jpg" alt="">
            <h3>Dr.Suranga Perera</h3>
            <span>Cardiologist</span>
            <div class="share">
                <a  class="fab fa-facebook-f"></a>
                <a  class="fab fa-twitter"></a>
                <a  class="fab fa-instagram"></a>
                <a  class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="Images/doc-3.jpg" alt="">
            <h3>Dr.Sarath Abegunawardena</h3>
            <span>Neurologist</span>
            <div class="share">
                <a  class="fab fa-facebook-f"></a>
                <a  class="fab fa-twitter"></a>
                <a  class="fab fa-instagram"></a>
                <a  class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="Images/doc-4.jpg" alt="">
            <h3>Dr.Prasanna</h3>
            <span>Nephrologist</span>
            <div class="share">
                <a  class="fab fa-facebook-f"></a>
                <a  class="fab fa-twitter"></a>
                <a  class="fab fa-instagram"></a>
                <a  class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="Images/doc-5.jpg" alt="">
            <h3>Dr.Madura</h3>
            <span>Surgeon</span>
            <div class="share">
                <a  class="fab fa-facebook-f"></a>
                <a  class="fab fa-twitter"></a>
                <a  class="fab fa-instagram"></a>
                <a  class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="Images/doc-6.jpg" alt="">
            <h3>Dr.Vishva lanka</h3>
            <span>Psychiatrist</span>
            <div class="share">
                <a  class="fab fa-facebook-f"></a>
                <a  class="fab fa-twitter"></a>
                <a  class="fab fa-instagram"></a>
                <a  class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->




<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="..\Home\home.php"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="..\Services_Facilities\services.php"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="..\Aboutus\about.php"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="..\Appoinment\appointment.php"> <i class="fas fa-chevron-right"></i> chennelings </a>
            <a href="..\Profile\profile.php"> <i class="fas fa-chevron-right"></i> profile </a>
        </div>

        <div class="box">
            <h3>our centers</h3>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Heart Centre </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Blood Canner Centre </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Kidney Care Centre </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Neurology Centre </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Radiology Centre </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="..\Aboutus\about.php"> <i class="fas fa-phone"></i> +94767769305 </a>
            <a href="..\Aboutus\about.php"> <i class="fas fa-phone"></i> +94111289469 </a>
            <a href="..\Aboutus\about.php"> <i class="fas fa-envelope"></i> info.nanoclinic@gmail.com </a>
            <a href="..\Aboutus\about.php"> <i class="fas fa-map-marker-alt"></i> 165/52,Wijerama road,Colombo 7</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="..\Aboutus\about.php"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="..\Aboutus\about.php"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="..\Aboutus\about.php"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="..\Aboutus\about.php"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> nanoClinic HEALTH 2022 <span>Solution by 99x</span> | PRIVACY POLICY </div>

</section>

<!-- footer section ends -->


<!-- Social Media Icons -->

<div class="social">

    <i class="fab fa-facebook-f"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-instagram"></i>
    <i class="fab fa-linkedin"></i>
    <i class="fab fa-pinterest"></i>
</div>

<script src="js.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
    var typed=new Typed(".autoo",{
        strings: ["Better care","Healthy life","Better world"],
        typeSpeed: 150,
        backSpeed: 150,
        loop: true
    })
</script>

</body>
</html>