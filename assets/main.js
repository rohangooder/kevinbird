// Webpack Imports
import * as bootstrap from "bootstrap";

(function () {
  "use strict";

  // Focus input if Searchform is empty
  [].forEach.call(document.querySelectorAll(".search-form"), (el) => {
    el.addEventListener("submit", function (e) {
      var search = el.querySelector("input");
      if (search.value.length < 1) {
        e.preventDefault();
        search.focus();
      }
    });
  });

  // Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
  var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl, {
      trigger: "focus",
    });
  });
})();

/**
 * Automatic width calculator
 */
// Wait for the document to be ready
jQuery(document).ready(function ($) {
  if ($("#sidebar").length > 0) {
    console.log("The sidebar element exists.");
  } else {
    // Function to update section width
    function updateSectionWidth() {
      var headerWidth = $(".container").width();
      $(".wp-block-group__inner-container").css("width", headerWidth);
    }

    // Update section width on window resize
    $(window).on("resize", function () {
      updateSectionWidth();
    });

    // Initial section width update
    updateSectionWidth();
  }
});
