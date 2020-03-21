/* 
Source, tips and other methods from https://css-tricks.com/the-complete-guide-to-lazy-loading-images/
*/
document.addEventListener("DOMContentLoaded", () => {
    const lazyLoadImages = document.querySelectorAll("img.lazy-load, iframe.lazy-load");
    let lazyloadThrottleTimeout;

    const lazyload = () => {
        if (lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(() => {
            const scrollTop = window.pageYOffset;

            for (let i = 0; i < lazyLoadImages.length; i++) {
                const elm = lazyLoadImages[i];

                if (elm.offsetTop < (window.innerHeight + scrollTop + 200) && elm.classList.contains("lazy-load")) {
                    elm.src = elm.dataset.src;
                    elm.classList.remove("lazy-load");
                }
            }

            if (lazyLoadImages.length == 0) {
                document.removeEventListener("scroll", lazyload);
                window.removeEventListener("resize", lazyload);
                window.removeEventListener("orientationChange", lazyload);
            }
        }, 20);
    }

    lazyload();
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
});