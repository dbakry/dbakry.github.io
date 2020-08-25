<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('dalia@elbakry.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From : webmaster@elbakry.fr');
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    } 
    ?>
</body>
</html>