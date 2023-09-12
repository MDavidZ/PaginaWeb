window.addEventListener("load", init, false);

function init() {
  let seccion = document.querySelector("#botn1");
  let ventana = document.querySelector("#ventn1");
  let boton2 = document.querySelector("#botn2");
  let ventana2 = document.querySelector("#ventn2");
  let boton3 = document.querySelector("#botn3");
  let ventana3 = document.querySelector("#ventn3");
  let boton4 = document.querySelector("#botn4");
  let ventana4 = document.querySelector("#ventn4");
  let boton5 = document.querySelector("#botn5");
  let ventana5 = document.querySelector("#ventn5");
  let boton6 = document.querySelector("#botn6");
  let ventana6 = document.querySelector("#ventn6");

  let boton7 = document.querySelector("#botn7");
  let boton8 = document.querySelector("#botn8");
  let boton9 = document.querySelector("#botn9");
  let boton10 = document.querySelector("#botn10");
  let boton11 = document.querySelector("#botn11");
  let boton12 = document.querySelector("#botn12");

  ventana.style.visibility = "hidden";
  ventana.style.display = "none";
  ventana2.style.visibility = "hidden";
  ventana2.style.display = "none";
  ventana3.style.visibility = "hidden";
  ventana3.style.display = "none";
  ventana4.style.visibility = "hidden";
  ventana4.style.display = "none";
  ventana5.style.visibility = "hidden";
  ventana5.style.display = "none";
  ventana6.style.visibility = "hidden";
  ventana6.style.display = "none";

  seccion.addEventListener(
    "click",
    function (e) {
      ventana.style.visibility = "visible";
      ventana.style.display = "block";
      seccion.style.visibility = "hidden";
    },
    false
  );

  boton2.addEventListener(
    "click",
    function (e) {
      ventana2.style.visibility = "visible";
      ventana2.style.display = "block";
      boton2.style.visibility = "hidden";
    },
    false
  );

  boton3.addEventListener(
    "click",
    function (e) {
      ventana3.style.visibility = "visible";
      ventana3.style.display = "block";
      boton3.style.visibility = "hidden";
    },
    false
  );

  boton4.addEventListener(
    "click",
    function (e) {
      ventana4.style.visibility = "visible";
      ventana4.style.display = "block";
      boton4.style.visibility = "hidden";
    },
    false
  );

  boton5.addEventListener(
    "click",
    function (e) {
      ventana5.style.visibility = "visible";
      ventana5.style.display = "block";
      boton5.style.visibility = "hidden";
    },
    false
  );

  boton6.addEventListener(
    "click",
    function (e) {
      ventana6.style.visibility = "visible";
      ventana6.style.display = "block";
      boton6.style.visibility = "hidden";
    },
    false
  );

  boton7.addEventListener(
    "click",
    function (e) {
      seccion.style.visibility = "visible";
      ventana.style.visibility = "hidden";
      ventana.style.display = "none";
    },
    false
  );

  boton8.addEventListener(
    "click",
    function (e) {
      boton2.style.visibility = "visible";
      ventana2.style.visibility = "hidden";
      ventana2.style.display = "none";
    },
    false
  );
  boton9.addEventListener(
    "click",
    function (e) {
      boton3.style.visibility = "visible";
      ventana3.style.visibility = "hidden";
      ventana3.style.display = "none";
    },
    false
  );
  boton10.addEventListener(
    "click",
    function (e) {
      boton4.style.visibility = "visible";
      ventana4.style.visibility = "hidden";
      ventana4.style.display = "none";
    },
    false
  );
  boton11.addEventListener(
    "click",
    function (e) {
      boton5.style.visibility = "visible";
      ventana5.style.visibility = "hidden";
      ventana5.style.display = "none";
    },
    false
  );
  boton12.addEventListener(
    "click",
    function (e) {
      boton6.style.visibility = "visible";
      ventana6.style.visibility = "hidden";
      ventana6.style.display = "none";
    },
    false
  );
}
