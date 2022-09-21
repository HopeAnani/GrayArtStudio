function contentMove(a) {

    let w = document.getElementById("grid-container");

    if (a == 'r') {
        w.style.transition = "margin-left 2s";
        w.style.marginLeft = "13%";
    }
    else {
        w.style.marginLeft = "3.125rem";
    }
}


// function onceloaded() {
//     exe = false;
// }

// function sideToNav() {
//     let x = window.matchMedia("(max-width: 62.5rem)");


//     if (x.matches & !exe) {
//         let side = document.getElementById("sidebar");
//         let autobio = document.getElementById("autobiography");
//         let statment = document.getElementById("artStatment");
//         let about = document.getElementById("about");
//         let nav = document.getElementById("navlist");

//         let add = document.createElement("li");
//         let text = document.createTextNode("<h2>hello</h2>");
//         add.appendChild(text);
//         nav.appendChild(add);


//         side.setAttribute("hidden", "");
//         exe = true;
//     }
//     if (!x.matches) {
//         let side = document.getElementById("sidebar");
//         side.removeAttribute("hidden");
//         exe = false;
//     }
// }


// window.addEventListener("resize", sideToNav);