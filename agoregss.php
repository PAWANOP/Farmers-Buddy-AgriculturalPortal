

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
                <h3 class="register-heading ">Apply For a Agricultural Officer Registration</h3>
                    <form action="" name="register">
                        <div class="row register-form">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input      type="text" name="FirstName" id="first"  value="" class="form-control" placeholder="First Name*"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="LastName" id="last" class="form-control" placeholder="Last Name*"/>
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
                                  <option class="hidden" value=""  selected disabled>Please select State</option>
                                  <option value="Delhi">Delhi</option>
                                  <option value="Kerala">Kerala</option>
                                  <option value="AndhraPradesh">AndhraPradesh</option>
                                  <option value="TamilNmadu">TamilNmadu</option>
                                  <option value="Rajashthan">Rajashthan</option>
                                  <option value="WestBengal">WestBengal</option>
                                  <option value="Karnataka">Karnataka</option>
                                  <option value="Punjab">Punjab</option>
                                  <option value="MadhyaPradesh">MadhyaPradesh</option>
                                  <option value="JammuKashmir">JammuKashmir</option>
                                  <option value="Maharashtra">Maharashtra</option>
                                  <option value="UttarPradesh">UttarPradesh</option>
                                  <option value="Odisha">Odisha</option>
                                  <option value="Uttarakhand">Uttarakhand</option>
                                  <option value="Assam">Assam</option>
                                  <option value="Meghalaya">Meghalaya</option>
                              </select>
                           </div>
                           <div class="form-group" >
                              <select name="State" class="form-control" id="city">
                                  <option class="hidden"   selected disabled>Please select State</option>
                                  <!-- <option value="Andhra Pradesh">Andhra Pradesh</option>
                                  <option value="Maharashtra">Maharashtra</option>
                                  <option value="Karnataka">Karnataka</option>
                                  <option value="Tamil Nadu">Tamil Nadu</option> -->
                              </select>
                           </div>
                        </form>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="Qulaification*" id="qual" class="form-control" placeholder="Qulaification*"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="desin" id="desin" class="form-control" placeholder="Designation*"/>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="Your Email *" name="EmailAddress"/>
                            </div>
                            <input type="submit" class="btnRegister"  value="Submit" onclick="handleSubmit()"/>
                            <input type="reset"  class="btnReset"  value="Reset"/>
                        </div>
                    </div>
                  </form>  
            </div>
        </div>
    </div>

</div>
</body>
<script src="js/agoreg.js"></script>
<script src="js/reg.js"></script>
</html> 