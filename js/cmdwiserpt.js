window.addEventListener('load', () => {
  
  const md = localStorage.getItem('MD');
  const arr = localStorage.getItem('ARR');
  const uad = localStorage.getItem('UAD');
  const add = localStorage.getItem('ADD');
  const vd = localStorage.getItem('VD');
  const gd = localStorage.getItem('GD');
  const mnp = localStorage.getItem('MNP');
  const mxp = localStorage.getItem('MXP');
  const mp = localStorage.getItem('MP');
  const uop = localStorage.getItem('UOP');
  const uop = localStorage.getItem('UOP');
  
  document.querySelector('#Market').innerHTML = md;
  document.querySelector('#grade').innerHTML = gd;
  document.querySelector('#Commidity').innerHTML = arr;
  document.querySelector('#Arrivals').innerHTML = uad;
  document.querySelector('#Arrivaldate').innerHTML = add;
  document.querySelector('#UnitofArrival').innerHTML = vd;
  document.querySelector('#Variety').innerHTML = gd;
  document.querySelector('#Minimum').innerHTML = mnp;
  document.querySelector('#Maximum').innerHTML = mxp;
  document.querySelector('#Model').innerHTML = mp;
  document.querySelector('#UnitofPrice').innerHTML = uop;
});