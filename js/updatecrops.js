window.addEventListener('load', () => {
  const soilname = localStorage.getItem('SOILNAME');
  const typename = localStorage.getItem('TYPENAME');
  const Cropname = localStorage.getItem('CROPNAME');
  const season = localStorage.getItem('SEASONS');
  
  document.querySelector('#SoiLName').innerHTML = soilname;
  document.querySelector('#type').innerHTML = typename;
  document.querySelector('#cropname').innerHTML = Cropname;
  document.querySelector('#season').innerHTML = season;
});