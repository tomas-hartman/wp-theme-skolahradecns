/*  WordPress neumožňuje vložit do svýho menu javascript, tak ho tam injectuju do prvního "a" v daným
    listu až následně javascriptem, class jsem musel definovat ručně. */

const addClassToMenu = () => {
    let a, i, mainClass;

    a = document.getElementsByClassName("main-mainmenu");
    mainClass = ['main-zs', 'main-ms', 'main-sd', 'main-skola'];

    for (i = 0; i < a.length; i++) {
        a[i].getElementsByTagName("a")[0].href = "javascript:openMenu('" + mainClass[i] + "')";
    }
}

/*Funkce, která se stará o to, abych po kliknutí otevřel, nebo zavřel otevřený menu.*/
const openMenu = (x) => {
    let y, z, i;

    z = document.getElementsByClassName("main-mainmenu");
    y = document.getElementsByClassName(x)[0];

    if (y.classList.contains("tap")) {
        y.classList.remove("tap");
    }
    else {
        for (i = 0; i < z.length; i++) {
            z[i].classList.remove("tap");
        }
        y.classList.add("tap");
    }
}

/* 
Cíl: Zrychlit web, vyvarovat se loadování iframu mapy.cz & některých obrázků při loadu stránky.
*/

const preload = () => {
    const scrollHeight = Math.max(
        document.body.clientHeight, document.documentElement.clientHeight
    );

    document.addEventListener("scroll", function eventOnScroll(e){
        const footer = document.querySelector("footer");
        let fromTop = footer.getBoundingClientRect().top;
        if (fromTop < scrollHeight + 200) {
            loadMapyIframe();
            e.target.removeEventListener(e.type, eventOnScroll);
        }
    });    
}

// RETHINK THIS
const preloadSingleImg = (elem) => {
    const scrollHeight = Math.max(
        document.body.clientHeight, document.documentElement.clientHeight
    );
    let fromTop = elem.getBoundingClientRect().top;

    if (fromTop < scrollHeight + 200) {
        elem.setAttribute("src", elem.dataset.src);
    } else {
        document.addEventListener("scroll", function display(e){
            fromTop = elem.getBoundingClientRect().top;

            if(fromTop < scrollHeight + 200){
                elem.setAttribute("src", elem.dataset.src);
                e.target.removeEventListener(e.type, display);
            }
        });
    }
}

const loadLogolinkImgs = () => {
    const imgs = document.querySelectorAll("section.logolink img");
    imgs.forEach((img) => {
        preloadSingleImg(img);
    });
}

const loadMapyIframe = () => {
    const container = document.getElementById("maps-iframe");
    const element = document.createElement("IFRAME");

    element.src = "https://api.mapy.cz/frame?params=%7B%22x%22%3A16.48346124161884%2C%22y%22%3A49.71051054710277%2C%22base%22%3A%221%22%2C%22layers%22%3A%5B%5D%2C%22zoom%22%3A14%2C%22url%22%3A%22https%3A%2F%2Fmapy.cz%2Fs%2Fk92g%22%2C%22mark%22%3A%7B%22x%22%3A%2216.481733899013243%22%2C%22y%22%3A%2249.71105099848858%22%2C%22title%22%3A%22Z%C5%A0%20a%20M%C5%A0%20Hradec%20nad%20Svitavou%22%7D%2C%22overview%22%3Afalse%7D&amp;width=200&amp;height=200";
    element.setAttribute("width", 200);
    element.setAttribute("height", 200);
    element.setAttribute("style", "border:none");
    element.setAttribute("frameBorder", 0);

    container.appendChild(element);
}

/* INITIALIZATION */
document.addEventListener("DOMContentLoaded", function () {
    addClassToMenu();
    preload();
    loadLogolinkImgs();
});