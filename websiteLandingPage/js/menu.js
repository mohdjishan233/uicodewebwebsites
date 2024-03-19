const icon=document.querySelector(".icone");
const ul=document.querySelector("ul");

icon.addEventListener("click", ()=>{
    console.log(ul);
    ul.classList.toggle("showdata");
    if(ul.className=="showdata")
    {
        document.getElementById("bar").className="fa fa-close";
    }
    else{
        document.getElementById("bar").className="fa fa-bars";
    }
})

const buttonsign=document.querySelector(".signbtn");
const formlogin=document.querySelector(".formlogin");
buttonsign.addEventListener("click",()=>{
    console.log(formlogin);
    formlogin.className.toggle("fo");
})


var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 5000); 
}