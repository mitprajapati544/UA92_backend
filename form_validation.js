function validation() {
   var firstname = document.getElementById("fname");
   var lastname = document.getElementById("lname");
   var email = document.getElementById("email");
   var cnumber = document.getElementById("cnumber");

   if(firstname.value == "" || lastname.value == "" || email.value == "" || cnumber.vlaue =="")
   {
    
    alert("No blanks are allowed");
    return false;

   }

   else{
     return true;  
   }
}