
const hora = () => new Date().getHours();
let textSize = getCookie("texto");
let estilo = getCookie("estilo");


function miFuncion() {
    alert(`La hora del cliente es `);
}

function changeSize() {
    let tam = getCookie("texto");
    if (textSize == "smoll") {
        document.cookie = "texto=medio";
    } else if (textSize == "medio") {
        document.cookie = "texto=grande";
    } else {
        document.cookie = "texto=smoll"
    }
    console.log(textSize);
    location.reload();
}

function estilo1() {
    document.cookie = "estilo=estilo0";
    location.reload();
}

function estilo2() {
    document.cookie = "estilo=estilo1";
    location.reload();
}

function estilo3() {
    document.cookie = "estilo=estilo2";
    location.reload();
}

function remover() {
    document.cookie = "estilo=none";
    location.reload();
}



function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function body() {
    let HTMLActual;
    if (estilo == "estilo0") {
        HTMLActual = `${textSize} backEstilo1`;
    } else if (estilo == "estilo1") {
        HTMLActual = `${textSize} backEstilo2`;
    } else if (estilo == "estilo2") {
        HTMLActual = `${textSize} backEstilo3`;
    } else {
        if (hora() < 19 && hora() > 6) {
            HTMLActual = `${textSize} backLight`;
        } else {
            HTMLActual = `${textSize} backDark`;
        }
    }



    console.log(HTMLActual);
    return HTMLActual;
}

function navbar() {
    let HTMLActual;
    if (estilo == "estilo0") {
        HTMLActual = "navbar navbar-expand-md navbar-light bg-success shadow-sm";
    } else if (estilo == "estilo1") {
        HTMLActual = "navbar navbar-expand-md navbar-light bg-warning shadow-sm";
    } else if (estilo == "estilo2") {
        HTMLActual = "navbar navbar-expand-md navbar-light bg-danger shadow-sm";
    } else {
        if (hora() < 19 && hora() > 6) {
            HTMLActual = "navbar navbar-expand-md navbar-light bg-light shadow-sm";
        } else {
            HTMLActual = "navbar navbar-expand-md navbar-dark bg-dark shadow-sm";
        }
    }


    console.log(HTMLActual);
    return HTMLActual;
}

function cardLogin() {
    let HTMLActual;
    if (estilo == "estilo0") {
        HTMLActual = "width:44%; background: lime;"
    } else if (estilo == "estilo1") {
        HTMLActual = "width:44%; background: orange;"
    } else if (estilo == "estilo2") {
        HTMLActual = "width:44%; background: pink;"
    } else {
        if (hora() < 19 && hora() > 6) {
            HTMLActual = "width:44%; background: skyblue;";
        } else {
            HTMLActual = "width:44%; background: gray;";
        }
    }


    console.log(HTMLActual);
    return HTMLActual;
}

function botonReporte() {
    let HTMLActual;
    if (estilo == "estilo0") {
        HTMLActual = "btn btn-success";
    } else if (estilo == "estilo1") {
        HTMLActual = "btn btn-warning";
    } else if (estilo == "estilo2") {
        HTMLActual = "btn btn-danger";
    } else {
        if (hora() < 19 && hora() > 6) {
            HTMLActual = "btn btn-dark";
        } else {
            HTMLActual = "btn btn-outline-light";
        }
    }


    console.log(HTMLActual);
    return HTMLActual;
}

function cardStyle() {
    let HTMLActual;
    if (estilo == "estilo0") {
        HTMLActual = "card Estilo1";
    } else if (estilo == "estilo1") {
        HTMLActual = "card Estilo2";
    } else if (estilo == "estilo2") {
        HTMLActual = "card Estilo3";
    } else {
        if (hora() < 19 && hora() > 6) {
            HTMLActual = "card Light";
        } else {
            HTMLActual = "card Dark";
        }
    }


    console.log(HTMLActual);
    return HTMLActual;
}

function tableStyle() {
    let HTMLActual;
    if (estilo == "estilo0") {
        HTMLActual = "table Estilo1";
    } else if (estilo == "estilo1") {
        HTMLActual = "table Estilo2";
    } else if (estilo == "estilo2") {
        HTMLActual = "table Estilo3";
    } else {
        if (hora() < 19 && hora() > 6) {
            HTMLActual = "table Light";
        } else {
            HTMLActual = "table Dark";
        }
    }


    console.log(HTMLActual);
    return HTMLActual;
}

function generalStyle() {
    let HTMLActual;
    if (estilo == "estilo0") {
        HTMLActual = `${textSize} Estilo1`;
    } else if (estilo == "estilo1") {
        HTMLActual = `${textSize} Estilo2`;
    } else if (estilo == "estilo2") {
        HTMLActual = `${textSize} Estilo3`;
    } else {
        if (hora() < 19 && hora() > 6) {
            HTMLActual = `${textSize} Light`;
        } else {
            HTMLActual = `${textSize} Dark`;
        }
    }


    console.log(HTMLActual);
    return HTMLActual;
}

if (document.getElementById('bodyTheme') != undefined) {
    document.getElementById('bodyTheme').setAttribute('class', body());
}
if (document.getElementById('navTheme') != undefined) {
    document.getElementById('navTheme').setAttribute('class', navbar());
}
if (document.getElementById('cardLogin') != undefined) {
    document.getElementById('cardLogin').setAttribute('style', cardLogin());
}
if (document.getElementsByClassName('bot') != undefined) {
    var items = document.getElementsByClassName('bot');
    const long = items.length;
    for (var i = 0; i < long; i++) {
        console.log(items.length);
        items[0].setAttribute('class', botonReporte());
    }
}

if (document.getElementsByClassName('card') != undefined) {
    var items = document.getElementsByClassName('card');
    const long = items.length;
    for (var i = 0; i < long; i++) {
        console.log(items.length);
        items[0].setAttribute('class', cardStyle());
    }
}

if (document.getElementsByClassName('table') != undefined) {
    var items = document.getElementsByClassName('table');
    const long = items.length;
    for (var i = 0; i < long; i++) {
        console.log(items.length);
        items[0].setAttribute('class', tableStyle());
    }
}

if (document.getElementsByTagName('p') != undefined) {
    var items = document.getElementsByTagName('p');
    const long = items.length;
    for (var i = 0; i < long; i++) {
        console.log(items.length);
        items[0].setAttribute('class', generalStyle());
    }
}
