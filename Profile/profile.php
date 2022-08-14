<?php
    
    session_start();
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Setting Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="Design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" crossorigin="anonymous">
    <script
      src="https://kit.fontawesome.com/09789629f4.js"
      crossorigin="anonymous"
    ></script>
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
            header('location:..\Profile\profile.php');

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
   if(isset($_POST['update'])){


    if(isset($_SESSION['username'])){

        $fname=$_POST['fname'];
        $nic=$_POST['nic'];
        $tp=$_POST['tp'];
        $email=$_POST['email'];

        $password = $_SESSION['password'];
        
         $check = " Update logged_user set fname='$fname' , nic='$nic' , mobile='$tp' , email='$email' WHERE password = '$password' ";
      
         $result=mysqli_query($conn, $check);
  
        if($result){

            echo "<script>alert('Successfully Updated')</script>";

        }
        else{
            echo "<script>alert('Error! Not Successfully Updated!!!')</script>";
        }
        
    }
    
   
}
                  
        ?>
    
    </header>



    <!--Ending of the header-->
    
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
$fname="not logged!";
$nic="not logged!";
$mobile="not logged!";
$Email="not logged!";

if(isset($_SESSION['username'])){

    $pass=$_SESSION['password'];

    $select = " SELECT * FROM logged_user WHERE password='$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

    while($row=$result->fetch_assoc()){
        $fname=$row["fname"];
        $nic=$row["nic"]; 
        $mobile=$row["mobile"];
        $Email=$row["email"]; 


   }
    }
}



    
    
        ?>

    <div class="fjk">
    <div class="container">
        
        
        <div class="leftbox">
            <nav>
                <a onclick="tabs(0)" class="tab active">
                    <i class="fa fa-user"></i>
                </a>
                <a onclick="tabs(1)" class="tab">
                    <i class="fa fa-credit-card"></i>
                </a>
                <a onclick="tabs(2)" class="tab">
                    <i class="fa fa-tv"></i>
                </a>
                <a onclick="tabs(3)" class="tab">
                    <i class="fa fa-tasks"></i>
                </a>
                <a onclick="tabs(4)" class="tab">
                    <i class="fa fa-cog"></i>
                </a>
            </nav>
        </div> 
        <div class="rightbox">
            <div class="profile tabShow">
                <form action="#" method="post">
                <h1>Personal Info</h1>
                <h2>Full Name</h2>
                <input type="text" class="input" name="fname" value="<?php echo $fname; ?>">
                <h2>NIC</h2>
                <input type="text" class="input" name="nic" value="<?php echo $nic;?>">
                <h2>Mobile Number</h2>
                <input type="text" class="input" name="tp" value="<?php echo $mobile;?>">
                <h2>Email</h2>
                <input type="text" class="input" name="email" value="<?php echo $Email;?>">
                <input type="submit" value="Update" name="update" class="btn">

                </form>
            </div>

            
        </div>

        
       

        
    

        
    </div>
    <div class="imge">

        <img src="hospital (2).png">


    </div>
    
</div>


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

<!-- footer section ends -->

    <script src="exot.js"></script>
    

</body>
</html>