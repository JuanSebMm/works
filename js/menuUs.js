window.addEventListener("scroll", function() {
    var head = this.document.querySelector(".nav-bar");
    head.classList.toggle("sticky", window.scrollY > 0);
})