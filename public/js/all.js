const hora = () => new Date().getHours();
if (document.getElementById('bodyTheme') != undefined) {
    document.getElementById('bodyTheme').setAttribute('style', body());
}
if (document.getElementById('navTheme') != undefined) {
    document.getElementById('navTheme').setAttribute('class', navbar());
}
if (document.getElementById('cardLogin') != undefined) {
    document.getElementById('cardLogin').setAttribute('style', cardLogin());
}


function miFuncion() {
    alert(`La hora del cliente es ${hora()}`);
}

function body() {
    let HTMLActual;
    if (hora() < 18 && hora() > 6) {
        HTMLActual = "background: linear-gradient(to right, skyblue, blue); ";
    } else {
        HTMLActual = "background: linear-gradient(to right, gray, black);";
    }
    console.log(HTMLActual);
    return HTMLActual;
}

function navbar() {
    let HTMLActual;
    if (hora() < 18 && hora() > 6) {
        HTMLActual = "navbar navbar-expand-md navbar-light bg-light shadow-sm";
    } else {
        HTMLActual = "navbar navbar-expand-md navbar-dark bg-dark shadow-sm";
    }
    console.log(HTMLActual);
    return HTMLActual;
}

function cardLogin() {
    let HTMLActual;
    if (hora() < 18 && hora() > 6) {
        HTMLActual = "width:44%; background: skyblue;";
    } else {
        HTMLActual = "width:44%; background: gray;";
    }
    console.log(HTMLActual);
    return HTMLActual;
}
