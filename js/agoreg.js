function handleSubmit () {
  const first = document.getElementById('first').value;
  const last = document.getElementById('last').value;
  const birth = document.getElementById('birth').value;
  const coun = document.getElementById('country').value;
  const state = document.getElementById('state').value;
  const city = document.getElementById('city').value;
  const qual = document.getElementById('qual').value;
  const desin = document.getElementById('desin').value;
  const email = document.getElementById('email').value;

  
  
  localStorage.setItem("FIRST", first);
  localStorage.setItem("LAST", last);
  localStorage.setItem("BIRTH", birth);
  localStorage.setItem("COUN", coun);
  localStorage.setItem("STATE", state);
  localStorage.setItem("CITY", city);
  localStorage.setItem("QUL", qual);
  localStorage.setItem("DES", desin);
  localStorage.setItem("EMAIL", email);
  
  return ;
};


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

 
     