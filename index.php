
<?php
$host = 'localhost';
$dbname = 'ob';
$username = 'root';
$password = ''; // Par défaut pour XAMPP/WAMP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>




<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Accueil Ob</title>
        <link rel="icon" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
    </head>
    <?php include 'pagesOutils/header.php'?>
    <body>
        <main>
            <section class="SectionIndex">
                <?php
                if (!empty($_GET['barreRecherche'])) {
                    $searchQuery = htmlspecialchars($_GET['barreRecherche']); // Protection contre XSS
                    echo "<h1 class='section-title'>Résultats pour : $searchQuery</h1>";

                    // Requête SQL avec requêtes préparées
                    $sql = "SELECT ContentID, name, description, production, director 
                FROM film 
                WHERE name LIKE :searchQuery";

                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(['searchQuery' => "%$searchQuery%"]);

                    // Affichage des résultats
                    if ($stmt->rowCount() > 0) {
                        echo "<div class='recommendations-scrollable scrollable-content'>";
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            $id = $row['ContentID'];
                            echo "<div class='recommendation-card'>
                          <h2 class='recommendation-title'>" . htmlspecialchars($row["name"]) . "</h2>
                          <p class='recommendation-description'>" . htmlspecialchars($row["description"]) . "</p>
                          <p class='recommendation-info'>Production : " . htmlspecialchars($row["production"]) . "</p>
                          <p class='recommendation-info'>Réalisateur : " . htmlspecialchars($row["director"]) . "</p>
                          <a class='recommendation-link' href='afficherFilm.php?id=$id'>Voir plus</a>
                      </div>";
                        }
                        echo "</div>";
                    } else {
                        echo "<p class='no-results'>Aucun résultat trouvé pour : $searchQuery. Essayez une autre recherche.</p>";
                    }
                }
                ?>
            </section>

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
