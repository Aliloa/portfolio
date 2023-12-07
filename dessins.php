<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhyla Alina</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style_dessins.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Coda&family=Courier+Prime&family=Press+Start+2P&family=Saira:wght@500&family=Silkscreen&display=swap" rel="stylesheet">
</head>
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
<?php 
session_start();
$db = new PDO('mysql:host=localhost;dbname=portfolio;port=3306','root','');
$requete =" SELECT * FROM dessins";
$stmt=$db->prepare($requete);
$stmt->execute();
$tableauResult=$stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="container">
<div class="haut">
                    <h3>Dessins.jpg</h3>
                    <button class="carre">-
                    </button>
                    <button class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
</button>
                    <button class="carre">X</button>
                </div>
    <div class="miniatures">
    <?php
    foreach ($tableauResult as $result){
        echo "<div class=\"container_miniature\">
        
        <a class=\"image_projet miniature\"><img src=\"Images/Dessins/" . $result['image'] . "\" alt=\"\" 
        class=\"image_projet\" data-id=\"" . $result['id'] . "\"></a>
        <p>". $result['id'] .".jpg</p>
</div>";
    }
    ?>
    </div>
    <a href="index.php#dessins"><button class="retour">Retour</button></a>
</section>
<section id="dessins" class="dessins">
    <div class="dessinspreview">
        <div class="preview">
        <div class="haut">
                    <h3>Grande_image.jpg</h3>
                    <button class="carre">-
                    </button>
                    <button class="carre">
                        <div class="fichiera"></div>
                        <div class="fichierb"></div>
</button>
                    <button class="carre">X</button>
                </div>
            <img src="Images/Dessins/1.jpg" alt=""  class="dessin_image">
            <button class="precedent"><img src="Images/icones/fleche.png" alt=""></button>
            <button class="suivant"><img src="Images/icones/fleche.png" alt=""></button>
            <p><strong>01</strong>/21</p>
        </div>
    </div>
</section>
<script src="script.js"></script>
<script src="script_dessins.js"></script>
</body>
</html>