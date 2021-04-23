const myfun1=()=>{
   let user = document.getElementById('username').value;
   let pass = document.getElementById('password').value;

   if (user=="") {
       alert('input field ?');
       return false;
   }
  else  if (pass=="") {
       alert('input field ?');
       return false;
   }
}