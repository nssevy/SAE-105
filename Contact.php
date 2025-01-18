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
      <link rel="stylesheet" href="ressources/css-élève/style-header-eleve.css?v=<?php echo time(); ?>">
</head>

<body>
<section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); 
        
        ?>
        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
         <main>
        <?php
// Gestion des messages de confirmation ou d'erreur
$error = $success = '';
$prenom = $nom = $email = $message = $type = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = trim($_POST["prenom"]);
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $type = isset($_POST["type"]) ? $_POST["type"] : '';

    // Vérification que tous les champs sont remplis
    if (empty($prenom) || empty($nom) || empty($email) || empty($message) || empty($type)) {
        $error = "Veuillez remplir tous les champs.";
    } else {
        $to = "fily.toure3@etu.cyu.fr"; // adresse de reception des messages
        $subject = "Message depuis le site BUT MMI";
        $body = "Prénom : $prenom\nNom : $nom\nEmail : $email\nType : $type\nMessage :\n$message";

        // Envoi de l'e-mail
        if (mail($to, $subject, $body)) {
            $success = "Votre message a bien été envoyé.";
            $prenom = $nom = $email = $message = $type = ''; // Réinitialisation
        } else {
            $error = "L'envoi du message a échoué. Veuillez réessayer.";
        }
    }
}
?>

<!-- Affichage des messages d'erreur ou de confirmation -->

<?php if ($error): ?>
    <div class="error-banner"><?php echo $error; ?></div>
<?php elseif ($success): ?>
    <div class="success-banner"><?php echo $success; ?></div>
<?php endif; ?>

<!-- Contenu principal en tête -->

<h1>Plus d'infos sur la formation ? </h1>
<br>
<h1>Contactez-nous !</h1>
<br>


<p class="texte"> <span class="gras">La formation s'ouvre à tous les bacheliers.</span> Avoir des connaissances en programmation, design ou audiovisuel est un atout, car il faut de la curiosité dans cette formation pluridisciplinaire. 
    <span class="gras">Il est également possible de faire la formation après une formation après une reprise d'études ou une réorientation.</span></p>


<div class="en-ligne">
<h1>Nous contacter en ligne</h1><br>
</div>

<div class="bloc-texte">

        <!-- Formulaire de contact -->
        <form method="POST" action="">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($prenom); ?>" required>

            <label for="nom">Nom de famille</label>
            <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($nom); ?>" required>

            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

            <label for="message">Message</label>
            <textarea id="message" name="message" required><?php echo htmlspecialchars($message); ?></textarea>

            <label>Je suis :</label>
            <div class="radio-group">
                <label><input type="radio" name="type" value="Etudiant" <?php echo ($type == 'Etudiant') ? 'checked' : ''; ?>> Étudiant / Étudiante</label>
                <label><input type="radio" name="type" value="Parent" <?php echo ($type == 'Parent') ? 'checked' : ''; ?>> Parent</label>
                <label><input type="radio" name="type" value="Autre" <?php echo ($type == 'Autre') ? 'checked' : ''; ?>> Autre</label>
         
                </div>
            <button type="submit">ENVOYER</button><br>
        </form>
      

    <!-- Pied de form -->

    <div class="courrier">
        <h1>Nous contacter par courrier</h1><br>

        <p class="texte">IUT de Cergy-Pontoise<br>
        Département Métiers du Multimédia et de l'Internet<br>
        34 Bis Boulevard Henri Bergson<br>
        95200 Sarcelles</p>
    </div>

    </main>
    <footer>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </footer>
</body>

</html>