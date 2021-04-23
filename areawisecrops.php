
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
  <link rel="stylesheet" href="css/areawisecrops.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/js/index.js"></script>
</head>
<body>
   <div id="home">
    <div class="container-1">
       <div class="top-images-1">
          <img src="images//FIRST.png">
       </div>
       <nav>
         <ul class="mainMenu">
             <li><a href="logindone.php">HOME</a></li>
   
             <li><a href="#">SOIL
               <i class="fa fa-caret-down"></i>
             </a>
              <ul class="subMenu">
                  <li>
                     <a href="#">SOIL INFO
                        <i class="fa fa-caret-down"></i>
                     </a>
                     <ul class="SuperSubMenu">
                         <li><a href="addsoil.php">ADD SOIL</a></li>
                         <li><a href="updatesoil.php">UPDATE SOIL</a></li>
                     </ul>
                  </li>
                 </li>
                  <li><a href="#">STATE INFO
                     <i class="fa fa-caret-down"></i>
                  </a>
                     <ul class="SuperSubMenu">
                         <li><a href="addstate.php">ADD STATE</a></li>
                         <li><a href="updatestate.php">UPDATE STATE</a></li>
                     </ul></li>
                  <li><a href="#">DISTRICT INFO
                     <i class="fa fa-caret-down"></i>
                  </a>
                      <ul class="SuperSubMenu">
                          <li><a href="adddistrict.php">ADD DISTRICT</a></li>
                          <li><a href="viewdistrict.php">VIEW DISTRICT</a></li>
                      </ul>
                  </li>
              </ul>
               <!-- ......CROPS....... -->
             <li><a href="#">CROPS
               <i class="fa fa-caret-down"></i>
             </a>
              <ul class="subMenu">
                  <li>
                     <!-- <a href="#">ADD CROPS</a> -->
                  </li>
                 </li>
                  <li><a href="addcrops.php">ADD CROPS</a></li>
                  <li><a href="updatecrops.php">UPDATE CROPS</a>
                  </li>
              </ul>
                 <!-- ......FERTILIZERS....... -->
             <li><a href="">FERTILIZERS
               <i class="fa fa-caret-down"></i>
             </a>
              <ul class="subMenu">
                  <!-- <li><a href="#">Photoshop</a></li> -->
                 </li>
                  <li><a href="addfertilizers.php">ADD FERTILIZERS</a></li>
                  <li><a href="updatefertilizers.php">UPDATE FERTILIZERS</a></li>
              </ul>
                <!-- ......MARKET....... -->
             <li><a href="#">MARKET
               <i class="fa fa-caret-down"></i>
             </a>
              <ul class="subMenu">
                  <li>
                     <a href="addcommodity.php">ADD COMMODITY</a></li>
                 </li>
                  <li><a href="viewcommodity.php"> VIEW COMMODITY</a></li>
                  <li><a href="addmarketnames.php">ADD MARKETNAMES</a></li>
                  <li><a href="viewmarket.php">VIEW MARKET</a></li>
                  <li><a href="addmarketreport.php">ADD MARKET REPORT</a></li>
              </ul>
               <!-- ......REPORTS....... -->
             <li><a href="#">REPORTS
               <i class="fa fa-caret-down"></i>
             </a>
              <ul class="subMenu">
                  <li>
                     <a href="areawisecrops.php">AREA WISE CROPS</a>
                  </li>
                 </li>
                  <li><a href="soilbasedfertilizers.php">SOIL BASED  FERTILIZERS</a>
                 </li>
                  <li><a href="commoditywise.php">COMMODITY WISE</a>
                  </li>
                  <li><a href="marketwisedaily.php">MARKET WISE DAILY</a>
                  </li>
                  <li><a href="marketwisemonthly.php">MARKET WISE MONTHLY</a>
                  </li>
                  <li><a href="agoreg.php">AGO REGISTRATION</a>
                  </li>
              </ul>
               <!-- ......MAILS....... -->
             <li><a href="#">MAILS
               <i class="fa fa-caret-down"></i>
             </a>
              <ul class="subMenu">
              </li>
                  <li><a href="indox.php">INBOX</a> </li>
                  <li><a href="sentmails.php">SENT MAILS</a> </li>
              </ul>
     
              <!-- ......SECURITY....... -->
             <li>
                 <a href="#">SECURITY
                  <i class="fa fa-caret-down"></i>
                 </a>
           <ul class="subMenu">
             </li>
                  <li><a href="changepass.php">CHANGE PASSWORD</a></li>
              </ul>
             <li><a href="index.php">LOGOUT</a>
     </nav>

     <div id="areawisecrops">
       <form action="crops_season.php">
         <div id="areawisescrops-state">
           <label for="">State</label>
           <select name="viewstate" id="viewstate-areacrops" onchange="makeSubmenu(this.value)">
             <option value="" disabled selected>SELECT</option>
             <option value="AndhraPradesh">Andhra Pradesh</option>
             <option value="TamilNadu">Tamil Nadu</option>
             <option value="Rajashthan">Rajashthan</option>
             <option value="WestBengal">West Bengal</option>
             <option value="Punjab">Punjab</option>
             <option value="MadhyaPradesh">Madhya Pradesh</option>
             <option value="Manipur">Manipur</option>
             <option value="Delhi">Delhi</option>
             <option value="Jammu Kashmir">Jammu Kashmir</option>
             <option value="Maharashtra">Maharashtra</option>
             <option value="Bihar">Bihar</option>
             <option value="UttarPradesh">Uttar Pradesh</option>
             <option value="Kerala">Kerala</option>
             <option value="Karnataka">Karnataka</option>
             <option value="Odisha">Odisha</option>
             <option value="Haryana">Haryana</option>
             <option value="Uttarakhand">Uttarakhand</option>
             <option value="Assam">Assam</option>
             <option value="Meghalaya">Meghalaya</option>
           </select>
          </div>
         <div id="viewdistrict-crops-area">
           <label for="">District</label>
           <select name="viewdistricts" id="viewdistricts-area-crops">
             <option value="" disabled selected>SELECT</option>
             <!-- <option value="AndhraPradesh">Andhra Pradesh</option>
             <option value="TamilNadu">Tamil Nadu</option> -->
           </select>
         </div>
         <div id="button-areawisecrops">
           <input type="Submit" name="" id="">
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
          <script src="js/areawise.js"> </script>
</body>
</html>