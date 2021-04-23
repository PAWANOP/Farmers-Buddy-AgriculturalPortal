window.addEventListener('load', () => {
  
  const name = localStorage.getItem('COMMNAME');
  
  document.querySelector('#box').innerHTML = name;
  // document.querySelector('#no').innerHTML = name;
  document.querySelector('#comm').innerHTML = name;
});