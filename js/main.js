document.addEventListener('DOMContentLoaded', () => {

  /*
  * GENERIC SCRIPTS TO LOAD ACROSS THE SITE
  */

  /*
  * Generate the hamburger menu for mobile devices.
  */
  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach( el => {
      el.addEventListener('click', () => {

        // Get the target from the "data-target" attribute
        const target = el.dataset.target;
        const $target = document.getElementById(target);

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

  /*
  * Add the cookie banner.
  */
  const cookieContainer = document.querySelector(".cookie-banner");
  const cookieButton = document.querySelectorAll(".cookie-btn");

  cookieButton.forEach(item => {
    item.addEventListener("click", () => {
      cookieContainer.classList.remove("active-banner");
      localStorage.setItem("cookieBannerDisplayed", "true");
      if (item.classList.contains('cookie-accept')) {
        localStorage.setItem("cookieAccepted", "true");
      }
    });

    setTimeout(() => {
      if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active-banner");
      }
    }, 200);
  }); // end foreach

  /*
  * Add the accordions.
  */
  if (document.getElementsByClassName("accordion")) {
    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
      });
    }
  }


});
