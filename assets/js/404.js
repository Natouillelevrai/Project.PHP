const body = document.querySelector("body");

function easterEgg() {
    console.log("ok")
    body.style.backgroundImage = "url(assets/img/danton.png)";
}

setTimeout(easterEgg, 1000000)