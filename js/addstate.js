function handlesubmit () {
  
  const id = document.getElementById('addid').value;
  const state = document.getElementById('addstate').value;
  const whet = document.getElementById('addwhet').value;

  
  
  localStorage.setItem("ID", id);
  localStorage.setItem("STATE", state);
  localStorage.setItem("WHET", whet);
  
  return ;
};

