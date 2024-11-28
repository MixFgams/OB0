document.addEventListener("DOMContentLoaded", function () {
    const showMoreBtn = document.getElementById("showMoreBtn");
    const extraForums = document.querySelectorAll(".forums-container .forum-item:nth-child(n+3)");

    // Fonction pour alterner entre "Voir plus" et "Voir moins"
    showMoreBtn.addEventListener("click", function () {
        if (showMoreBtn.innerText === "Voir plus +") {
            // Afficher les forums cachés
            extraForums.forEach(forum => forum.style.display = "flex");
            showMoreBtn.innerText = "Voir moins -";
        } else {
            extraForums.forEach(forum => forum.style.display = "none");
            showMoreBtn.innerText = "Voir plus +";
        }
    });
});

