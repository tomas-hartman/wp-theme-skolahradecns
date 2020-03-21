"use strict";

/* 
Source, tips and other methods from https://css-tricks.com/the-complete-guide-to-lazy-loading-images/
*/
document.addEventListener("DOMContentLoaded", function () {
    var lazyLoadImages = document.querySelectorAll("img.lazy-load, iframe.lazy-load");
    var lazyloadThrottleTimeout;

    var lazyload = function lazyload() {
        if (lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function () {
            var scrollTop = window.pageYOffset;

            for (var i = 0; i < lazyLoadImages.length; i++) {
                var elm = lazyLoadImages[i];

                if (elm.offsetTop < window.innerHeight + scrollTop + 200 && elm.classList.contains("lazy-load")) {
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
    };

    lazyload();
    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
});