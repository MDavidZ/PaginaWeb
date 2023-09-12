window.addEventListener("load", init1, false);
function init1() {
  let boton = document.querySelector("#botn");
  let ventana = document.querySelector("#ventn1");
  let boton1 = document.querySelector("#botn1");

  ventana.style.visibility = "hidden";
  ventana.style.display = "none";

  boton.addEventListener(
    "click",
    function (j) {
      ventana.style.visibility = "visible";
      ventana.style.display = "block";
      boton.style.visibility = "hidden";
    },
    false
  );

  boton1.addEventListener(
    "click",
    function (j) {
      boton.style.visibility = "visible";
      ventana.style.visibility = "hidden";
      ventana.style.display = "none";
    },
    false
  );
}

//definicion de imagen

const imagen = [
  "img/compus.jpeg",
  "img/desensamble.jpeg",
  "img/limpieza.jpeg",
  "img/limpio.jpeg",
  "img/pastaT.jpeg",
  "img/desensamble2.jpeg",
  "img/limpiezaplaca.jpeg",
  "img/4.jpeg",
  "img/limpieza2.jpeg",
  "img/limpio2.jpeg",
];

//app state
let index = 0;
const max = imagen.length;

//get

const container3Element = document.querySelector(".container3");
const prevSlideButton = document.querySelector(".prevSlide");
const nextSlideButton = document.querySelector(".nextSlide");

// eventos al hacer clik en los botones

prevSlideButton.addEventListener("click", function () {
  index--;
  setImageIndex();
  changeBackgroundImage(imagen[index], container3Element);
});

nextSlideButton.addEventListener("click", function () {
  index++;
  setImageIndex();
  changeBackgroundImage(imagen[index], container3Element);
});

// utiliza la funcion
function setImageIndex() {
  if (index < 0) index = max - 1;
  if (index === max) index = 0;
}

function changeBackgroundImage(backgroundImage, element) {
  element.style.backgroundImage = `url(${backgroundImage})`;
}
