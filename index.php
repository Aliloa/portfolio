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
    <div class="burger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="menu-list">
        <div>
            <img src="Images/icones/coeur.png" alt="">
            <a href="#projets">Projets</a>
        </div>
        <div>
            <img src="Images/icones/dessin.png" alt="">
            <a href="#dessins">Dessins</a>
        </div>
<a href="index.php" class="alina">ALINA</a>
<div>
    <img src="Images/icones/cv.png" alt="">
    <a href="">CV</a>
</div>
<div>
    <img src="Images/icones/contact.png" alt="">
    <a href="#contact">Conatct</a>
</div>
        </div>
        
    </nav>

    <header>
<!-- <h1>Zhyla Alina Portfolio</h1> -->
            <div class="apropos">
            <div class="description_moi">
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
            <h1>Posez-moi une question</h1>
            
    <svg xmlns="http://www.w3.org/2000/svg" width="232" height="30" viewBox="0 0 232 30" fill="none" class="fleche_svg">
     <line x1="2" y1="1.42062e-07" x2="2" y2="16" stroke="#282828" stroke-width="4"/>
      <path d="M231.408 16.4247C232.192 15.6471 232.198 14.3808 231.42 13.5963L218.748 0.812962C217.97 0.0285095 216.704 0.0229798 215.92 0.80061C215.135 1.57824 215.13 2.84456 215.907 3.62901L227.172 14.992L215.809 26.2562C215.024 27.0338 215.019 28.3002 215.796 29.0846C216.574 29.8691 217.84 29.8746 218.625 29.097L231.408 16.4247ZM-0.00873354 16L229.991 17.0043L230.009 13.0044L0.00873354 12L-0.00873354 16Z" fill="#282828"/>
    </svg>

        </div>
        <div class="description_moi desc_dev">
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
            <h1>Développeuse full-stack</h1>
            <p>Au cœur d'une ville animée, où les lumières scintillent comme des étoiles urbaines, la vie suit son cours effréné. Les rues résonnent du bourdonnement constant de l'activité humaine, tandis que les gratte-ciels s'élèvent vers le ciel nocturne, témoins silencieux des aspirations verticales de l'humanité.
            Parmi cette symphonie urbaine, une ruelle sombre et mystérieuse serpente, du temps, et les murs décrépits révèlent autorité de la normalité.</p>
        </div>
                <div class="jeu">
                    <div class="questions">
                        <img src="Images/icones/fleche.png" alt="" class="fleche">
                        <button class="question" value="etudes">■ Mes études?</button>
                        <button class="question" value="skills">■ Mes skills?</button>
                        <button class="question" value="projet">■ Mon projet pro?</button>
                        <button class="question" value="soft">■ Mes soft skills?</button>
                </div>
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
                    <img src="Images/interview.jpg" alt="" class="mini_jeu">
                    <p class="reponse">Je suis en But mmi, métiers du multimédia et de l'internet. Tout ça. J'aime bien ce que je fais blablablblabla, à compléter...etc...</p>
                </div>
            </div>
    </header>
    <main>

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
<section id="dessins">
    <h2>Dessins</h2>
    <div class="dessinspreview">
    <div class="dessin dessin_1">
                <div class="haut">
                    <h3>Logiciels utilisés</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
                <p>Coeur d'une ville animée, où les lumières scintillent comme des étoiles urbaines, la vie suit son cours effréné. Les rues résonnent du bourdonnement constant</p>
            </div>
            <div class="dessin dessin_3">
                <div class="haut">
                    <h3>Texte</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
                <img src="Images/tete.png" alt="">
            </div>
        <div class="preview">
        <div class="haut">
                    <h3>Tente.jpg</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
            <img src="Images/Dessins/1.jpg" alt=""  class="dessin_image">
            <button class="precedent"><img src="Images/icones/fleche.png" alt=""></button>
            <button class="suivant"><img src="Images/icones/fleche.png" alt=""></button>
            <p><strong>01</strong>/21</p>
        </div>
    </div>
</section>
    </main>

    <footer id="contact">
<h2>Conatct</h2>
<section class="contacts">
<div class="contact">
    <div class="haut">
                    <h3>mail</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
                <p>alinaspicot@gmail.com</p>
</div>
<div class="contact">
    <div class="haut">
                    <h3>Linkedin</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
                <p>Lien/icone</p>
</div>
<div class="contact">
    <div class="haut">
                    <h3>Github</h3>
                    <div class="carre">-
                    </div>
                    <div class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
                    </div>
                    <div class="carre">X</div>
                </div>
                <p>Lien/icone</p>
</div>
<a href="#top"><button class="retour">Retour en haut</button></a>
</section>
    </footer>
    <script src="script.js"></script>
</body>
</html>