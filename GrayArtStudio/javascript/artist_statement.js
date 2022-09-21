function contentMove(a) {

    let w = document.getElementById("AS");

    if (a == 'r') {
        w.style.transition = "margin-left 2s";
        w.style.marginLeft = "13%";
    }
    else {
        w.style.marginLeft = "0%";
    }
}