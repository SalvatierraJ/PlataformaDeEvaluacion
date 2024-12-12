const addButton = document.getElementById("04");
const agregarDiv = document.getElementById("03");
const BotonoPregunta = document.querySelector(".btnpreg");
const bg = document.querySelector(".bg-modal");
const script = document.createElement("script");
script.src = "./scripts/examen/CuadroImagenExamenes.js";

var addtest;
var addrespuesta;
var Respuesta;
var DivAddtest;
var contenedorpreguntas;
var ADDPregunta;
var close_bgModal;
var agregarRespuestaDiv;
var picpreg;
var contadorResp = 2;
var contadorPreg = 1;
let counter = 2;

const htmlCode = `
<div class="modal-content">
            <div class="contenedorCL">

                <div class="LogotipoUtepsa">
                    <img src="./img/LOGOTIPO_Mesa de trabajo 1.png" alt="">
                </div>
                <div class="close" id="close-bgmodal">
                    <ion-icon name="close-outline" onclick=btnClose()></ion-icon>
                </div>
            </div>
            <form action="">
                <div class="contenedor-Examen">
                    <div class="titulo-parcial">
                        <input type="text" placeholder="TITULO DEL PARCIAL">

                    </div>
                    <br>
                    <div class="tiempo-parcial">
                        <input type="number" placeholder="TIEMPO PARCIAL">
                    </div>
                    <br>
                    <br>
                    <div class="contenedor-preguntas">

                        <div class="contenedorpreguntas" id="contenedorPreguntas1">
                            <div class="pregunta" id="pregunta1">
                                <div class="addi" id="add-img">

                                    <div style="float: left;width: 92%;">
                                        <span> </span>
                                        <input type="text" placeholder="Introduzca Pregunta">
                                    </div>



                                </div>
                            </div>
                            <br>


                            <div class="contenedordrag" id="contenedordrag1">
                                <div class="h-72">
                                    <label class="h-60 flex justify-center">
                                        <img id="image_preview" class="object-cover h-full rounded-lg" src="https://placehold.co/800x400" alt="image description" />
                                    </label>

                                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400" id="name_image">
                                    </figcaption>
                                </div>
                                <div>
                                    <label for="select_image" onclick="manejarCambioImagen('select_image', 'image_preview');" class="block mb-4 text-sm font-medium text-gray-900 dark:text-black size-7">
                                        <ion-icon class="size-7" style="cursor: pointer" name="image"></ion-icon>
                                    </label>
                                    <input id="select_image" style="display: none;" type="file" accept="image/*" name="image" />
                                </div>
                            </div>




                            <div class="respuestas" id="pregunta_1_1">
                                <div class="checkbox-wrapper-12">
                                    <div class="cbx">
                                        <input id="cbx-12" type="checkbox" />
                                        <label for="cbx-12"></label>
                                        <svg width="15" height="14" viewbox="0 0 15 14" fill="none">
                                            <path d="M2 8.36364L6.23077 12L13 2"></path>
                                        </svg>
                                    </div>
                                    <!-- Gooey-->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                        <defs>
                                            <filter id="goo-12">
                                                <fegaussianblur in="SourceGraphic" stddeviation="4" result="blur">
                                                </fegaussianblur>
                                                <fecolormatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" result="goo-12">
                                                </fecolormatrix>
                                                <feblend in="SourceGraphic" in2="goo-12"></feblend>
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                                <input type="text" placeholder="Respuesta">

                            </div>
                            <div class="addrespuesta" id="btnAgregarRespuesta" onclick="btnaddres('contenedorPreguntas1','btnAgregarRespuesta')">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="btnflex">
                    <div class="btnpreg" id="ADDPregunta" onclick=btnADDPregunta()>
                        <a href="#" class="btn btn-outline-dark btn-lg">PREGUNTA</a>
                        <button type="button" class="btn btn-outline-dark btn-lg" onclick=btnguardar()>GUARDAR</button>
                    </div>
                </div>
            </form>

        </div>
`;

window.onload = function () {
  var test = document.querySelectorAll(".contenedordrag");
  for (var i = 0; i < test.length; i++) {
    test[i].addEventListener("click", function () {});
  }
};

function btnClose() {
  document.querySelector(".bg-modal").style.display = "none";
}

function restContenedorPregunta(defaultContent, eventos) {
  const moda = document.querySelector(".modal-content");
  moda.remove();
  bg.appendChild(defaultContent);
  aplicarEventosActuales(bg, eventos);
}

addButton.addEventListener("click", () => {
  document.querySelector(".bg-modal").style.display = "flex";
  bg.innerHTML = htmlCode;

  document.head.appendChild(script);
  addrespuesta = document.getElementById("btnAgregarRespuesta");
  addtest = document.getElementById("addTest");
  close_bgModal = document.getElementById("close-bgmodal");
  ADDPregunta = document.getElementById("ADDPregunta");
  DivAddtest = document.getElementById("DivAddtest");
  agregarRespuestaDiv = document.getElementById("btnAgregarRespuesta");
  picpreg = document.getElementById("picpreg");
});

