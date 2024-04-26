var swiper = new Swiper(".slide-content", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("loading-screen").style.display = "flex";

    setTimeout(function () {
        document.getElementById("loading-screen").style.display = "none";

        document.getElementById("content").style.display = "block";
    }, 800);
});
