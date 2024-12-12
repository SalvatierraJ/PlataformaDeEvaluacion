
const navBar = document.querySelector("nav")
const navToggle = document.querySelector(".navToggle")
const navLinks = document.querySelectorAll(".navList")
const darkToggle = document.querySelector(".darkToggle")
const body = document.querySelector("body")


navToggle.addEventListener('click',()=>{
    navBar.classList.toggle('close')
})

navLinks.forEach(function (element){
    element.addEventListener('click',function (){
        navLinks.forEach((e)=>{
            e.classList.remove('active')
            this.classList.add('active')
        })
    })
})

const addtest = document.getElementById('addTest');
const addButton = document.getElementById('04');
const agregarDiv = document.getElementById('03');
const addrespuesta = document.getElementById('btnAgregarRespuesta');
const Respuesta = document.querySelector('.respuestas');
const contenedorpreguntas=document.querySelector('.contenedorpreguntas');
const BotonoPregunta=document.querySelector('.btnpreg');
const bg = document.querySelector('.bg-modal');

const defaultContent = document.querySelector('.modal-content').cloneNode(true);
const eventosActuales = obtenerEventosActuales(document.querySelector('.modal-content'));

function restContenedorPregunta(defaultContent,eventos) {
  const moda=document.querySelector('.modal-content');
  moda.remove();
  bg.appendChild(defaultContent);
  aplicarEventosActuales(bg, eventos);
  
}


let counter = 2;

addButton.addEventListener('click', () => {
    document.querySelector('.bg-modal').style.display='flex';
});

addtest.addEventListener('click', () => {
    document.querySelector('.bg-modal').style.display='none';
    const newBox = document.createElement('div');
    newBox.classList.add('box' , `box${counter}`);
    newBox.textContent = `Box ${counter}`;
    agregarDiv.appendChild(newBox);
    if(counter<3){ 
        counter++;
    }else{
        counter=2;
    }

    restContenedorPregunta(defaultContent,eventosActuales);
    
});

addrespuesta.addEventListener('click', ()=>{
    var newRespuesta = Respuesta.cloneNode(true);
    contenedorpreguntas.appendChild(newRespuesta)

});


/**---------------**/
function obtenerEventosActuales(contenedor) {
    const elementos = contenedor.querySelectorAll('*');
    const eventosActuales = [];
  
    elementos.forEach(elemento => {
      const eventos = obtenerEventosElemento(elemento);
      eventosActuales.push({ elemento, eventos });
    });
  
    return eventosActuales;
  }
  
  function obtenerEventosElemento(elemento) {
    const eventos = [];
  
    for (const tipoEvento in elemento) {
      if (tipoEvento.startsWith('on')) {
        const evento = tipoEvento.slice(2);
        const listener = elemento[tipoEvento];
        const opciones = obtenerOpcionesEvento(elemento, tipoEvento);
        eventos.push({ tipo: evento, listener, opciones });
      }
    }
  
    return eventos;
  }
  
  function obtenerOpcionesEvento(elemento, tipoEvento) {
    const opciones = {};
  
    const descriptorEvento = Object.getOwnPropertyDescriptor(elemento.__proto__, tipoEvento);
    if (descriptorEvento && descriptorEvento.get) {
      const listener = descriptorEvento.get;
      Object.defineProperty(elemento, tipoEvento, {
        get: listener,
        set: function (value) {
          opciones.capture = true;
          opciones.once = false;
          opciones.passive = false;
          listener.call(this, value);
        }
      });
    }
  
    return opciones;
  }
  
  function aplicarEventosActuales(contenedor, eventosActuales) {
    eventosActuales.forEach(({ elemento, eventos }) => {
      eventos.forEach(evento => {
        elemento.addEventListener(evento.tipo, evento.listener, evento.opciones);
      });
    });
  }


/*darkToggle.addEventListener('click',()=>{
    body.classList.toggle('dark')




})*/


