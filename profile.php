<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/obLogo.png   " type="image/x-icon">
        <link rel="stylesheet" href="style.css">

        <script src="script.js"></script>
    </head>

    <body>
        <?php include 'pagesOutils/header.php'?>
        <main>
            <div id="user">
                <section>
                <img src="img\pdp.jpg" alt="photo de l utilisateur">
                    <div id="detail-user">
                <h3>Nom</h3>
                           <p>date</p>
                           <p>niveau</p>
                        <div id="progress-container">
                            <div id="progress-bar"></div>
                        </div>
                    </div>
                </section>
            </div>

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
                    <button id="showMoreBtn">+ Créer une collection</button>
            </section>

            <section class="SectionIndex">
                <h2>Film</h2>
                <div class="scrollable-container">
                    <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
                    <div class="recommendations-scrollable scrollable-content">
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
                <h2>Série</h2>
                <div class="scrollable-container">
                    <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
                    <div class="recommendations-scrollable scrollable-content">
                        <img src="img/afficheFilm.jpg" alt="Image de la recommandation">
                        <img src="img/twd.webp" alt="Image de la recommandation">
                        <img src="img/twd.webp" alt="Image de la recommandation">
                        <img src="img/twd.webp" alt="Image de la recommandation">
                        <img src="img/twd.webp" alt="Image de la recommandation">
                        <img src="img/twd.webp" alt="Image de la recommandation">
                        <img src="img/twd.webp" alt="Image de la recommandation">
                        <img src="img/twd.webp" alt="Image de la recommandation">
                    </div>
                    <button class="scroll-button right" aria-label="Défiler à droite">▶</button>
                </div>
            </section>

            <section class="SectionIndex">
                <h2>Livres</h2>
                <div class="scrollable-container">
                    <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
                    <div class="recommendations-scrollable scrollable-content">
                        <img src="img/naruto.jpg" alt="Image de la recommandation">
                        <img src="img/naruto.jpg" alt="Image de la recommandation">
                        <img src="img/naruto.jpg" alt="Image de la recommandation">
                        <img src="img/naruto.jpg" alt="Image de la recommandation">
                        <img src="img/naruto.jpg" alt="Image de la recommandation">
                        <img src="img/naruto.jpg" alt="Image de la recommandation">
                    </div>
                    <button class="scroll-button right" aria-label="Défiler à droite">▶</button>
                </div>
            </section>
        </main>
    
        <?php include 'pagesOutils/footer.php'?>
    </body>
</html>
