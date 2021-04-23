function handleSubmit () {
 
  const soilname = document.getElementById('SoilName-addfert').value;
  const typefert = document.getElementById('Type-addfert').value;
  const fertname = document.getElementById('Crops-Name-fert').value;
  const nitro = document.getElementById('Nitrogen-N').value;
  const phos = document.getElementById('PhosporousP205').value;
  const cofe = document.getElementById('Coffee-Creamerk20').value;

  
  localStorage.setItem("SOILNAME", soilname);
  localStorage.setItem("TYPEFERT", typefert);
  localStorage.setItem("FERTNAME", fertname);
  localStorage.setItem("NITRO", nitro);
  localStorage.setItem("PHOS", phos);
  localStorage.setItem("COFE", cofe);
  return ;
};
