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
  <link rel="stylesheet" href="css/requestfortraining.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/index.js"></script>
</head>
<body>
   <div id="home">
    <div class="container-1">
       <div class="top-images-1">
          <img src="images//FIRST.png">
       </div>
       <nav>
      <ul class="mainMenu">
          <li><a href="index.php">LOGIN</a></li>
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
               <li><a href="addquery1.php">ADD QUERIES</a></li>
           </ul>
              
  </nav>
        
    
     <div id="req-head">
       <h1 style="font-size: 25px; margin-left: 120px; margin-top: 35px;" >Request For Trainings</h1>
     </div>
     <div id="requestfortrainings">
       <form action="viewtrainings.php">
         <div id="request-name">
           <label for="">Name</label>
           <input type="text" name="name" id="request-placename">
           
         </div>
         <div id="request-role" style="margin-bottom: 18px;">
           <label for="">Role</label>
           <select type="text" name="Role" id="request-placerole">
             <option value="" disabled selected>SELECT</option>
             <option value="Student">Student</option>
             <option value="Farmer">Farmer</option>
           </select>
           
         </div>
         <div id="request-place" style="margin-bottom: 18px;">
           <label for=""> Place</label>
           <input type="text" name="Place" id="request-placeplace">
           
         </div>
         <div id="request-title" style="margin-bottom: 18px;">
           <label for="">Title</label>
           <input type="text" name="Title" id="request-placetitle">
           
         </div>
         <div id="request-edesc" style="margin-bottom: 18px;">
           <label for="">Description</label>
           <input type="text" name="Description" id="request-placedesc">
           </select>
         </div>
         <div id="request-sched" style="margin-bottom: 18px;">
           <label for="">Request Schedule</label>
           <input type="text" name="RequestSchedule" id="request-placesched">
           </input>
         </div>
         <div id="request-buton">
           <input type="Submit" name="" id="" value="Send" onclick="handleSubmit()"/>
           <input type="Reset" name="" id="" value="Cancel">
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
                <a href="logindone.php">HOME</a>
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
               ?? 2021 | Created & Designed By<a href="https://www.instagram.com/codinghub123/">Codinghub123</a>
             </div>
             <div class="footer-image">
               <img src="images/tree.png" alt="">
            </div>
         </footer>
         <script src="js/requestfortrainings.js"></script>
</body>
</html>