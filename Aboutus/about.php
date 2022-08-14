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
    <link rel="stylesheet" href="styleAbout.css">
    <title>About us</title>
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
            header('location:..\Aboutus\about.php');

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

    <section class="br">
    </section>

    <section class="back1">
        <div class="sec1">
            <div class="column">
                <div class="card">
                  <img src="user-icon1.jpg" alt="Sanuga" style="width:100%">
                  <div class="container">
                    <h2>k.Sanuga Lakdinu Kuruppu</h2>
                    <p class="title">CODSE211F-027</p>
                    
                    <p><b><i>Work - Home Page | Contact No :- 0767769305</i></b></p>
                    
                   
                  </div>
                </div>
              </div>
        </div>
        <div class="sec2">
            <div class="column">
                <div class="card">
                  <img src="user-icon1.jpg" alt="Manula" style="width:100%">
                  <div class="container">
                    <h2>Manula Anujitha Rathnayake</h2>
                    <p class="title">CODSE211F-028</p>
                    <p><b><i>Work -About US Page</i></b></p>
                   <p>  </p>
                  </div>
                </div>
              </div>
        </div>
        <div class="sec3">
            <div class="column"> 
                <div class="card">
                  <img src="user-icon1.jpg" alt="Pasindu" style="width:100%">
                  <div class="container">
                    <h2>P.Pasindu Dulanjana Anuruddha</h2>
                    <p class="title">CODSE211F-022</p>
                    <p><b><i>Work - Registration Page,Chanelling Page</i></b></p>
                    <p>  </p>
                   
                  </div>
                </div>
              </div>
        </div>
    </section>

    <section class="back2">
        <div class="sec4">
            <div class="column">
                <div class="card">
                  <img src="user-icon1.jpg" alt="Gehan" style="width:100%">
                  <div class="container">
                    <h2>A.G. Gehan Chathushka</h2>
                    <p class="title">CODSE211F-021</p>
                    <p><b><i>Work - User Profile Page</i></b></p>
                    <p></p>
                   
                  </div>
                </div>
            </div>
              
        </div>

        <div class="sec5">
            <div class="column">
                <div class="card">
                  <img src="user-icon1.jpg" alt="Thevidu" style="width:100%">
                  <div class="container">
                    <h2>M.W. Thevidu Mithmal</h2>
                    <p class="title">CODSE211F-026</p>
                      <p><b><i>Work - Services & Faculties Page, Contact Us Page</i></b></p>
                    <p></p>
                    
                  </div>
                </div>
            </div>
        </div>

        <div class="sec6">
            <div class="column">
                <div class="card">
                  <img src="user-icon1.jpg" alt="Kanishka" style="width:100%">
                  <div class="container">
                    <h2>S.A.M. Kanishka</h2>
                    <p class="title">CODSE211F-024</p>
                      <p><b><i>Work - User Profile Page</i></b></p>
                    <p> </p>
                   
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class="br">
    </section>

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
            <a href="#"> <i class="fas fa-chevron-right"></i> Heart Centre </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Blood Canner Centre </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Kidney Care Centre </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Neurology Centre </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Radiology Centre </a>
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

    <script src="exot.js"></script>
    

</body>
</html>