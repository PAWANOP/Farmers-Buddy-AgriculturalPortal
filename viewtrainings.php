
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel = "icon" href="images/tree.png" 
        type = "image/x-icon"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Farmers Buddy</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/viewtrainings.css">
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
          <li><a href="Iindex.php">LOGIN</a></li>
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
               <li><a href="viewquery.php">VIEW QUERIES</a></li>
               <li><a href="addquery1.php">Add QUERIES</a></li>
           </ul>
              
      </nav>
    <form action="">
       <h2>View Trainings</h2>
       <table border="2px" id="tablebox" class="center" >
          <tr>
             <th>Name</th>
             <th>Role</th>
             <th>Place</th>
             <th>Title</th>
             <th>Description</th>
             <th>Request Schedule</th>
         </tr>
          <tr>
              <td>Rahul</td>
              <td>Harvesting</td>
              <td>Maharshtra</td>s
              <td>1</td>
              <td>Shipping Market</td>
              <td>May To July</td>
         </tr><tr>
              <td>Shivam</td>
              <td>Planting</td>
              <td>Andhra Pradesh</td>
              <td>2</td>
              <td>Integrated crop management</td>
              <td>August To October</td>
         </tr>
         <tr>
              <td>Mahesh</td>
              <td>Fertilizing and Watching the Weather</td>
              <td>Karnataka</td>
              <td>3</td>
              <td>Climate condition</td>
              <td>june  To julhy</td>
         </tr>
         <tr>
              <td>Anil</td>
              <td>Black Soil</td>
              <td>Kerala</td>
              <td>4</td>
              <td>Training regarding black Soil</td>
              <td>Feb To April</td>
         </tr>
         <tr>
              <td id="result-name">Ravi</td>
              <td id="result-role">Agricultural</td>
              <td id="result-place">Mumbai</td>
              <td id="result-title">5</td>
              <td id="result-desc">Training regarding black soil</td>
              <td id="result-sched">Feb To April</td>
         </tr>
      </table>
      <div id="viewtrainings">
          <input type="button" name="" id="" value="Request" onclick="javascript:location.href='requestfortraining.php'">
      </div>
     </form>
    
    </div>
</div>
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
                <a href="">HOME</a>
                <a href="aboutus.php">ABOUT US</a>
                <a href="login.php">LOGIN</a>
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
         
<script src="js/viewtrainings.js"></script>
</body>
</html>


