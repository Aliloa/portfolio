<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhyla Alina</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coda&family=Courier+Prime&family=Press+Start+2P&family=Saira:wght@500&family=Silkscreen&display=swap" rel="stylesheet">

<!-- notes:
supprimer les polices inutiles -->
</head>
<?php 
session_start();
$db = new PDO('mysql:host=localhost;dbname=portfolio;port=3306','root','');
$requete =" SELECT * FROM projets";
$stmt=$db->prepare($requete);
$stmt->execute();
$tableauResult=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <nav>
        <div>
            <img src="Images/icones/coeur.png" alt="">
            <a href="">Projets</a>
        </div>
        <div>
            <img src="Images/icones/dessin.png" alt="">
            <a href="">Dessins</a>
        </div>
<a href="" class="alina">ALINA</a>
<div>
    <img src="Images/icones/cv.png" alt="">
    <a href="">CV</a>
</div>
<div>
    <img src="Images/icones/contact.png" alt="">
    <a href="">Conatct</a>
</div>
    </nav>

    <header>
<h1>Zhyla Alina Portfolio</h1>
    </header>
    <main>

        <section>
            <h2>A propos de moi 2</h2>
            <div class="apropos">
                <div class="jeu">
                    <div class="questions">
                        <img src="Images/icones/fleche.png" alt="" class="fleche">
                        <button class="question" value="etudes">■ Mes études?</button>
                        <button class="question" value="skills">■ Mes skills?</button>
                        <button class="question" value="projet">■ Mon projet pro?</button>
                        <button class="question" value="soft">■ Mes soft skills?</button>
                </div>
                    <img src="Images/interview.jpg" alt="" class="mini_jeu">
                    <p class="reponse">Je suis en But mmi, métiers du multimédia et de l'internet. Tout ça. J'aime bien ce que je fais blablablblabla, à compléter...etc...</p>
                </div>
            </div>
        </section>


<section id="projets">
    <h2>Projets</h2>
    <div class="projets">
    <?php
    foreach ($tableauResult as $result){
        echo "<div class=\"projet\">
        <div class=\"haut\">
            <h3>Projet_" . $result['id'] . "_" . $result['nom'] . "</h3>
            <div class=\"carre\">-
            </div>
            <div class=\"carre\">
                <div class=\"fichiera\"></div>
                <div class=\"fichierb\"></div>
            </div>
            <div class=\"carre\">X</div>
        </div>
        <a href=\"projet.php?ID=" . $result['id'] . "\" class=\"image_projet\"><img src=\"" . $result['image'] . "\" alt=\"\" class=\"image_projet\"></a>
</div>";
    }
    ?>
        <div class="projet">
            <div class="haut">
                <h3>Projet_01_portrait_chinois</h3>
                <div class="carre">-
                </div>
                <div class="carre">
                    <div class="fichiera"></div>
                    <div class="fichierb"></div>
                </div>
                <div class="carre">X</div>
            </div>
            <img src="Images/template1.jpg" alt="" class="image_projet">
        </div>

    </div>
</section>
<section>
    <h2>Dessins</h2>
    <div class="dessinspreview">
        <div class="dessins">
            <div class="dessin">
                <div class="haut">
                    <h3>Projet_02_locorunner</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
                <div class="image1"></div>
            </div>
            <div class="dessin">
                <div class="haut">
                    <h3>Projet_02_locorunner</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
                <div class="image"></div>
            </div>
            <div class="dessin"></div>
            <div class="dessin"></div>
            <div class="dessin"></div>
        </div>
        <div class="preview"></div>
    </div>
</section>
    </main>

    <footer>
<h2>Conatct</h2>
<section>
    <p>Mail</p>
    <p>Linkedin</p>
    <p>CV</p>
</section>
    </footer>
    <script src="script.js"></script>
</body>
</html>