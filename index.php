<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" src="img/obLogo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include 'pagesOutils/header.php'?>
        <main>
            <section class="SectionIndex">
                <h2>Forums populaires</h2>
                <div class="forums-container">
                    <div class="forum-item">
                        <img src="img/afficheFilm.jpg" alt="Image du forum">
                        <div class="forum-description">
                            <h3>Titre du forum</h3>
                            <p>Créateur du forum</p>
                            <p>Date de création</p>
                            <p>Description : Lorem Ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="forum-item">
                        <img src="img/afficheFilm.jpg" alt="Image du forum">
                        <div class="forum-description">
                            <h3>Titre du forum</h3>
                            <p>Créateur du forum</p>
                            <p>Date de création</p>
                            <p>Description : Lorem Ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="forum-item">
                        <img src="img/afficheFilm.jpg" alt="Image du forum">
                        <div class="forum-description">
                            <h3>Titre du forum</h3>
                            <p>Créateur du forum</p>
                            <p>Date de création</p>
                            <p>Description : Lorem Ipsum dolor sit amet</p>
                        </div>
                    </div>

                    <div class="forum-item">
                        <img src="img/afficheFilm.jpg" alt="Image du forum">
                        <div class="forum-description">
                            <h3>Titre du forum</h3>
                            <p>Créateur du forum</p>
                            <p>Date de création</p>
                            <p>Description : Lorem Ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="forum-item">
                        <img src="img/afficheFilm.jpg" alt="Image du forum">
                        <div class="forum-description">
                            <h3>Titre du forum</h3>
                            <p>Créateur du forum</p>
                            <p>Date de création</p>
                            <p>Description : Lorem Ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <button id="showMoreBtn">Voir plus +</button>
            </section>


            <section class="SectionIndex">
                <h2>Collections</h2>
                <div class="scrollable-container">
                    <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
                    <div id="ListeCollection" class="scrollable-content">
                        <div class="Collection"><h3>Aventure</h3></div>
                        <div class="Collection"><h3>Aventure</h3></div>
                        <div class="Collection"><h3>Aventure</h3></div>
                        <div class="Collection"><h3>Aventure</h3></div>
                        <div class="Collection"><h3>Aventure</h3></div>
                    </div>
                    <button class="scroll-button right" aria-label="Défiler à droite">▶</button>
                </div>
                <button id="createCollection">+ Créer une collection</button>
            </section>

            <section class="SectionIndex">
                <h2>Recommandations personnalisées</h2>
                <div class="scrollable-container">
                    <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
                    <div class="recommendations-scrollable scrollable-content">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                    </div>
                    <button class="scroll-button right" aria-label="Défiler à droite">▶</button>
                </div>
            </section>


            <section class="SectionIndex">
                <h2>Séries en feu</h2>
                <div class="scrollable-container">
                    <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
                    <div class="recommendations-scrollable scrollable-content">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                    </div>
                    <button class="scroll-button right" aria-label="Défiler à droite">▶</button>
                </div>
            </section>
        </main>
        <script src="script.js"></script>

        <?php include 'pagesOutils/footer.php'?>
    </body>
</html>
