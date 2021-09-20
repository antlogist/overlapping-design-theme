import Request from "../Classes/Request.js";

(function () {
  "use strict";

  BASEOBJECT.nav.toggleButton = function () {
    const button = document.getElementById("navToggleButton");
    const navMain = document.getElementById("navMain");
    const body = document.body;
    const request = new Request();

    button.addEventListener("click", function (e) {
      e.preventDefault();

      request.get(`${baseUrl}/wp-json/menus/v1/menu`, (err, resp) => {
        if (err) {
          console.log(err);
          return;
        }
        
        const ul = document.createElement("ul");
        resp.map((item)=> {
          const navItem = `
            <li>
              <a href="${item.url}" class="py-2 px-3">${item.title}</a>
            </li>
          `;
          ul.insertAdjacentHTML("beforeEnd", navItem);
        })
        
        navMain.appendChild(ul);
        
        switch (navMain.classList.contains("active")) {
          case true:
            navMain.classList.remove("active");
            button.classList.remove("active");
            body.classList.remove("active");
            break;
          default:
            navMain.classList.add("active");
            button.classList.add("active");
            body.classList.add("active");
        }
      });
    });
  }
})();
