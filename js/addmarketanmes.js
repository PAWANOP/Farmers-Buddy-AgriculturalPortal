function handleSubmit () {
  const admark = document.getElementById('addmarket').value;
  const dname = document.getElementById('Districtnames').value;
  const marea = document.getElementById('Marketarea').value;

  
  
  localStorage.setItem("ADMARK", admark);
  localStorage.setItem("DNAME", dname);
  localStorage.setItem("MAREA", marea);
  return ;
};

