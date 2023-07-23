
function mostrarMenu(){
    var main = document.getElementById("main");
    var div_menu = document.getElementById("menu-mobile");
    if(div_menu.style.display=="none"){
        div_menu.style.display="block";
    }
    else{
        div_menu.style.display="none";
    }
}

function ocultarMenu(){
    var div_menu = document.getElementById("menu-mobile");
    div_menu.style.display="none";
}