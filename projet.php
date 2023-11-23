<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhyla Alina</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style_projet.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Coda&family=Press+Start+2P&family=Silkscreen&display=swap" rel="stylesheet">
</head>
<body>
<?php 
session_start();
$db = new PDO('mysql:host=localhost;dbname=portfolio;port=3306','root','');
$id_projet = $_GET['ID'];
$requete =" SELECT * FROM projets WHERE id = $id_projet";
$stmt=$db->prepare($requete);
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);
?>
    <section>
        <div class="projet_page">
        <div class="haut">
                <h3> Projet_<?php echo  $result['id'] . "_" . $result['nom'] ?></h3>
                <div class="carre">-
                </div>
                <div class="carre">
                    <div class="fichiera"></div>
                    <div class="fichierb"></div>
                </div>
                <div class="carre">X</div>
            </div>
            <img src="<?php echo $result['image'] ?>" alt="" class="image_projet">
        </div>

        <div class="description">
            <h1><?php echo $result['nom'] ?></h1>
            <p><?php echo $result['description'] ?></p>
            <a href="index.php#projets">Retour</a>
        </div>
    </section>
</body>
</html>