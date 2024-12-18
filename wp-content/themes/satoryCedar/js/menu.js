document.addEventListener("DOMContentLoaded", function () {
  console.log("clicked");
  const menuToggle = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".main-navigation");

  menuToggle.addEventListener("click", function () {
    const isExpanded =
      menuToggle.getAttribute("aria-expanded") === "true" || false;
    menuToggle.setAttribute("aria-expanded", !isExpanded);
    navigation.style.display = isExpanded ? "none" : "block";
  });
});
