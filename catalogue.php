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
<html>
    <head>
        <link rel="icon" src="img/obLogo.png" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body id="catalogue">
        <?php include 'pagesOutils/header.php'?>
        <section>
            <form method="GET" action="" id="searchBarCatalogue">
                <input type="text" name="searchBarCatalogue" placeholder="Rechercher un article">
                <button type="submit">Rechercher</button>
            </form>
        </section>
        <main>
            <section id="sortFilter">
                <h3>Tris</h3>
                <div>
                    <input type="radio" name="alphabet"/>
                    <label for="alphabet">Alphabétique</label>
                </div>
            </section>
            <section class="catalogueDisplay">
                <?php
                if (!empty($_GET['searchBarCatalogue'])) {
                    $searchQuery = htmlspecialchars($_GET['searchBarCatalogue']); // Protection contre XSS
                    echo "<h1 class='section-title'>Résultats pour : $searchQuery</h1>";
                // Requête SQL avec requêtes préparées
                }
                else {
                    $searchQuery = "" ;
                }
                $sql = "SELECT ContentID, name, description, production, director 
                FROM film 
                WHERE name LIKE :searchQuery";

                $stmt = $pdo->prepare($sql);
                $stmt->execute(['searchQuery' => "%$searchQuery%"]);

                // Affichage des résultats
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $id = $row['ContentID'];
                        $contentName = $row['name'] ;
                        echo "<div class=catalogueContent>
                                <a href=PageContenu.php?contentId=$id>
                                    <h3>$contentName</h3>
                                    <img src=\"img/naruto.jpg\" class=\"catalogueImages content-image\" alt=\"Image Catalogue\">
                                </a>
                            </div>
                        " ;
                    }
                } else {
                    echo "<p class='no-results'>Aucun résultat trouvé pour : $searchQuery. Essayez une autre recherche.</p>";
                }
                ?>
            </section>
        </main>
        <?php include 'pagesOutils/footer.php'?>
        <script src="script.js"></script>
    </body>
</html>