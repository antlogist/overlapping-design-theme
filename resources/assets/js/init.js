(function () {
  "use strict";

  BASEOBJECT.nav.toggleButton();
  
  const body = document.body;
  switch (body.id) {
    case "frontPage":
      BASEOBJECT.frontPageCarousel.init();
  }

})();
