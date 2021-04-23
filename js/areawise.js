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
  Karnataka:['Koppal','Mandya','Mysore','Raichur','Shimoga','Tumkur','Udupi',],
  Odisha:["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Deogar"],
  Haryana:['Ambala','Faridabad','Fatehabad','Bhiwani','Gurgaon','Hissar','Jhajjar'],
  Uttarakhand:['Almora','Bageshwar','Chamoli','Champawat','Dehradun','Haridwar','Nainital',],
  Assam:['Baksa','Barpeta','Bongaigaon','Cachar','Chirang','Darrang','Dhemaji','Dima Hasao','Dhubri'],
  Meghalaya:['East Garo Hills','East Khasi Hills','Jaintia Hills','Ri Bhoi','South Garo Hills','West Garo Hills','West Khasi Hills']
    }
  
  
  
  
  
    function makeSubmenu(value) {
      if(value.length==0) document.getElementById("viewdistricts-area-crops").innerHTML = "<option></option>";
      else {
      var citiesOptions = "";
      for(cityId in citiesByState[value]) {
      citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
      }
      document.getElementById("viewdistricts-area-crops").innerHTML = citiesOptions;
      }
      }
      function displaySelected() { var country = document.getElementById("viewstate-areacrops").value;
      var city = document.getElementById("viewdistricts-area-crops").value;
      alert(country+"\n"+city);
      }
      function resetSelection() {
      document.getElementById("viewstate-areacrops").selectedIndex = 0;
      document.getElementById("viewdistricts-area-crops").selectedIndex = 0;
      }