window.addEventListener('load', () => {
  
  const admark = localStorage.getItem('ADMARK');
  const dname = localStorage.getItem('DNAME');
  const marea = localStorage.getItem('MAREA');
  
  document.querySelector('#box').innerHTML = admark;
  document.querySelector('#state').innerHTML = admark;
  document.querySelector('#district').innerHTML = dname;
  document.querySelector('#market').innerHTML = marea;
});