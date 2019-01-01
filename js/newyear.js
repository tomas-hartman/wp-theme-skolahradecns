class HappyNewYear {
    constructor() {
        this.dateEnd = new Date("2019-01-06");
        this.dateEndString = this.dateEnd.toUTCString();
        this.isCookieSet = this.checkCookies();
        this.cookie = `newYearPromo=true; expires=${this.dateEndString}; path=/;`;
    }
    htmlToShow() {
        let elmInnerHTML = `
            <div id="ny-pflogo"></div>
            <div id="ny-text">
                <span id="msg">Šťastné vykročení do nového roku 2019,\n hodně zdraví, štěstí a každý den úsměv na tváři</span>
                <span id="ny-from">přejí zaměstnanci ZŠ a MŠ v Hradci nad Svitavou</span>
            </div>`;

        let elmClose = document.createElement("DIV");
        elmClose.setAttribute("id", "ny-close");
        elmClose.innerHTML = "<a href=\"javascript:void\">zavřít</a>";
        elmClose.addEventListener("click", () => {
            this.hideHTML();
        });

        let elmContainer = document.createElement("DIV");
        elmContainer.setAttribute("id", "ny-container");
        elmContainer.innerHTML = elmInnerHTML;

        let elm = document.createElement("DIV");
        elm.setAttribute("id", "ny-main");
        elm.appendChild(elmClose);
        elm.appendChild(elmContainer);

        return elm;
    }
    checkCookies() {
        let cookies = document.cookie;
        cookies = cookies.split(";");

        for(let i=0;i<cookies.length;i++){
            let c = cookies[i];
            while(c.charAt(0) == ' '){
                c = c.substring(1);
            }
            c = c.split("=");
            if(c[0] === "newYearPromo" && c[1] === "true"){
                return true;
            }
        }
        return false;
    }
    setCookie() {
        document.cookie = this.cookie;
    }
    showHTML() {
        let elm = document.querySelector("body");
        elm.setAttribute("style", "overflow: hidden;");
        elm.appendChild(this.htmlToShow());
    }
    hideHTML() {
        let elm = document.querySelector("body");
        let elmToRemove = document.querySelector("#ny-main");
        elm.removeAttribute("style");
        elmToRemove.remove();
    }
}

const happyNewYear = new HappyNewYear();
const dateNow = new Date();
const init = () => {
    if (dateNow - happyNewYear.dateEnd <= 0 && !happyNewYear.isCookieSet) {
        happyNewYear.setCookie();
        happyNewYear.showHTML();
    } else console.log("Platnost proma vypršela.");
}

document.addEventListener("DOMContentLoaded", init);