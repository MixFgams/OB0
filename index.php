<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" src="img/obLogo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
        <?php include 'pagesOutils/header.php'?>
        <main>
            <section class="SectionIndex">
                <h2>Forums populaires</h2>
                <div>
                    <img src="" alt="Image du forum">
                    <h3>Titre du forum</h3>
                    <p>Créateur du forum</p>
                    <p>Date de création</p>
                    <p>Description : Lorem Ipsum dolor sit amet</p>
                </div>
                <button>Voir plus + (Faut au moins 2 forum affiché ou plus)</button>
            </section>

            <section class="SectionIndex">
                <h2>Collections</h2>
                <div class="Collection">
                    <h3>Nom de la collection</h3>
                </div>
                <div id="CreerCollection">
                    <h3>+ Créer une collection</h3>
                </div>
            </section>

            <section class="SectionIndex">
                <h2>Recommandations personnalisés</h2>
                <div>
                    <img src="" alt="Image de la recommandation">
                </div>
            </section>

            <section class="SectionIndex">
                <h2>Séries en feu</h2>
                <div>
                    <img src="" alt="Image de la recommandation">
                </div>
            </section>
        </main>
    
        <?php include 'pagesOutils/footer.php'?>
    </body>
</html>