document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("loading-screen").style.display = "flex";

    setTimeout(function () {
        document.getElementById("loading-screen").style.display = "none";

        document.getElementById("content").style.display = "block";
    }, 800);
});
