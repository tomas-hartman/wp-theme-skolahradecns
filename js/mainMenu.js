"use strict";

document.addEventListener("DOMContentLoaded", function() {
  var menuItems = document.querySelectorAll("nav.main-menu .top-menu > li > a");
  var tappedElement;

  for (var i = 0; i < menuItems.length; i++) {
    var item = menuItems[i];
    item.parentNode.setAttribute("tabindex", "0");

    item.addEventListener("click", function(e) {
      if (window.innerWidth > 960) return;

      if (!!tappedElement && tappedElement !== e.target.parentNode) {
        tappedElement.classList.remove("tap");
      }

      tappedElement = e.target.parentNode;
      e.target.parentNode.classList.toggle("tap");
      e.target.nextElementSibling.addEventListener(
        "click",
        function(e) {
          e.target.parentNode.classList.remove("tap");
        },
        {
          once: true
        }
      );
    });
  }
});
