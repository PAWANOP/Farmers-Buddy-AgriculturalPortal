window.addEventListener('load', () => {
  
  const id = localStorage.getItem('ID');
  const state = localStorage.getItem('STATE');
  const whet = localStorage.getItem('WHET');
  
  document.querySelector('#id').innerHTML = id;
  document.querySelector('#stat').innerHTML = state;
  document.querySelector('#whet').innerHTML = whet;
});