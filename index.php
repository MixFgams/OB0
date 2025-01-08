<!DOCTYPE html>
<html>
<head>
    <link rel="icon" src="img/obLogo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// Connexion à la base de données avec PDO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ob";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Inclusion du fichier header
include 'pagesOutils/header.php';
?>

<main>
    <!-- Section Recherche -->
    <section class="SectionIndex">
        <?php
        if (!empty($_GET['barreRecherche'])) {
            $searchQuery = htmlspecialchars($_GET['barreRecherche']); // Protection contre XSS
            echo "<h1 class='section-title'>Résultats pour : $searchQuery</h1>";

            // Requête SQL avec requête préparée
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

    <!-- Section Forums Populaires -->
    <section class="SectionIndex">
        <h2>Forums populaires</h2>
        <div class="forums-container">
            <?php
            $sql = "SELECT name, author, releaseDate, description 
                    FROM book 
                    ORDER BY releaseDate DESC 
                    LIMIT 5";

            $stmt = $pdo->query($sql);

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="forum-item">';
                    echo '<img src="img/afficheFilm.jpg" alt="Image du forum">';
                    echo '<div class="forum-description">';
                    echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                    echo '<p>Créateur : ' . htmlspecialchars($row['author']) . '</p>';
                    echo '<p>Date de création : ' . htmlspecialchars($row['releaseDate']) . '</p>';
                    echo '<p>Description : ' . htmlspecialchars($row['description']) . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>Aucun forum trouvé.</p>';
            }
            ?>
        </div>
        <button id="showMoreBtn">Voir plus +</button>
    </section>

    <!-- Section Collections -->
    <section class="SectionIndex">
        <h2>Collections</h2>
        <div class="scrollable-container">
            <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
            <div id="ListeCollection" class="scrollable-content">
                <?php
                $sql = "SELECT name FROM collection ORDER BY collectionID ASC";
                $stmt = $pdo->query($sql);

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<div class="Collection"><h3>' . htmlspecialchars($row['name']) . '</h3></div>';
                    }
                } else {
                    echo '<p>Aucune collection trouvée.</p>';
                }
                ?>
            </div>
            <button class="scroll-button right" aria-label="Défiler à droite">▶</button>
        </div>
        <button id="createCollection">+ Créer une collection</button>
    </section>

    <!-- Section Recommandations -->
    <section class="SectionIndex">
        <h2>Recommandations personnalisées</h2>
        <div class="scrollable-container">
            <button class="scroll-button left" aria-label="Défiler à gauche">◀</button>
            <div class="recommendations-scrollable scrollable-content">
                <?php
                $sql = "SELECT name FROM book WHERE genreID = 1 LIMIT 7";
                $stmt = $pdo->query($sql);

                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '<img src="img/afficheFilm.jpg" alt="' . htmlspecialchars($row['name']) . '">';
                    }
                } else {
                    echo '<p>Aucune recommandation trouvée.</p>';
                }
                ?>
            </div>
            <button class="scroll-button right" aria-label="Défiler à droite">▶</button>
        </div>
    </section>
</main>

<?php
// Inclusion du fichier footer
include 'pagesOutils/footer.php';
?>
<script src="script.js"></script>

</body>
</html>
