/*MENU*/
/*menu animation: play pause with hover*/

let logo = document.querySelector("#logo");
let menu = document.querySelectorAll("[class*=menu_]");
console.log(menu);
logo.addEventListener("click", function(evt) {
    for(let i=0; i<menu.length; i++) menu[i].classList.toggle("show");
    evt.stopPropagation();
});
document.addEventListener("click", function() {
    for(let i=0; i<menu.length; i++) menu[i].classList.remove("show");
});

logo.addEventListener("mouseenter",function (){
    logo.src = "images/logos/animated.gif";
});
logo.addEventListener("mouseleave",function (){
    if(document.location.pathname=="/Site/joana.html") logo.src = "images/logos/logo100x100g.png";
    else if(document.location.pathname=="/Site/miguel.html") logo.src = "images/logos/logo100x100b.png";
    else if(document.location.pathname=="/Site/rui.html") logo.src = "images/logos/logo100x100r.png";
    else if(document.location.pathname=="/Site/susana.html") logo.src = "images/logos/logo100x100o.png";
    else logo.src="images/logos/logo100x100.png";
});


/*POPUP*/
/*let popup = document.querySelector(".popup img");
let popitem = document.querySelector(".popup_text");

popup.addEventListener("click", function(evt) {
    popitem.classList.toggle("show");
    evt.stopPropagation();
});
document.addEventListener("click", function() {
    for(let j=0; j<popitem.length; j++) popitem[j].classList.remove("show");
});*/
