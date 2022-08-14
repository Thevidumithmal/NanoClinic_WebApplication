<?php
    
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="Design.css">
    <title>Nano Clinic Health [Chenneling]</title>
</head>
<body>
    <section >
        <header class="header">

            <a  class="logo"> <i class="fas fa-heartbeat"></i> NanoClinic </a>
        
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
            header('location:..\Appoinment\appointment.php');

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
    </section>

    <section class="break">
    </section>

    <section>
        <div class="info">
            <div class="sec1">
                
                <h1>Book You Slot Now and Save your time</h1>
                <p>Make an appointment through our Video / Audio Doctor Channeling Service</p>
                <h3>Call 225 on your mobile or 1225 on your SLT landine</h3>
            </div>
            <div class="sec2">
                <form name="regappointment" action="#" onsubmit="return appoinment()" method="post">
                <div class="form">
                    <div class="form-head">
                        <p class="head">
                            Doctor Channeling - NanClinic
                        </p>
                    </div>
                    <div class="form-mid">

                        
                        <div class="form-spel">
                            <label for="" class="l-spel">Doctor Name</label>
                            <select name="Doctor_name" id="" class="c-spel">
                                <option value="Dr.Suranga Perera">Dr.Suranga Perera [Cardiologist]</option>
                                <option value="Dr.Amandi Weerathunga">Dr.Amandi Weerathunga [Radiologists]</option>
                                <option value="Dr.Sarath Abegunawardena">Dr.Sarath Abegunawardena [Neurologist]</option>
                                <option value="Dr.Prasanna">Dr.Prasanna [Nephrologist]</option>
                                <option value="Dr.Chandrika Samarasingha">Dr.Chandrika Samarasingha [Rheumatologist]</option>
                                <option value="Dr.Himaya Dewage">Dr.Himaya Dewage [Pediatrician]</option>
                                <option value="Dr.Madura">Dr.Madura [Surgeon] </option>
                                <option value="Dr.Vishva lanka">Dr.Vishva lanka [Psychiatrist]</option>
                                <option value="Dr.Nirasha Prasadini">Dr.Nirasha Prasadini [Cardiologist]</option>
                            </select>
                        </div>

                        <div class="form-spel">
                            <label for="" class="l-spel">Date</label>
                            <input type="date" name="adate" class="d-spel" >
                        </div>

                        <div class="form-spel">
                            <label for="" class="l-spel">Patient Name</label>
                            <input type="text" class="spel"  name="Patient_name">
                        </div>
                        
                        <div class="form-spel">
                            <label for="" class="l-spel">Mobile Number</label>
                            <input type="text" class="spel" name="tp">
                        </div>

                        <div class="form-spel">
                            <label for="" class="l-spel">NIC Number</label>
                            <input type="text" class="spel" name="nic">
                        </div>

                        <div class="form-spel-button">
                            <input type="submit"  class="sub" name="submit">
                        </div>

                        <?php

                        
$hostname = "localhost";
$username = "root";
$password = "";
$db = "nanoclinic";
$conn= new mysqli($hostname,$username,$password,$db);
// Check connection
if ($conn->connect_error) {
die("Database Connection failed: " . $conn->connect_error);
}
      
      if(isset($_POST['submit'])){

         $Doctor_name = $_POST['Doctor_name'];
         $adate = $_POST['adate'];
         $Patient_name = $_POST['Patient_name'];
         $tp = $_POST['tp'];
         $nic = $_POST['nic'];


         if(isset($_SESSION['username'])){

            $insertl = "INSERT INTO appointment VALUES('$nic','$Doctor_name','$adate','$Patient_name','$tp')";
               
            $result=mysqli_query($conn, $insertl);
            if($result){
                echo "<script>alert('New appointment is added...')</script>";
          
             }
             

         }
         else if((isset($_SESSION['username']))==false){
    
            echo "<script>alert('First you must register!!!')</script>";
            
         }
                         
      } 
                            
                        ?>


                    </div>
                    <div class="form-foot">

                    </div>
                </div>
            </form>
            </div>
        </div>
    </section>

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
        <a href="..\Services_Facilities\services.php"> <i class="fas fa-chevron-right"></i> Heart Centre </a>
        <a href="..\Services_Facilities\services.php"> <i class="fas fa-chevron-right"></i> Blood Canner Centre </a>
        <a href="..\Services_Facilities\services.php"> <i class="fas fa-chevron-right"></i> Kidney Care Centre </a>
        <a href="..\Services_Facilities\services.php"> <i class="fas fa-chevron-right"></i> Neurology Centre </a>
        <a href="..\Services_Facilities\services.php"> <i class="fas fa-chevron-right"></i> Radiology Centre </a>
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
    <script src="exot.js"></script>
    
</body>
</html>