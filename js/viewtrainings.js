window.addEventListener('load', () => {
  
  const name = localStorage.getItem('NAME');
  const role = localStorage.getItem('ROLE');
  const place = localStorage.getItem('PLACE');
  const Title = localStorage.getItem('TITLE');
  const Description = localStorage.getItem('DESC');
  const Schedule = localStorage.getItem('SCHED');
  
  document.querySelector('#result-name').innerHTML = name;
  document.querySelector('#result-role').innerHTML = role;
  document.querySelector('#result-place').innerHTML = place;
  document.querySelector('#result-title').innerHTML = Title;
  document.querySelector('#result-desc').innerHTML = Description;
  document.querySelector('#result-sched').innerHTML = Schedule;
});