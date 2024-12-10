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
            <section id="cadre-contenu">
                <div id="contenu">
                    <div id="info-contenu">
                        <?php //TODO remplacer les placeholders?>
                        <h3>Titre</h3>
                        <p id="titre"></p>
                        
                        <h3>Type de Contenu</h3>
                        <p id="type-contenu"></p>

                        <h3>Date de Sortie</h3>
                        <p id="date-sortie"></p>

                        <h3>Auteur</h3>
                        <p id="auteur"></p>

                        <h3>Nombre total de volumes</h3>
                        <p id="nb-volumes"></p>
                    </div>
                    <img src="./img/AizenBackground.png" alt="chouine" class="image-contenu">
                </div>
                <div id="description-grid">
                    <div class="blue-box" id="collection">
                        <label id="checkbox-grid">
                            <div class="checkmark">
                                <input type="checkbox" id="deja-vu">
                                <div class="checkmark-inside"></div>
                            </div>
                            <p>Déjà Vu</p>
                        </label>
                        <p>Ajouter à une collection</p>
                        <button type="button" id="ajouter-collection">
                            AJOUTER
                        </button>
                    </div>
                    <div id="description-div">
                        <h3>Description</h3>
                        <p id="description">test test test</p>
                    </div>
                </div>
                <h3>Commentaires</h3>
                <div id="Commentaires">
                    <div id="liste-commentaire">
                        <div class="blue-box">
                            <div class="commentaire-header">
                                <img src="./img/pdp.jpg"/ class="pp-commentaire">
                                <a href="">
                                    <p>xXYutaFanXx</p>
                                </a>
                            </div>
                            <p class="commentaire-text">
                                bonjour
                            </p>
                        </div>
                        <div class="blue-box">
                            <div class="commentaire-header">
                                <img src="./img/pdp.jpg"/ class="pp-commentaire">
                                <a href="">
                                    <p>AigriDeService</p>
                                </a>
                            </div>
                            <p class="commentaire-text">
                                Il s'agirait peut-être de savoir coder
                            </p>
                        </div>
                    </div>
                </div>
                <a href="" class="texte-page-contenue">Voir Plus +</a>
            </div>
            </section>

            <section id="volumes">
                <h2>Volumes</h2>
            </section>
        </main>
        <script src="script.js"></script>
    
        <?php include 'pagesOutils/footer.php'?>
    </body>
</html>