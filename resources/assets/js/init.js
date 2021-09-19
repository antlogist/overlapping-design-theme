(function () {
  "use strict";

  BASEOBJECT.nav.toggleButton();
  BASEOBJECT.buttons.init();
  
  const body = document.body;
  switch (body.id) {
    case "frontPage":
      BASEOBJECT.frontPageCarousel.init();
  }

})();
