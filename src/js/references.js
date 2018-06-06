(function () {
  /**
   * Constants
   */
  const references_text = document.querySelectorAll(".references--text");
  const references_list = document.querySelectorAll(".references--list");

  /**
   * Functions
   */
  references_text.forEach((text, i) => {
    text.innerHTML = `References&ensp;<small>&#x25BC;</small>`;
    text.addEventListener("click", function () {
      show_references(i);
    });
  });

  function show_references(i) {
    if (references_list[i].classList.contains("hidden")) {
      references_text[i].innerHTML = `References&ensp;<small>&#x25B2;</small>`;
      references_list[i].classList.remove("hidden");
    } else {
      references_text[i].innerHTML = `References&ensp;<small>&#x25BC;</small>`;
      references_list[i].classList.add("hidden");
    }
  }
})();