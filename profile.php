<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="img/obLogo.png   " type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="cssExtraPages/profiles.css">
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



            <div id="collection">
                <section>
                <h2>Collection</h2>

                    <h3 id="aventure">Aventure</h3>
                </section>
            </div>

            <div id="film">
                <section>
                <h2>Film</h2>
               <a href="pageContenu.php"> <img src="img/naruto.jpg" alt="image film"></a>

                </section>
            </div>

            <div id="serie">
                <section>
                <h2>serie</h2>

                    <a href="pageContenu.php"><img src="img/twd.webp" alt="image serie"></a>
                </section>

            </div>

            <div id="livre">
                <section>
                <h2>livre</h2>

                    <img src="" alt="image livre">
                </section>

            </div>



            
        </main>
    
        <?php include 'pagesOutils/footer.php'?>
    </body>
</html>
