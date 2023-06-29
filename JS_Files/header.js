let t=document.getElementById("track"),
orderModal=document.querySelector(".order-modal"),
closeicon=document.getElementById("close"),
signup=document.getElementById("signup"),
formclose=document.getElementById("form-close"),
form1=document.querySelector(".form1"),
form2=document.querySelector(".form2"),
loginform=document.getElementById("login-form"),
modalform=document.querySelector(".form-modal"),
dropdown=document.querySelector(".dropdown"),
menuicon=document.getElementById("menu"),
close=document.getElementById("closeicon");
t.addEventListener("click",()=>{
  orderModal.classList.add("active");
});
closeicon.addEventListener("click",()=>{
    orderModal.classList.remove("active")
});

loginform.addEventListener("click",()=>{
   modalform.style.display="block";
});
formclose.addEventListener("click",()=>{
  modalform.style.display="none";
});
signup.addEventListener("click",(e)=>{
  // alert();
  form1.style.display="none";
  form2.style.display="block";
e.preventDefault();
});


dropdown.addEventListener("click",(e)=>{
  document.querySelector(".menu-items").classList.toggle("active");
});

menuicon.addEventListener("click",(e)=>{
  document.querySelector(".navbar-list").classList.add("active");
});
close.addEventListener("click",(e)=>{
  document.querySelector(".navbar-list").classList.remove("active");
});





