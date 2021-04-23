function handleSubmit () {

  const commname = document.getElementById('CommodityName').value;

  
  
  localStorage.setItem("COMMNAME", commname);
  
  return ;
};
