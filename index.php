
<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['LoginName']))
{
    header("location: logindone.php");
    exit;
}
require_once "config.php";

$LoginName = $Password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['LoginName'])) || empty(trim($_POST['Password'])))
    {
        $err = "Please enter LoginName + Password";
    }
    else{
        $username = trim($_POST['LoginName']);
        $Password = trim($_POST['Password']);
    }


if(empty($err))
{
    $sql = "SELECT id, LoginName, password FROM users WHERE LoginName = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_LoginName);
    $param_LoginName = $LoginName;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $LoginName, $hashed_Password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($Password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["LoginName"] = $LoginName;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: logindone.php");
                            
                        }
                    }

                }
    }
}    


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  <meta charset="UTF-8">
  <link rel = "icon" href="images/tree.png" 
        type = "image/x-icon"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Farmers Buddy</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</head>
<body>
   <div id="home">
    <div class="container-1">
       <div class="top-images-1">
          <img src="images/FIRST.png">
       </div>
    <nav>
      <ul class="mainMenu">
          <li><a href="aboutus.php">ABOUT US</a></li>
          <li><a href="">TRAININGS
            <i class="fa fa-caret-down"></i>
          </a>
           <ul class="subMenu">
               <li>
                  <a href="viewtrainings.php">VIEW TRAININGS
                  </a>
               </li>
              </li>
               <li><a href="requestfortraining.php">REQUEST FOR TRAININGS
               </a>
                  </li>
           </ul>
            <!-- ......CROPS....... -->
          <li><a href="#">QUERIES
            <i class="fa fa-caret-down"></i>
          </a>
           <ul class="subMenu">
               <li>
                  <!-- <a href="#">ADD CROPS</a> -->
               </li>
              </li>
               <li><a href="viewqueries.php">VIEW QUERIES</a></li>
           </ul>
              
  </nav>
   <section id="login-page">
      <h1> Login <i class="fas fa-sign-in-alt"></i> </h1>
        <form  onsubmit="return myfun1()" action="logindone.php">
           <div id="user">
            <i class="fas fa-user"></i>
              <input type="text" id="username" name="LoginName" placeholder="Login Name">
         </div>
           <div id="pass">
            <i class="fas fa-key"></i>
              <input type="password" id="password" name="Password" placeholder="Password">
         </div>
            <div class="sign-clear">
               <a href="#"><input type="submit" value="Sign In"></a>
               <input type="reset" value="Clear">
            </div>
            <div class="forgot">
               <a href="forgotpass.php">Forgot Password</a>
            </div>
            <div class="for-register">
               <a href="reg.php">Register Now</a>
            </div>
            <div class="for-officer">
               <a href="agoregss.php">Agricultural Officer Registration</a>
            </div>
         </form>
   </section>
</div>

<video src="images/video.mp4"   muted  autoplay></video>

<section id="last-backimage">
       <img src="images/farm.jpg" alt="">
       <div id="history">
          <h1>History</h1>
       <p>Farming has been innovated at multiple different points and places in human history. The transition from hunter-gatherer to settled, agricultural societies is called the Neolithic Revolution and first began around 12,000 years ago, near the beginning of the geological epoch of the Holocene around 12,000 years ago.It was the world's first historically verifiable revolution in agriculture. Subsequent step-changes in human farming practices were provoked by the British Agricultural Revolution in the 18th century, and the Green Revolution of the second half of the 20th century. Farming spread from the Middle East to Europe and by 4,000 BC people that lived in the central part of Europe were using oxen to pull plows and wagons.</p>
      </div>
</section>
      <footer>
         
          <div class="footer-content">
 
             <div class="nav-bar-bottom">
                <a href="aboutus.php">ABOUT US</a>
                <a href="index.php">LOGIN</a>
                <a href="reg.php">REGISTER NOW</a>
                <a href="http://agricoop.nic.in/weather-watch" target="_blank">WHETHER FORCAST</a>
               </div>
             <div class="social-links">
             <a href="" class="fa fa-facebook" aria-hidden="true"></a>
             <a href="" class="fa fa-twitter" aria-hidden="true"></a>
             <a href="" class="fa fa-instagram" aria-hidden="true"></a>
             <a href="" class="fa fa-linkedin" aria-hidden="true"></a>
             </div>
            <div class="bottom"></div>
            <button class="goTop fas fa-arrow-up"></button>
            <div id="CR">
               © 2021 | Created & Designed By<a href="https://www.instagram.com/codinghub123/">Codinghub123</a>
             </div>
             <div class="footer-image">
               <img src="images/tree.png" alt="">
            </div>
         </footer>
         
<script src="js/login.js"></script>
</body>
</html>


