var c = document.getElementById("circulos");
var cxt = c.getContext("2d");

cxt.beginPath();
cxt.arc(60, 60, 40, 0, Math.PI * 2, true); //arc(x,y,radio,angulo_inicio,angulo_final,sentido[antihorario-true / horario-false])
cxt.closePath;
cxt.stroke();

cxt.beginPath();
cxt.arc(140, 60, 40, 0, Math.PI, true); // Un arco de medio circulo en sentido antihorario
cxt.closePath;
cxt.stroke();

cxt.beginPath();
cxt.arc(220, 60, 40, 0, Math.PI * 2, false); // Dibuja el circulo en sentido horario
cxt.closePath;
cxt.fill(); // Un circulo relleno

cxt.beginPath();
cxt.arc(140, 60, 30, Math.PI, Math.PI * 1.5); // Un arco de medio circulo en sentido horario
cxt.closePath;
cxt.fill();

cxt.beginPath();
cxt.arc(140, 60, 30, 0, Math.PI * 0.5); // Un arco de medio circulo en sentido horario
cxt.lineTo(140, 60);
cxt.closePath;
cxt.fill();
