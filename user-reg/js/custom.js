
 function validation(){
   
  var fname = document.getElementById('fname');
  var lname = document.getElementById('lname');
  var username = document.getElementById('username');
  var pass = document.getElementById('pass');
  var cpass= document.getElementById('cpass');
  var city_name = document.getElementById('city_name');
  var email = document.getElementById('email');
  var valid = true;
  var mail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  removeMessage();
  if(fname.value.length==0){
    fname.className="input";
    fname.nextElementSibling.innerHTML="Fast name Cant be blank";
    valid=false;
  }
  if(lname.value.length==0){
    lname.className="input";
    lname.nextElementSibling.innerHTML="Lastname Cant be blank";
    valid=false;
  }
  if(username.value.length==0){
    username.className="input";
    username.nextElementSibling.innerHTML="username Cant be blank";
    valid=false;
  }else if(username.value.length>10) {
    username.className="input";
    username.nextElementSibling.innerHTML="username less than 10 char.";
    valid=false;
  }
  if(pass.value.length==0){
    pass.className="input";
    pass.nextElementSibling.innerHTML="Password Cant be blank";
    valid=false;
  }
  if(pass.value!=cpass.value){
    cpass.className="input";
    cpass.nextElementSibling.innerHTML="Password dont match";
    valid=false;
  }
  if(city_name.value.length==0){
    city_name.className="input";
    city_name.nextElementSibling.innerHTML="City Name Cant be blank";
    valid=false;
  }
  if(email.value.length==0){
    email.className="input";
    email.nextElementSibling.innerHTML="email Cant be blank";
    valid=false;
  }else if (!mail.test(email.value)){
   email.className="input";
    email.nextElementSibling.innerHTML=" email not valid";
    valid=false;
  }
  else {
    email.style.border= "2px solid red";
  }
  return valid;
 }
 function removeMessage(){
   var errorinput=document.querySelectorAll(".input");
   [].forEach.call(errorinput, function(el){
    el.classList.remove(".input");
   });
   var errorinput=document.querySelectorAll(".wrong");
   [].forEach.call(errorinput, function(el){
    el.innerHTML="";
   })
 };
 




  // function checkRequired(inputArr){
  //   inputArr.forEach(function(input){
  //     if(input.value.trim()=== ''){
  //     showError(input,`${getFiledName(input)} is Required`);
  //     }else {
  //       showSuccess(input);
  //     }
  //   });
  // }
  // function checkLength(input,min,max){
  //   if(input.value.length <min){
  //     showError(input,`${getFiledName(input)} must be ${min} character`);
  //   }else if(input.value.length >max) {
  //     showError(input,`${getFiledName(input)} must be ${max} character`);
  //   }else {
  //     showSuccess(input);
  //   };
  // }
  // function getFiledName(input){
  //   return input.id.charAt(0).toUpperCase()+input.id.slice(1);
  // }
  // function checkpass(input1,input2){
  //   if(input1.value!==input2.value){
  //     showError(input2,"password dont match")
  //   }
  // }
  // function emailValid(input){
  //   const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  //   if(re.test(input.value.trim())){
  //     showSuccess(input);
  //   }else {
  //     showError(input,"Email is not valid");
  //   }
  // }
  // function showError(input, message) {
  //   const formControl = input.parentElement;
  //   const small = formControl.querySelector('small');
  //   formControl.className = 'form-control error';
  //   small.innerText = message;
  // }
  
  // function showSuccess(input) {
  //   const formControl = input.parentElement;
  //   formControl.className = 'form-control success';
  // }
  
  // input.addEventListener('(click)', function(e) {
           
  //         form.submit();
  //    e.preventDefault();
  //     checkRequired([fname,lname,username,pass,cpass,city_name,email]);
      
  //     checkLength (fname,3,15);
  //     checkpass(pass,cpass);
  //     emailValid(email);

      
        
  // },false);


 // login part start 
function logincheck()
{
  if(document.loginform.username.value=="")
  {
    loginform.username.style.border= "2px solid red";
    document.loginform.username.focus();
    return false;
  }
 if(document.loginform.pass.value=="")
    {
      loginform.pass.style.border= "2px solid red";
      document.loginform.pass.focus();
      return false;
    }

}