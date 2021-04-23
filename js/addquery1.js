// const myfubb=()=>{

//   let name =document.getElementById('Your-Name').value;
//   let query=document.getElementById('Post-Your-Query').value;

//   if (name=="") {
//       alert('Enter Your Name!');
//       return false;
//   }
//    if(!isNaN(name)){
//     alert('Enter only Letter!');
//     return false;
//   }

//   if (query=="") {
//     alert('Enter Query!');
//     return false;
//  }
//   if(!isNaN(query)){
//   alert('Enter only Letter');
//   return false;
//  }


function handleSubmit () {
  const surname = document.getElementById('Post-Your-Query').value;
  
  localStorage.setItem("SURNAME", surname);

  return ;
};