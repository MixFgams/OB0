<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/obLogo.png" type="image/x-icon">
        <meta charset="UTF-8">
        <title>LogIn - OB</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="cssExtraPages/connexion.css">
        <script src="script.js"></script>
    </head>

    <body id="connexion-body">
        <?php include "pagesOutils/header.php"?>

        <main id="connexion-main">
            <h1>Connexion</h1>
            <section>
                <form method="post">

                    <div id="connexion-form">
                        
                        <!-- Choix entre pseudo et email-->
                        <div>

                            <button type="button" onclick="connexionPseudo()">Pseudo</button>
                            <button type="button" onclick="connexionEmail()">Email</button>

                        </div>

                        <!-- entrée par pseudo -->
                        <input type="text" name="pseudo" id="connexion-pseudo" placeholder="Pseudo" minlength="4" required>

                        <!-- entrée par email -->
                        <input type="email" name="email" id="connexion-email" placeholder="Email" minlength="4" required>

                        
                        <input type="password" name="mp" id="connexion-mp" placeholder="Mot de passe" minlength="8" maxlength="20" required>
                        <input type="submit" value="connexion">

                        <button type="button" onclick="montrerInscription()">Première fois sur ce site ?</button>
                    </div>

                    <div id="inscription-form">
                        
                        <input type="text" name="pseudo" id="inscription-pseudo" placeholder="Pseudo" minlength="4" required>
                        <input type="email" name="mail" id="inscription-mail" placeholder="Email" minlength="4" required>
                        <input type="password" name="mp" id="inscription-mp" placeholder="Mot de passe" minlength="8" maxlength="20" required>
                        
                        <input type="submit" value="Inscription">

                        <button type="button" onclick="montrerConnexion()">Vous avez déjà un compte ?</button>
                    </div>

                </form>
                <script src="javaScriptExtra/connexion.js"></script>
            </main>
        </section>
        <?php include "pagesOutils/footer.php"?>
    </body>
</html>
