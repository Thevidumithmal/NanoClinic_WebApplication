<?php
    
    session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nano Clinic Health [Services & Facilities]</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
</head>
<body>
    

   
    <main>
        

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
                    echo "<h2>Hello ... . <span> $name</span></h2>";

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
            header('location:..\Services_Facilities\services.php');

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

        <!-- banner one -->
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "fas fa-quote-left"></i> “Time and health are two precious assets that we don't recognize and appreciate until they have been depleted.” <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm"> - Denis Waitley</small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- why choose section -->
        <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h1 class = "lead">Why Choose Nano Clinic</h1>
                    <p class = "text text-lg">A perfect way to show your hospital services</p>
                    <div class = "line-art flex">
                        <div></div>
                        <img src = "images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-1.png">
                        </div>
                        <h3>We believe movement matters</h3>
                        <p class = "text text-sm">We've made it our mission to support all kinds of movement: for every body, at every stage. Movement matters when it comes to enjoying life, regardless of whether you're an elite athlete or hoping to alleviate every day pain.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-4.png">
                        </div>
                        <h3>We use our experience to support your needs.</h3>
                        <p class = "text text-sm">We believe that every patient, and their movement, is unique. It's why we leverage the varied skills of our team when assessing a specific injury or focus area. This allows you to be paired with the practitioner whose expertise best suits your needs.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-3.png">
                        </div>
                        <h3>We're there when you need us</h3>
                        <p class = "text text-sm">We know it's important to be available when you need us. It's why we've built a network of practices all around Australia and filled them with the most supportive and experienced professionals in the industry.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-2.png">
                        </div>
                        <h3>High quality, cost-efficient healthcare</h3>
                        <p class = "text text-sm">Nano Clinic is committed to providing high quality, cost-efficient healthcare in its hospitals and clinics. We are able to provide free, no-obligation quotes for a wide range of treatments, consultations and tests to our self-pay patients. We also provide care to insurance patients.</p>
                    </article>

                    
                    
                </div>
            </div>
        </section>
        <!-- end of why choose section -->

        <!-- banner two section -->
        <section id = "banner-two" class = "banner-two text-center">
            <div class = "container grid">
                <div class = "banner-two-left">
                    <img src = "images/banner-2-img.png">
                </div>
                <div class = "banner-two-right">
                    <p class = "lead text-white">“Good health is not something we can buy. However, it can be an extremely valuable savings account.” </p>
                    <div class = "btn-group">
                        <a href = "#package-service" class = "btn btn-white">Learn More</a>
                        <a href = "..\Registration\registration.php" class = "btn btn-light-blue">Sign Up</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        <!-- faacilities section -->
        <section id = "doc-panel" class = "doc-panel py">
            <div class = "container">
                <div class = "section-head">
                    <h1>Our Facilities</h1>
                </div>

                <div class = "doc-panel-inner grid">
                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/atm.jpg" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">BANKING & ATM FACILITIES</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/foods.jpg" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">FOOD & BEVERAGES</p>
                                
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/cafe.jpg" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">CAFE</p>
                               
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/room.jpg" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">ROOM FACILITIES</p>
                               
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/elevater.jpg" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">ELEVATER FACILITIES</p>
                                
                            </div>
                        </div>
                    </div>


                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/car-park.jpg" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">PARKING FACILITIES</p>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
        </section>
        <!-- end of facility section -->

        <!--  services section -->
        <section id = "package-service" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h1>Services</h1>
                    <p class = "text text-lg">Best service for you</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-kit-medical fa-2x"></i>
                        </div>
                        <div class = "photo">
                            <img src = "images/operation.jpg">
                        </div>
                        <h3>SURGICAL DEPARTMENT</h3>
                        
                        <p class = "text text-sm">We want to ensure you that you receive the very best surgical outcome which is why we have a comprehensive team of consultants specializing in surgical procedures, so you know you are in the safest hands</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                        
                    </div>

                    <div class = "package-service-item bg-white">
                        
                        <div class = "icon flex">
                            <i class = "fas fa-ear-listen fa-2x"></i>
                        </div>
                        <div class = "photo">
                            <img src = "images/ent.jpg">
                        </div>
                      
                        <h3>ENT CENTRE</h3>
                        <p class = "text text-sm" >Our ENT Centre provides specialized ENT care with comprehensive ENT therapy, complex ENT procedures and surgery under one roof.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-hospital fa-2x"></i>
                        </div>
                        <div class = "photo">
                            <img src = "images/opd.jpg">
                        </div>

                        <h3>OPD</h3>
                        <p class = "text text-sm">Easy consultations with a wide range of Specialist doctors through our convenient and efficient OPD service.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>
  
                </div>

                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-medkit fa-2x"></i>
                        </div>
                        <div class = "photo">
                            <img src = "images/pharmacy.jpg">
                        </div>
                        <h3>PHARMACIES</h3>
                        <p class = "text text-sm">Nano Clinic offers a wide range of Pharmacy's throughout the country.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div> 

                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-syringe fa-2x"></i>
                        </div>
                        <div class = "photo">
                            <img src = "images/vaccination.jpg">
                        </div>
                        <h3>VACCINATIONS</h3>
                        <p class = "text text-sm">We have a team of expert paediatricians and superior vaccination storage facilities so that our Vaccination Clinic runs on par with the National Vaccination Program</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-person-walking fa-2x"></i>
                        </div>
                        <div class = "photo">
                            <img src = "images/Physiotherapy.jpg">
                        </div>
                        <h3>PHYSIOTHERAPY</h3>
                        <p class = "text text-sm">We practice only thoroughly validated therapies through consultation with our physicians who work closely with our therapists to offer you the best physiotherapy.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>  
                </div>

            </div>
        </section>
        <!-- end of package services section -->

        <!-- posts section -->
        <section id = "posts" class = "posts py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Latest Post</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/walk.jpg">
                        </div>
                        <div class = "content">
                            <h4>The West Side Walk for Wellness</h4>
                            <p class = "text text-sm">The West Side Walk for Wellness kicked off its 2022 season with an event at Garfield Park Saturday aimed at promoting healthy living and community.</p>
                            <p class = "text text-sm"> Participants received RUSH gear and words of motivation from RUSH leaders before starting their walk through the park.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> June 27, 2022</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 100 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/children.jpg">
                        </div>
                        <div class = "content">
                            <h4>Children's Mental Health Visits to Emergency Departments Increased During COVID-19 Pandemic</h4>
                            <p class = "text text-sm">In the Chicago area, pediatric mental health Emergency Department (ED) visits increased 27 percent at the onset of the COVID-19 pandemic, followed by a 4 percent increase monthly through February 2021, according to a study from Ann & Robert H. Lurie Children’s Hospital of Chicago published in the journal Academic Pediatrics.</p>
                            <p class = "text text-sm">The authors found increased ED visits for suicide, self-injury and disruptive behaviors, as well as higher admission rates for these children.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> May 20, 2022</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 50 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/highblood.jpg">
                        </div>
                        <div class = "content">
                            <h4>Can High Blood Pressure Make You Feel Dizzy?</h4>
                            <p class = "text text-sm"> Hypertension, also known as high blood pressure, is called “the silent killer” for a reason: It can have far-reaching consequences for your health, but for the most part, it's not accompanied by any warning signs whatsoever.</p>
                            <p class = "text text-sm">Dizziness is sometimes thought to be a symptom of high blood pressure — but it's not usually the case, says preventive cardiologist Luke Laffin, MD. He explains how dizziness may be related to your blood pressure and what's probably happening instead. </p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> July 02, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 55 comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of posts section -->


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
        <a href="#package-service"> <i class="fas fa-chevron-right"></i> Heart Centre </a>
        <a href="#package-service"> <i class="fas fa-chevron-right"></i> Blood Canner Centre </a>
        <a href="#package-service"> <i class="fas fa-chevron-right"></i> Kidney Care Centre </a>
        <a href="#package-service"> <i class="fas fa-chevron-right"></i> Neurology Centre </a>
        <a href="#package-service"> <i class="fas fa-chevron-right"></i> Radiology Centre </a>
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


        
    </main>

   


    <!-- custom js -->
    <script src = "js/script.js"></script>
    <script src="js.js"></script>
</body>
</html>