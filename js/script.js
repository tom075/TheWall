const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var mouse = {
    x: undefined,
    y: undefined,
}

var maxRadius = 60;
//var minRadius = 8;

var colorArray = [
    '#000000',
    '#ffffff',
    '#737373',
    '#ffffff',
    '#000000'
];

var backColorArray = [
    '#123',
];

var backColor = backColorArray[Math.floor(Math.random() * backColorArray.length)];
console.log(colorArray);
console.log(backColorArray)

window.addEventListener('mousemove',
    function(event) {
        mouse.x = event.x;
        mouse.y = event.y;
    });

window.addEventListener('resize', function()
{
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});

function backgroundColor() {
    canvas.style.backgroundColor = backColor;
}

function Circle(x, y, dx, dy, radius){
    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.radius = radius;
    this.minRadius = radius;
    this.color = colorArray[Math.floor(Math.random() * colorArray.length)];

    this.draw = function(){

        context.beginPath();
        context.arc(this.x, this.y ,this.radius, 0, Math.PI * 2, false);
        context.fillStyle = this.color;
        context.fill();

    }

    this.update = function(){
        if (this.x + this.radius > innerWidth || this.x - this.radius < 0){
            this.dx = -this.dx;
        }

        if (this.y + this.radius > innerHeight || this.y - this.radius < 0){
            this.dy = -this.dy;
        }
        //  this.x += this.dx;
        //  this.y += this.dy;

        //Interactivity
        if(mouse.x - this.x < 40 && mouse.x - this.x > -40
            && mouse.y - this.y < 40 && mouse.y - this.y > -40){
            if(this.radius < maxRadius){
                //  this.dx += 1.5;
                //  this.dy += 1.5;
                this.radius += 5;}
        } else if (this.radius > this.minRadius){
            this.radius -= 3;
            //this.dx = (Math.random() - 0.5) * 5;
            //this.dy = (Math.random() - 0.5) * 5;
        }
        this.x += this.dx;
        this.y += this.dy;

        this.draw();
    }

}

var circleArray = [];

for (var i = 0; i < 200; i++) {
    var x = Math.random() * (innerWidth - radius * 2) + radius;
    var y = Math.random() * (innerHeight - radius * 2) +radius;
    var dx = (Math.random() - 0.2) * 1;
    var dy = (Math.random() - 0.2) * 1;
    var radius = (Math.random() * 5) + 10;
    circleArray.push(new Circle(x, y, dx, dy, radius));
}

console.log(circleArray);

function animate(){
    requestAnimationFrame(animate);
    context.clearRect(0, 0, innerWidth, innerHeight);
    for (var i = 0; i < circleArray.length; i++) {
        circleArray[i].update();
    }

}

animate();
