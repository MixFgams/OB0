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
<?php include 'pagesOutils/header.php'; ?>

<main>
    <section id="forum">
        <h2>Forum de Discussion</h2>

        <div id="nouveau-sujet">
            <h3>Créer un Nouveau Sujet</h3>
            <form action="creer-sujet.php" method="POST">
                <label for="titre">Titre du sujet :</label>
                <input type="text" id="titre" name="titre" placeholder="Entrez le titre..." required>
                <br>
                <label for="contenu">Contenu :</label>
                <textarea id="contenu" name="contenu" rows="5" placeholder="Expliquez votre sujet ici..." required></textarea>

                <button type="submit" class="btn btn-primary">Poster le Sujet</button>
            </form>
        </div>

        <div id="sujets">
            <h3>Discussions Récentes</h3>
            <div class="sujet">
                <h4><a href="discussion.php?id=1">Quel est votre film préféré ?</a></h4>
                <p>Posté par <strong>Utilisateur123</strong> - Dernière réponse : il y a 2 heures</p>
            </div>
            <div class="sujet">
                <h4><a href="discussion.php?id=2">Vos recommandations de séries ?</a></h4>
                <p>Posté par <strong>LecteurPro</strong> - Dernière réponse : il y a 5 heures</p>
            </div>
            <div class="sujet">
                <h4><a href="discussion.php?id=3">Livres à lire cet été</a></h4>
                <p>Posté par <strong>BookLover</strong> - Dernière réponse : hier</p>
            </div>
            <a href="tous-les-sujets.php" class="btn btn-secondary">Voir tous les sujets</a>
        </div>
    </section>
</main>
<script src="communaute.js"></script>

<?php include 'pagesOutils/footer.php'; ?>
</body>
</html>
