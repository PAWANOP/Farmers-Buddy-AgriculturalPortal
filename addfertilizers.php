<?php
require_once "config.php";
$insert=false;
if(isset($_POST['SoialNames'])){

  $SoialNames = $_POST['SoialNames'];
  $commdityType = $_POST['commdityType'];
  $CropsName = $_POST['CropsName'];
  $Nitrogen = $_POST['Nitrogen'];
  $Phosporous = $_POST['Phosporous'];
  $CoffeeCreamer = $_POST['CoffeeCreamer'];
  $UseFertilizersForHeactor = $_POST['UseFertilizersForHeactor'];
  $CostofFertilizers = $_POST['CostofFertilizers'];
  $UsedFertilizersForYear = $_POST['UsedFertilizersForYear'];
  $UsedFertilizersForCrops = $_POST['UsedFertilizersForCrops'];
 

  $sql ="INSERT INTO `fert_info`.`fert_info` (`SoialNames`,`commdityType`,`CropsName`,`Nitrogen`,`Phosporous`,`CoffeeCreamer`,`UseFertilizersForHeactor`,`CostofFertilizers`,`UsedFertilizersForYear`,`UsedFertilizersForCrops`,'date&time`) VALUES ('$soiltypename','$commdityType','$CropsName','$Nitrogen','$Phosporous','$CoffeeCreamer','$UseFertilizersForHeactor',' $CostofFertilizers','$UsedFertilizersForYear','$UsedFertilizersForCrops',current_timestamp());";

  // echo $sql;

  if($con->query($sql) == true){
    // echo "SuccessFully Inserted";
  $insert = true;
  }

  else{
    echo "ERROR : $sql <br> $con->error";
  }

  $con->close();

}

?>
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
  <link rel="stylesheet" href="css/addfertilizers.css">
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
             <li><a href="#">FERTILIZERS
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
      <div id="add-fert" style="margin-left: 75px; margin-top: 30px;">
        <h1 style="font-size: 23px; text-transform: capitalize;">add fertilizers information</h1>
      </div>
     <div id="addfertlizers">
       <form action="">
         <div id="addfertilizers-soilname" style="margin-bottom: 10px;">
           <label for="">Soil Name</label>
           <select name="SoilName" id="SoilName-addfert">
            <option value="" disabled selected>SELECT</option>
             <option value="CoastalsSoil">Coastals Soil</option>
             <option value="LateritesSoil">Laterites Soil</option>
             <option value="RedSoil">Red Soil</option>
             <option value="AlluvialSoil">Alluvial Soil</option>
             <option value="DesertSoilDesertSoil">Desert Soil</option>
             <option value="ColluvialsSoil">Colluvials Soil</option>
             <option value="PeatSoil">Peat Soil</option>
             <option value="BlackSoil">Black Soil</option>
             <option value="MountainSoil">Mountain Soil</option>
             <option value="MarshySoil">Marshy Soil</option>
           </select>
         </div>
         <div id="addfertilizers-type" style="margin-bottom: 10px;">
           <label for="">Type</label>
           <select name="commdityType" id="Type-addfert">
            <option value="" disabled selected>SELECT</option>
            <option value="Crop">Crop</option>
            <option value="herb">herb</option>
            <option value="Vegetable">Vegetable</option>
           </select>
         </div>
         <div id="addfertilizers-cropname" style="margin-bottom: 10px;">
           <label for="">Crops Name</label>
           <select name="CropsName" id="Crops-Name-fert">
            <option value="" disabled selected>SELECT</option>
            <option value="Apple">Apple</option>
            <option value="Cabbage">Cabbage</option>
            <option value="Tomato">Tomato</option>
            <option value="Potato">Potato</option>
            <option value="Bottleguard">Bottleguard</option>
            <option value="Bitterguard">Bitterguard</option>
            <option value="Cauliflower">Cauliflower</option>
            <option value="Beetroot">Beetroot</option>
            <option value="Carrot">Carrot</option>
            <option value="Orange">Orange</option>
            <option value="Grapes">Grapes</option>
            <option value="Millets">Millets</option>
            <option value="Banana">Banana</option>
            <option value="Papaya">Papaya</option>
            <option value="Guava">Guava</option>
            <option value="Chillies">Chillies</option>
            <option value="Onions">Onions</option>
            <option value="Peanuts">Peanuts</option>
            <option value="LadiesFinger">LadiesFinger</option>
            <option value="Ginger">Ginger</option>
           </select>
         </div>
         <div id="addfertilizers-nitrogen" style="margin-bottom: 10px;">
          <label for="">Nitrogen(N)</label>
          <input type="text" name="Nitrogen" id="Nitrogen-N">
          </input>
        </div>
         <div id="addfertilizers-phos" style="margin-bottom: 10px;">
          <label for="">Phosporous(P205)</label>
          <input type="text" name="Phosporous" id="PhosporousP205">
          </input>
        </div>
         <div id="addfertilizers-coffie" style="margin-bottom: 10px;">
          <label for="">Coffee Creamer(k20)</label>
          <input type="text" name="CoffeeCreamer" id="Coffee-Creamerk20">
          </input>
        </div>
         <div id="addfertilizers-heactor" style="margin-bottom: 10px;">
          <label for="">Use  Fertilizers For Heactor</label>
          <input type="text" name="UseFertilizersForHeactor" id="Use-Fertilizers-For-Heactor">
          </input>
        </div>
         <div id="addfertilizers-fert" style="margin-bottom: 10px;">
          <label for="">Cost of Fertilizers  </label>
          <input type="text" name="CostofFertilizers" id="Cost-of-Fertilizers">
          </input>
        </div>
         <div id="addfertilizers-year" style="margin-bottom: 10px;">
          <label for="">Used Fertilizers For Year</label>
          <input type="text" name="UsedFertilizersForYear" id="Used-Fertilizers-For-Year">
          </input>
        </div>
         <div id="addfertilizers-state" style="margin-bottom: 10px;">
          <label for="">Used Fertilizers For State</label>
          <input type="text" name="UsedFertilizersForState" id="Used-Fertilizers-For-State">
          </input>
        </div>
         <div id="addfertilizers-used" style="margin-bottom: 10px;">
          <label for="">Used Fertilizers For Crops</label>
          <input type="text" name="UsedFertilizersForCrops" id="Used-Fertilizers-For-Crops">
          </input>
        </div>
         <div id="addfertilizers-button">
           <input type="Submit" name="" id="addfertilizers-button-submit" onclick="handleSubmit()" >
           <input type="Reset" name="" id="addfertilizers-button-Reset">
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
         <script src="js/addfert.js"></script>
</body>
</html>