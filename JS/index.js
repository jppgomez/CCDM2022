/*INDEX IMGS*/
let joana = document.querySelector(".index_img_j");
let miguel = document.querySelector(".index_img_m");
let rui = document.querySelector(".index_img_r");
let susana = document.querySelector(".index_img_s");

joana.addEventListener("mouseenter",function (){
    joana.src = "images/speakers/joanamonteirosqf.png";
});
joana.addEventListener("mouseleave",function (){
    joana.src = "images/speakers/joanamonteirosq.png";
});

miguel.addEventListener("mouseenter", function(){
    miguel.src = "images/speakers/miguelsoaressqf.png";
});
miguel.addEventListener("mouseleave", function(){
    miguel.src = "images/speakers/miguelsoaressq.png";
});

rui.addEventListener("mouseenter", function(){
    rui.src = "images/speakers/ruiabreusqf.png";
});
rui.addEventListener("mouseleave", function(){
    rui.src = "images/speakers/ruiabreusq.png";
});

susana.addEventListener("mouseenter", function(){
    susana.src = "images/speakers/susanacarvalhosqf.png";
});
susana.addEventListener("mouseleave", function(){
    susana.src = "images/speakers/susanacarvalhosq.png";
});

/*VIDEO*/
let size = window.innerWidth;
let video = document.querySelector("#index_video");
if(size>800) video.src = "videos/slideshow_d.mp4";
else if(size<800 && size>414) video.src = "videos/slideshow_t.mp4";
else if(size<414) video.src = "videos/slideshow_m.mp4";