
document.getElementById("btn__inisiar-registrarse").addEventListener("click",registro);
document.getElementById("btn__inisiar-sesion").addEventListener("click",iniciarsesion);
window.addEventListener("resize",anchodepagina);


var caja_trasera_login=document.querySelector(".caja__trasera-login");
var caja_trasera_registro=document.querySelector(".caja__trasera-registro");
var contenedor_login_rregistro=document.querySelector(".contenedor__login-register");
var formulario_login=document.querySelector(".formulario__login");
var formulario_registro=document.querySelector(".formulario__registro");


anchodepagina();


function anchodepagina(){
    if(window.innerWidth>850){
        caja_trasera_login.style.display="block";
        caja_trasera_registro.style.display="block ";
    }else{
        caja_trasera_registro.style.display="block ";
        caja_trasera_registro.style.opacity="1";
        caja_trasera_login.style.display="none";
        formulario_login.style.display="block";
        formulario_registro.style.display="none";
        contenedor_login_rregistro.style.left="0px";
    }
}

function registro(){
    if(window.innerWidth>850){
        formulario_registro.style.display="block";
        contenedor_login_rregistro.style.left="410px";
        formulario_login.style.display="none";
        caja_trasera_registro.style.opacity="0";
        caja_trasera_login.style.opacity="1";
    }else{
        formulario_registro.style.display="block";
        contenedor_login_rregistro.style.left="0px";
        formulario_login.style.display="none";
        caja_trasera_registro.style.display="none";
        caja_trasera_login.style.display="block";
        caja_trasera_login.style.opacity="1";
    }

}
function iniciarsesion(){
    if(window.innerWidth>850){
        formulario_registro.style.display="none";
        contenedor_login_rregistro.style.left="10px";
        formulario_login.style.display="block";
        caja_trasera_registro.style.opacity="1";
        caja_trasera_login.style.opacity="0";
    }else{
        formulario_registro.style.display="none";
        contenedor_login_rregistro.style.left="0px";
        formulario_login.style.display="block";
        caja_trasera_registro.style.display="block";
        caja_trasera_login.style.display="none";  
    }

}