window.addEventListener('load', () => {
  
  const first = localStorage.getItem('FIRST');
  const last = localStorage.getItem('LAST');
  const birth = localStorage.getItem('BIRTH');
  const coun = localStorage.getItem('COUN');
  const state = localStorage.getItem('STATE');
  const city = localStorage.getItem('CITY');
  const qaul = localStorage.getItem('QUL');
  const desi = localStorage.getItem('DES');
  const email = localStorage.getItem('EMAIL');
  
  document.querySelector('#firstname').innerHTML = first;
  document.querySelector('#lastnmae').innerHTML = last;
  document.querySelector('#dob').innerHTML = birth;
  document.querySelector('#count').innerHTML = coun;
  document.querySelector('#st').innerHTML = state;
  document.querySelector('#ct').innerHTML = city;
  document.querySelector('#gd').innerHTML = qaul;
  document.querySelector('#ds').innerHTML = desi;
  document.querySelector('#em').innerHTML = email;


});