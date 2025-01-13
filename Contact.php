<?php
    $couleur_bulle_classe = "jaune";
    $couleur_bordure_classe="orange";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css-élève/style-contact.css">
    <link rel="stylesheet" href="ressources/css-élève/style-footer.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); 
        
        ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <?php
    $error = $success = '';
    $prenom = $nom = $email = $message = $type = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prenom = trim($_POST["prenom"]);
        $nom = trim($_POST["nom"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);
        $type = isset($_POST["type"]) ? $_POST["type"] : '';

        if (empty($prenom) || empty($nom) || empty($email) || empty($message) || empty($type)) {
            $error = "Veuillez remplir tous les champs du formulaire.";
        } else {
            $success = "Votre message a bien été envoyé. Merci de nous avoir contactés !";
        }
    }
    ?>

    <?php if ($error): ?>
        <div class="error-banner"><?php echo $error; ?></div>
    <?php elseif ($success): ?>
        <div class="success-banner"><?php echo $success; ?></div>
    <?php endif; ?>

    <div class="form-container">
        <h1>Nous contacter</h1>
        <form method="post" action="">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>">

            <label for="nom">Nom de famille</label>
            <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>">

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

            <label for="message">Message</label>
            <textarea id="message" name="message"><?php echo htmlspecialchars($message); ?></textarea>

            <label>Je suis :</label>
            <div class="radio-group">
                <label><input type="radio" name="type" value="Etudiant" <?php echo ($type == 'Etudiant') ? 'checked' : ''; ?>> Étudiant / Étudiante</label>
                <label><input type="radio" name="type" value="Parent" <?php echo ($type == 'Parent') ? 'checked' : ''; ?>> Parent</label>
                <label><input type="radio" name="type" value="Autre" <?php echo ($type == 'Autre') ? 'checked' : ''; ?>> Autre</label>
                <label><input type="radio" name="type" value="Non Precise" <?php echo ($type == 'Non Precise') ? 'checked' : ''; ?>> Je ne souhaite pas le préciser</label>
            </div>

            <button type="submit">ENVOYER</button>
        </form>
    </div>
</body>
</html>
            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
</body>

<footer>
    <?php require_once('./ressources/includes/footer.php'); ?>
</footer>

</html>