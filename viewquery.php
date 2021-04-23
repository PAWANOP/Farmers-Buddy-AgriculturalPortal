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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="css/viewquery.css">
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
          <li><a href="index.php">LOGIN</a></li>
          <li><a href="aboutus.php">ABOUT US</a></li>
          <li><a href="">TRAININGS
            <i class="fa fa-caret-down"></i>
          </a>
           <ul class="subMenu">
               <li>
                  <a href="viewtrainings.php">VIEW TRAININGS </a>
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
     <form action="" onsubmit="">
           <div id="viewquery-head">
            <h1>The Posted Query Are</h1>
            <p style="color: green; margin-top:20px;">
            Q:1 How can we prevent the dropping of Coconut fruit? 
            <span style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:2 Design for Farm management plan? 
            <span style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:3 What are the basic differences among different yield levels/types?
            <span  style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:4 Crop water productivity analysis for rice farm by using AquaCrop 
            <span  style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:5 How to address theft of agricultural produce at farm?
            <span  style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:6 What is the role of non-edible weeds in mitigating carbon emissions?
            <span  style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:7 Farming is an non profitable occupation ? If agree / disagee reasons? 
            <span  style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:8 Which mulching will be more beneficial either plastic mulching or organic mulching? 
            <span  style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:9 Why information about export potential, is not shared with farmers ? 
            <span  style="font-size: 20px;">
            </span>
           </p>
           <p style="color: green; margin-top:20px;">
            Q:10  
            <span id="result-surname" style="font-size: 20px;">
            </span>
           </p>
         </div>
        
       <div id="viewquery"> 
        <input type="Submit" name="" id="show" value="Show Answer" onclick="alert('Only authorized USERs are able to view the answers\n\t\So Please LOGIN/REGISTER')" >
        <input type="button" name="" id="post" value="Post Query" onclick="javascript:location.href='addquery1.php'">
      </div>
   </form>
 </div>
</div>

<video src="images/video.mp4" muted  autoplay></video>

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
         <script  src="js/result.js" ></script>
</body>
</html>