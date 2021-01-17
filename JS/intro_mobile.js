let R = 0;
let x1 = 0;
let y1 = 0;
let Z = 0;
let RX = -0.6;
let S = 1;
let A1 = 1500;
let A2 = 1500;
let A3 = 1500;
let t=0;

let img;

function preload(){
    img = loadImage("images/intro/anim_m.png");
}

function setup() {
    createCanvas(windowWidth, windowHeight, WEBGL);
    noStroke();
    frameRate(60);
}

function draw() {
    background(25, 25, 26);

    push();
    rotateY(R);
    translate(x1, y1, Z);
    scale(S);
    rotateX(RX);
    rotateY(0.7);
    push();
    translate(0, -A1, 0);
    fill(248, 248, 248);
    box(50, 120, 50);
    pop();
    push();
    translate(0, A1, 0);
    fill(248, 248, 248);
    box(50, 120, 50);
    pop();
    push();
    translate(0, 0, -A2);
    fill(107, 186, 71);
    box(50, 50, 120);
    pop();
    push();
    translate(0, 0, A2);
    fill(221, 144, 38);
    box(50, 50, 120);
    pop();
    push();
    translate(-A3, 0, 0);
    fill(194, 37, 56);
    box(120, 50, 50);
    pop();
    push();
    translate(A3, 0, 0);
    fill(51, 169, 157);
    box(120, 50, 50);
    pop();
    pop();

    if (t > 0) {
        tint(255, 255, 255, t);
        image(img,-windowWidth/2, -windowHeight/2,windowWidth, windowHeight);
        if (t < 255) {
            t += 5;
            R=0;
            RX=0;
            Z-=50;
        }
    }

    R += 0.015;

    if (A1 > 60 && A2 > 60 && A3 > 60) {
        A1 -= 5;
        A2 -= 5;
        A3 -= 5
    }
    if (RX < 0) {
        RX += 0.0021;
    }
    if (A1 < 61 && A2 < 61 && A3 < 61) {
        A1 = 60;
        A2 = 60;
        A3 = 60;
        setTimeout(function () {
            window.location.href = "home.html"
        }, 1000);
        t++;
    }
}

function windowResized() {
    resizeCanvas(windowWidth, windowHeight);
}