function btnguardar() {
  document.querySelector(".bg-modal").style.display = "none";
  const newBox = document.createElement("div");
  newBox.classList.add("box", `box${counter}`);
  newBox.textContent = `Box ${counter}`;
  agregarDiv.appendChild(newBox);
  if (counter < 3) {
    counter++;
  } else {
    counter = 2;
  }

  bg.innerHTML = "";
}

function btnaddres(id, btnres) {
  addrespuesta = document.getElementById(btnres);
  contenedorpreguntas = document.getElementById(id);
  var contenedor = document.createElement("div");
  contenedor.classList.add("respuestas");
  contenedor.id = "pregunta_" + contadorPreg + "_" + contadorResp;
  contadorResp++;
  contenedor.innerHTML = `
        <div class="checkbox-wrapper-12">
            <div class="cbx">
                <input id="cbx-12" type="checkbox" />
                <label for="cbx-12"></label>
                <svg width="15" height="14" viewbox="0 0 15 14" fill="none">
                    <path d="M2 8.36364L6.23077 12L13 2"></path>
                </svg>
            </div>
            <!-- Gooey-->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo-12">
                        <fegaussianblur in="SourceGraphic" stddeviation="4" result="blur">
                        </fegaussianblur>
                        <fecolormatrix in="blur" mode="matrix"
                            values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" result="goo-12">
                        </fecolormatrix>
                        <feblend in="SourceGraphic" in2="goo-12"></feblend>
                    </filter>
                </defs>
            </svg>
        </div>
        <input type="text" placeholder="Respuesta">
    `;
  contenedorpreguntas.insertBefore(contenedor, addrespuesta);
}

function btnADDPregunta() {
  var newRespuesta = document.querySelector(".contenedor-preguntas");
  contenedorpreguntas = document.querySelector(".modal-content");
  contadorPreg += contadorPreg;
  contadorResp = 2;
  contenedor = `
    <div class="contenedorpreguntas" id="contenedorPreguntas${contadorPreg}">
                        <div class="pregunta" id="pregunta1">
                        <div class="addi" id="add-img">

                            <div style="float: left;width: 92%;">
                                <span> </span>
                                <input type="text" placeholder="Introduzca Pregunta">
                            </div>



                        </div>
                    </div>
                    <br>

                    <div class="contenedordrag" id="contenedordrag1" >
                    <div class="h-72">
                        <label  class="h-60 flex justify-center">
                            <img id="image_preview${contadorPreg}" class="object-cover h-full rounded-lg" src="https://placehold.co/800x400" alt="image description" />
                        </label>

                        <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400" id="name_image">
                        </figcaption>
                    </div>
                    <div>
                        <label for="select_image${contadorPreg}" onclick="manejarCambioImagen('select_image${contadorPreg}', 'image_preview${contadorPreg}');" class="block mb-4 text-sm font-medium text-gray-900 dark:text-black size-7">
                            <ion-icon class="size-7" style="cursor: pointer" name="image"></ion-icon>
                        </label>
                        <input id="select_image${contadorPreg}" style="display: none;" type="file" accept="image/*" name="image" />
                    </div>
                </div>

                     <div class="respuestas" id="pregunta_${contadorPreg}_1">
                         <div class="checkbox-wrapper-12">
                             <div class="cbx">
                                 <input id="cbx-12" type="checkbox" />
                                 <label for="cbx-12"></label>
                                 <svg width="15" height="14" viewbox="0 0 15 14" fill="none">
                                     <path d="M2 8.36364L6.23077 12L13 2"></path>
                                 </svg>
                             </div>
                             <!-- Gooey-->
                             <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                                 <defs>
                                     <filter id="goo-12">
                                         <fegaussianblur in="SourceGraphic" stddeviation="4" result="blur">
                                         </fegaussianblur>
                                         <fecolormatrix in="blur" mode="matrix"
                                             values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" result="goo-12">
                                         </fecolormatrix>
                                         <feblend in="SourceGraphic" in2="goo-12"></feblend>
                                     </filter>
                                 </defs>
                             </svg>
                         </div>
                         <input type="text" placeholder="Respuesta">

                     </div>
                     
                     <div class="addrespuesta" id="btnAgregarRespuesta${contadorPreg}" onclick=btnaddres('contenedorPreguntas${contadorPreg}','btnAgregarRespuesta${contadorPreg}')>
                     <ion-icon name="add-outline"></ion-icon>
                 </div>
                 </div>
    `;

  newRespuesta.insertAdjacentHTML("beforeend", contenedor);
  const script = document.createElement("script");
  script.src = "./scripts/examen/CuadroImagenExamenes.js";
  document.head.appendChild(script);
}
