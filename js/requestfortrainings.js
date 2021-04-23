function handleSubmit () {
  // const surname = document.getElementById('Post-Your-Query').value;
  const name = document.getElementById('request-placename').value;
  const role = document.getElementById('request-placerole').value;
  const place = document.getElementById('request-placeplace').value;
  const Title = document.getElementById('request-placetitle').value;
  const Description = document.getElementById('request-placedesc').value;
  const Schedule = document.getElementById('request-placesched').value;

  
  
  localStorage.setItem("NAME", name);
  localStorage.setItem("ROLE", role);
  localStorage.setItem("PLACE", place);
  localStorage.setItem("TITLE", Title);
  localStorage.setItem("DESC", Description);
  localStorage.setItem("SCHED", Schedule);
  
  return ;
};


 
      