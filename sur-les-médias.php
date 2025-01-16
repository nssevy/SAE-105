<?php
    $couleur_bulle_classe = "rouge";
    $couleur_bordure_classe = "rf";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUR-LES-MEDIAS</title>
    
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css-élève/style-sur-les-médias.css">
    <link rel="stylesheet" href="ressources/css-élève/style-footer.css">
    <link rel="stylesheet" href="ressources/css-élève/style-header-eleve.css?v=<?php echo time(); ?>"">

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal"> 
            <div class="title"; ><!-- Section pour le titre de la page avec class pour la marge droite-->
                 <h1 class="titre-page">Les actualités et les événements important du BUT et de l'IUT de CY Paris Université dans les médias</h1>
            </div>

            <div class="videos"> 
    
                <div>
                        <p>La nouvelle réforme : le BUT MMI</p>      
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/oiEbQF7qfBU?si=BLmDt5_pcFcl7PUW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> 
                </div>

                <div><!-- Deuxième vidéo -->
                        <p>Pourquoi étudier à l'IUT CYU ?</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/SyjF4h2Zb7Q?si=ZcN3SMAYFbwpsZVk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div>
                        <p>Job interview en anglais au département MMI</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/t72pdxpNjyc?si=PUuuYTZ59-Ha7KQT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div><!-- Deuxième vidéo -->
                        <p>L'importance de l'IUT dans les études supérieures</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xD4wshE0hEg?si=mxwbBnHgHfFR-P8X" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
</body>

<footer><!-- pied de page -->
    <?php require_once('./ressources/includes/footer.php'); ?>
</footer>

</html>