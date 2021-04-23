window.addEventListener('load', () => {
  

  const surname = localStorage.getItem('SURNAME');
  
  document.getElementById('result-surname').innerHTML = surname;
});