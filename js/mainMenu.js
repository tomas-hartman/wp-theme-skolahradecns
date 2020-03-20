"use strict";

<<<<<<< HEAD
document.addEventListener("DOMContentLoaded", function () {
=======
document.addEventListener("DOMContentLoaded", function() {
>>>>>>> fix: ie11 compatible js
  var menuItems = document.querySelectorAll("nav.main-menu .top-menu > li > a");
  var tappedElement;

  for (var i = 0; i < menuItems.length; i++) {
    var item = menuItems[i];
    item.parentNode.setAttribute("tabindex", "0");

<<<<<<< HEAD
    item.addEventListener("click", function (e) {
=======
    item.addEventListener("click", function(e) {
>>>>>>> fix: ie11 compatible js
      if (window.innerWidth > 960) return;

      if (!!tappedElement && tappedElement !== e.target.parentNode) {
        tappedElement.classList.remove("tap");
      }

      tappedElement = e.target.parentNode;
      e.target.parentNode.classList.toggle("tap");
      e.target.nextElementSibling.addEventListener(
        "click",
<<<<<<< HEAD
        function (e) {
          e.target.parentNode.classList.remove("tap");
        }, {
=======
        function(e) {
          e.target.parentNode.classList.remove("tap");
        },
        {
>>>>>>> fix: ie11 compatible js
          once: true
        }
      );
    });
  }
<<<<<<< HEAD
});
=======
});
>>>>>>> fix: ie11 compatible js
