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
    const container = document.querySelector('.recommendations-scrollable');
    const leftButton = document.querySelector('.scroll-button.left');
    const rightButton = document.querySelector('.scroll-button.right');

    const scrollAmount = 300;

    leftButton.addEventListener("click", function () {
        container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    rightButton.addEventListener("click", function () {
        container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
}


