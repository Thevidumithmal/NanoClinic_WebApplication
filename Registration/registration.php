<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="registrationstyle.css">

</head>
<body>
   
<div class="form-container">

   <form action="#" method="post">
      <h3>register now</h3>
      <?php


      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="fname" required placeholder="enter first name">
      
      <input type="text" name="nic" required placeholder="enter nic number">
      <input type="text" name="mobile" required placeholder="enter mobile number">
      
      <input type="email" name="email" required placeholder="enter your email">
      
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Click here to go back.. <a href="..\Home\home.php">here</a></p>

      
   </form>

</div>


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
      
      if(isset($_POST['submit'])){

         $fname = $_POST['fname'];
         $nic = $_POST['nic'];
         $mobile = $_POST['mobile'];
         $email = $_POST['email'];
         $pass = $_POST['password'];
         $cpass = $_POST['cpassword'];
         $id=0;
         $id1=0;
      
         
            if($pass != $cpass){
               $error[] = 'password not matched!';
            }else{

  
                  $insertl = "INSERT INTO logged_user(did,fname,nic,mobile,email,password) VALUES('$nic','$fname','$nic','$mobile','$email','$pass')";
               
              $result= mysqli_query($conn, $insertl);

              if($result){

               echo "<script>alert('You have successfully registered.....')</script>";
               header('location:..\Home\home.php');
              }

            }
                  
      } 
            
        
      
      
      
      
      ?>




</body>
</html>