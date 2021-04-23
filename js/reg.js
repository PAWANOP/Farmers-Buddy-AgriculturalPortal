let citiesByState  = {
  Delhi:["new Delhi", "North Delhi",	"Central Delhi","South Delhi","	West Delhi","	East Delhi","	Shahdara"],
  Kerala:["Thiruvananthapuram", "Palakkad","Alappuzha","Ernakulam","Kannur","Kozhikode","	Malappuram"],
  AndhraPradesh:["Visakhapatnam","Anantapur", "Chittoor","East Godavari","Kadapa","Vizianagaram",],
  TamilNmadu:["Chennai", "Kancheepuram","Vellore","Thiruvallur","Salem","Coimbatore","Madurai"],
  Rajashthan:["Jaipur", "Jodhpur","Alwar","Nagaur","Udaipur","Sikar","Barmer"],
  WestBengal:['Birbhum','Bardhaman','Hooghly','Howrah','Jalpaiguri','Cooch Behar', 'Kolkata'],
  Punjab:['Amritsar','Barnala','Bathinda','Firozpur','Faridkot','Fatehgarh Sahib','Fazilka'],
  MadhyaPradesh:['Alirajpur','Anuppur','Ashok Nagar','Balaghat','Barwani','Betul','Bhind','Bhopal'],
  JammuKashmir:['Anantnag','Badgam','Bandipora','Baramulla','Doda','Ganderbal','Jammu'],
  Maharashtra:['Ahmednagar','Akola','Amravati','Aurangabad','Bhandara','Buldhana','Chandrapur',"jalogaon"],
  Bihar:['Araria','Aurangabad','Banka','Begusarai','Arwal','Bhagalpur','Bhojpur',],
  UttarPradesh:['Agra','Allahabad','Aligarh','Ambedkar Nagar','Azamgarh','Barabanki','Budaun',],
  Karnataka:['banglore','Koppal','Mandya','Mysore','Raichur','Shimoga','Tumkur','Udupi',],
  Odisha:["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Deogar"],
  Haryana:['Ambala','Faridabad','Fatehabad','Bhiwani','Gurgaon','Hissar','Jhajjar'],
  Uttarakhand:['Almora','Bageshwar','Chamoli','Champawat','Dehradun','Haridwar','Nainital',],
  Assam:['Baksa','Barpeta','Bongaigaon','Cachar','Chirang','Darrang','Dhemaji','Dima Hasao','Dhubri'],
  Meghalaya:['East Garo Hills','East Khasi Hills','Jaintia Hills','Ri Bhoi','South Garo Hills','West Garo Hills','West Khasi Hills']
    }
  
  
  
  
  
    function makeSubmenu(value) {
      if(value.length==0) document.getElementById("city").innerHTML = "<option></option>";
      else {
      var citiesOptions = "";
      for(cityId in citiesByState[value]) {
      citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
      }
      document.getElementById("city").innerHTML = citiesOptions;
      }
      }
      function displaySelected() { var country = document.getElementById("state").value;
      var city = document.getElementById("city").value;
      alert(country+"\n"+city);
      }
      function resetSelection() {
      document.getElementById("state").selectedIndex = 0;
      document.getElementById("city").selectedIndex = 0;
      
      }
function check()
{
   if(!document.register.OwnQuestioncheck.checked)
   {
         document.register.OwnQuestion.disabled=true;
         document.register.question.disabled=false;
         
   }
   else
   {
         document.register.OwnQuestion.disabled=false;
         document.register.question.disabled=true;
   }
}

const myfun=()=>{

    
  let first = document.getElementById("first").value;
  let last = document.getElementById("last").value;
  let birth = document.getElementById("birth").value;
  let country =document.getElementById("country").value;
  let state=document.getElementById("state").value;
  let city=document.getElementById("city").value;
  let email=document.getElementById("email").value;
  let Login=document.getElementById("Login").value;
  let password=document.getElementById("password").value;
  // let question=document.getElementById("question").value;
  let OwnQuestion=document.getElementById("OwnQuestion").value;
  let SecretAnswer=document.getElementById("SecretAnswer").value;

  if (first=="") {
     alert("Enter First Name");
     return false;
  }

  if (!isNaN(first)) {
   alert("Enter Alphabets Only");
    return false;
  }

  if ((first.length <2 )|| (first.length >10 )) {
   alert("Enter First Name  Greater Then 2 and Less Then 10");
    return false;
  }


 //------------------------------------------------------------------------

  if (last=="") {
     alert("Enter Last Name");
     return false;
  }

  if (!isNaN(last)) {
   alert("Enter Alphabets Only");
    return false;
  }

  if((last.length <2) || (last.length>10)){
   alert("Enter Last Name Greater Then 2 and Less Then 10");
    return false;
  }
 //  --------------------------------------------------------------------------

 if (birth=="") {
   alert("Fill The Birth Date");
   return false;
 }

 // ------------------------------------------------------------------------------

 if (country=="") {
   alert("Select Country Name");
    return false;
 }

 // // -------------------------------------------------------------------------------

  if (state=="") {
   alert("Select State Name");
    return false;
  }
 //  -------------------------------------------------------------------------

   if (city=="") {
     alert("Select City Name");
      return false;
   }
   // // --------------------------------------------------------------------------------

   if (email=="") {
     alert("Fill Email Address");
     return false;
   }

  //  if (email.IndexOf('@')<=0) {
  //     alert("Enter Valid Email");
  //     return false;
  //  }

  //  if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3))!='3s'){
  //      alert("Enter Valid email");
  //      return false;
  //   }

   // -----------------------------------------------------------------------  ---

   if (Login=="") {
     alert("Fill Login Name");
     return false;
   }


   if (!isNaN(Login)) {
     alert("Fill Alphabets Only In Login Name");
     return false;
   }

   if ((Login.length <2 )|| (Login.length >10 )) {
     alert('Enter Login Name  Greater Then 2 and Less Then 10');
    return false;
  }
   // ------------------------------------------------------------------------

   if (password=="") {
     alert("Fill Password");
      return false;
   } 

   if ((password.length <3) || (password.length >10)){
    alert("password will greater then 3 and less then 15");
      return false;
    }

   // ------------------------------------------------------------------------------

  //  if (question=="") {
  //     alert("Select Secret Question");
  //     return false;
  //  }
   
   if (OwnQuestion=="") {
      alert("Enter Own Question");
     return false;
   }

   if (SecretAnswer=="") {
     alert("Enter Secret Answer");
     return false;
   }
  //  ------------------------------------------------------------------------------
  }

  