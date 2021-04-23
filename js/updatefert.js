window.addEventListener('load', () => {
  
  const soilname = localStorage.getItem('SOILNAME');
  const typefert = localStorage.getItem('TYPEFERT');
  const fertname = localStorage.getItem('FERTNAME');
  const nitro = localStorage.getItem('NITRO');
  const phos = localStorage.getItem('PHOS');
  const cofe = localStorage.getItem('COFE');
  
  document.querySelector('#SoiLName').innerHTML = soilname;
  document.querySelector('#type').innerHTML= typefert;
  document.querySelector('#cropname').innerHTML= fertname;
  document.querySelector('#nitro').innerHTML = nitro;
  document.querySelector('#phos').innerHTML = phos;
  document.querySelector('#coffeee').innerHTML = cofe;
});