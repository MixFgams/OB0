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
        <div id="discussion">
            <h3>Admin</h3>
            <p>Salut tout le monde</p>
        </div>
        <form method="post">
            <input name="message" type="text">
            <input name="Envoyer" type="submit">
        </form>
    </section>
<script src="communaute.js"></script>

<?php include 'pagesOutils/footer.php'; ?>
</body>
</html>
