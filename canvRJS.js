let color = "red";
let sideLength = 5;
main();

function main(){
    document.onmousemove = processMousePosition;

}

function draw(xPos, yPos) {
    let context = document.getElementById("canvas2").getContext("2d");
    context.fillStyle = color;
    context.fillRect(xPos, yPos, sideLength, sideLength);
}

function processMousePosition(evt) {
	draw(evt.clientX, evt.clientY);
}
