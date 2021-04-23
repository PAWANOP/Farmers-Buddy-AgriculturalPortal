window.addEventListener('load', () => {
  
  const das = localStorage.getItem('DAS');
  const sa = localStorage.getItem('SA');
  
  document.querySelector('#dis').innerHTML = das;
  document.querySelector('#type').innerHTML = sa;
  
});