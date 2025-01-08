<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum de la Communauté</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssExtraPages/forum.css">
</head>
<body>
<?php
include 'pagesOutils/header.php';

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ob";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['message'])) {
    $message = $conn->real_escape_string($_POST['message']);
    $username = "Admin"; // quand farouk aura fait la connexion a enlever et mettre le vrai nom

    $sql = "INSERT INTO messages (username, content) VALUES ('$username', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Message envoyé avec succès.</p>";
    } else {
        echo "<p>Erreur : " . $conn->error . "</p>";
    }
}
?>

<main>
    <section id="forum">
        <h2>Forum de Discussion</h2>
        <div id="discussion">
            <?php
            // Récupération des messages depuis la base de données
            $sql = "SELECT username, content, created_at FROM messages ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="message">';
                    echo '<h3>' . htmlspecialchars($row['username']) . '</h3>';
                    echo '<p>' . htmlspecialchars($row['content']) . '</p>';
                    echo '<span>' . htmlspecialchars($row['created_at']) . '</span>';
                    echo '</div>';
                }
            } else {
                echo "<p>Aucun message pour le moment.</p>";
            }
            ?>
        </div>
        <form method="post">
            <input name="message" type="text" placeholder="Écrivez votre message ici" required>
            <input name="Envoyer" type="submit" value="Envoyer">
        </form>
    </section>
    <script src="communaute.js"></script>

    <?php
    include 'pagesOutils/footer.php';
    $conn->close();
    ?>
</body>
</html>
