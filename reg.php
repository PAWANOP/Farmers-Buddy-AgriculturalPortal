<?php
require_once "config.php";
$insert=false;
if(isset($_POST['FirstName'])){
//   $server ="localhost";
//   $username = "root";
//   $password ="";


//   $con = mysqli_connect($server,$username,$password);

//   if(!$con){
//       die("connection to this database failed due to".
//       mysqli_connect_error());
//   }
  // echo "success to the connect DB"

  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $BirthDate = $_POST['BirthDate'];
  $Country = $_POST['Country'];
  $State = $_POST['State'];
  $City = $_POST['City'];
  $EmailAddress = $_POST['EmailAddress'];
  $LoginName = $_POST['LoginName'];
  $Password = $_POST['Password'];
  $Password = password_hash($Password, PASSWORD_DEFAULT);
  $question = $_POST['question'];
  $OwnQuestion = $_POST['OwnQuestion'];
  $SecretAnswer = $_POST['SecretAnswer'];

  $sql ="INSERT INTO `registerform`.`registerform` (`FirstName`, `LastName`, `BirthDate`, `Country`, `State`, `City`, `EmailAddress`, `LoginName`, `Password`, `question`, `OwnQuestion`, `SecretAnswer`, `DT`) VALUES ('$FirstName', '$LastName', '$BirthDate', '$Country', '$State', '$City', '$EmailAddress', '$LoginName', '$Password', '$question', '$OwnQuestion', ' $SecretAnswer', current_timestamp());";

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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="css/reg.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!------ Include the above in your HEAD tag ---------->
</head>
<body>
  <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <a href="index.php"><input type="submit" name="" value="Login"/><br/></a>
            
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <h3 class="register-heading ">Apply For a Registration</h3>
                    <form action="#" onsubmit="return myfun()" name="register" method="POST">
             

                        <div class="row register-form">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="FirstName" id="first" class="form-control" placeholder="First Name *"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="LastName" id="last" class="form-control" placeholder="Last Name *"/>
                            </div>
                            <div class="form-group">
                                <input placeholder="Birth Date" name="BirthDate" class="form-control" id="birth" type="text" onfocus="(this.type='date')">
                            </div>
                            <div class="form-group">
                              <select name="Country"  class="form-control" id="country" >
                                  <option value="" class="hidden" selected disabled>Please select Country</option>
                                  <option value="India">India</option>
                              </select>
                           </div>
                            <div class="form-group" >
                 <select name="State" class="form-control" id="state" onchange="makeSubmenu(this.value)">
                    <option value="" selected disabled>Please select State</option>
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
                    <option value="Uttarakhand">Haryana</option>
                    <option value="Assam">Assam</option>
                    <option value="Meghalaya">Meghalaya</option>
           </select>
                           </div>
                            <div class="form-group">
                              <select name="City" class="form-control" id="city">
                                  <option class="hidden" value=""  selected disabled>Please select City</option>
                                  <!-- <option value="Hyderabad">Hyderabad</option>
                                  <option value="Mumbai">Mumbai</option>
                                  <option value="Banglore">Banglore</option>
                                  <option value="Chennai">Chennai</option> -->
                              </select>
                           </div>
                           <div class="form-group">
                               <input type="email" id="email" class="form-control" placeholder="Your Email *" name="EmailAddress"/>
                           </div>
                        </form>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="LoginName" name="Login" class="form-control" id="Login" placeholder="Your Login Name *"/>
                            </div>
                            <div class="form-group">
                              <input type="password" name="Password" id="password" class="form-control" placeholder="Password *"/>
                          </div>
                            <div class="form-group" id="question-1">
                                <select class="form-control" id="question" name="question">
                                    <option class="hidden" value="" selected disabled>Select Your Security Question</option>
                                    <option value="WhatIsYourFavouritePastime?">What Is Your Favourite Pastime ?</option>
                                    <option value="WhoIsYourChildhoodHero?">Who Is Your Childhood Hero ?</option>
                                    <option value="WhatWasTheNameofYourFirstSchool?">What Was The Name of Your First School ?</option>
                                    <option value="WhereDidYouMeetYourSpouse?">Where Did You Meet Your Spouse ?</option>
                                    <option value="WhatIsYourFavouriteSportsTeam?">What Is Your Favourite Sports Team ?</option>
                                    <option value="WhatIsYourFather'MiddleName?">What Is Your Father's Middle Name ?</option>
                                    <option value="WhatWasYourHighSchoolMascot?">What Was Your High School Mascot ?</option>
                                    <option value="WhatMakeWasYourFirstCarandBike?">What Make Was Your First Car and Bike ?</option>
                                    <option value="WhatisYourPet'sName?">What is Your Pet's Name ?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline"> 
                                        <input type="checkbox" onClick="check()" name="OwnQuestioncheck" value="OwnQuestion" >
                                        <span>Own Question</span> 
                                    </label>
                                </div>
                            </div>
                            <div class="form-group" id="form-question">
                                <input type="text" name="OwnQuestion" id="OwnQuestion" class="form-control" placeholder="Own Question *"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="SecretAnswer" class="form-control" id="SecretAnswer" 
                                placeholder="Enter Your Answer *"/>
                            </div>
                            <input type="submit" class="btnRegister"  value="Submit"/>
                            <input type="reset"  class="btnReset"  value="Reset"/>
                        </div>
                        <?php
                if($insert == true){
                echo " <p class='register-heading message'>Thanks For Submitting For Us</p>";
                 }
              ?> 
                    </div>
                  </form>  
            </div>
        </div>
    </div>

</div>
</body>
<script src="js/reg.js"></script>
</html> 