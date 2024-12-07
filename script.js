document.addEventListener("DOMContentLoaded", function () {
    initShowMoreButton();
    initScrollButtons();
});

function initShowMoreButton() {
    const showMoreBtn = document.getElementById("showMoreBtn");
    const extraForums = document.querySelectorAll(".forums-container .forum-item:nth-child(n+3)");

    showMoreBtn.addEventListener("click", function () {
        toggleShowMore(showMoreBtn, extraForums);
    });
}

function toggleShowMore(button, forums) {
    if (button.innerText === "Voir plus +") {
        forums.forEach(forum => forum.style.display = "flex");
        button.innerText = "Voir moins -";
    } else {
        forums.forEach(forum => forum.style.display = "none");
        button.innerText = "Voir plus +";
    }
}

function initScrollButtons() {
    // Sélection de tous les conteneurs défilables
    const containers = document.querySelectorAll('.scrollable-container');

    containers.forEach(container => {
        // Récupère les boutons et le conteneur défilable associés
        const leftButton = container.querySelector('.scroll-button.left');
        const rightButton = container.querySelector('.scroll-button.right');
        const scrollableContent = container.querySelector('.scrollable-content');

        if (!leftButton || !rightButton || !scrollableContent) {
            console.warn('Boutons ou contenu défilable manquants dans un conteneur.');
            return;
        }

        console.log("Conteneur : ", container);
        console.log("Bouton gauche : ", leftButton);
        console.log("Bouton droit : ", rightButton);
        console.log("Contenu défilable : ", scrollableContent);


        // Définit la quantité de défilement
        const scrollAmount = 300;

        // Événements pour les boutons
        leftButton.addEventListener("click", function () {
            scrollableContent.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        rightButton.addEventListener("click", function () {
            scrollableContent.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    });
}





