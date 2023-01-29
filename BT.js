ar navbarLinks = document.querySelectorAll(".navbar a");
navbarLinks.forEach(function(link) {
  link.addEventListener("click", function(e) {
    e.preventDefault();
    var linkHref = link.getAttribute("href");
    window.location.href = linkHref;
  });
});