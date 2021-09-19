import Modal from "../Classes/Modal.js";

(function () {
  "use strict";
  BASEOBJECT.buttons.init = function () {
    const body = document.body;
    const modal = new Modal();
    let template = "";
    body.addEventListener("click", function (e) {
      if (e.target.id === "openModalAbout") {
        template = "";
        template = `
          <div class="container-fluid container-xxl">
            <div class="paragraphs-wrapper py-5">
              <h2 class="_modal-title">About Us</h2>
              Content...
              <div class="buttons-wrapper w-100 mt-3">
                <a href="./about.php" class="_btn d-inline-block text-uppercase">More...</a>
                <a href="#" class="_btn _btn-invert d-inline-block text-uppercase" id="modalCloseBottom">Close</a>
              </div>
            </div>
          </div>`;

        modal.renderTemplate(template);
      }
    });
  }
})();
