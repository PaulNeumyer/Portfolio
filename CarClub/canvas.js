window.onload = function() {

    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");

    context.beginPath();
    context.moveTo(0, 0);
    context.lineTo(20, 0);
    context.lineTo(0, 20);
    context.closePath();

    context.lineWidth = 5;
    context.stroke();
    context.fillStyle = "red";
    context.fill();
};