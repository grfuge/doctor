(function () {
  const story_button = document.querySelectorAll(".learn-stories--story--title");
  const story_content = document.querySelectorAll(".learn-stories--story--content");

  story_button.forEach((button, i) => {
    button.addEventListener("click", function () {
      show_content(i);
    });
  });

  function show_content(i) {
    story_content.forEach(story => {
      story.classList.remove("visible");
    });
    story_button.forEach(button => {
      button.classList.remove("arrow-right")
    });
    story_button[i].classList.add("arrow-right");
    story_content[i].classList.add("visible");
  }
})();