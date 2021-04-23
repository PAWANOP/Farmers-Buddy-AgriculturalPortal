function handleSubmit () {
  const soilname = document.getElementById('SoialNames').value;
  const typename = document.getElementById('typename').value;
  const Cropname = document.getElementById('Cropname').value;
  const season = document.getElementById('Seasons').value;
  
  
  localStorage.setItem("SOILNAME", soilname);
  localStorage.setItem("TYPENAME", typename);
  localStorage.setItem("CROPNAME", Cropname);
  localStorage.setItem("SEASONS", season);
  
  return;
};
