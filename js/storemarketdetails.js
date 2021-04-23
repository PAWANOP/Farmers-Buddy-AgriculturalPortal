function handleSubmit () {
  const md = document.getElementById('Market-details').value;
  const arr = document.getElementById('Arrivals').value;
  const com = document.getElementById('comm-details').value;
  const uad = document.getElementById('Unitof-Arriavals-detail').value;
  const add = document.getElementById('Arriaval-Dates-detail').value;
  const vd = document.getElementById('varietys-detail').value;
  const gd = document.getElementById('Grades-detail').value;
  const mnp = document.getElementById('Minimum-Prices').value;
  const mxp = document.getElementById('Maximum-Prices').value;
  const mp = document.getElementById('Model-Prices').value;
  const uop = document.getElementById('Unit-of-Prices').value;

  
  
  localStorage.setItem("MD", md);
  localStorage.setItem("COM", com);
  localStorage.setItem("ARR", arr);
  localStorage.setItem("UAD", uad);
  localStorage.setItem("ADD", add);
  localStorage.setItem("VD", vd);
  localStorage.setItem("GD", gd);
  localStorage.setItem("MNP", mnp);
  localStorage.setItem("MXP", mxp);
  localStorage.setItem("MP", mp);
  localStorage.setItem("UOP", uop);
  return ;
};

