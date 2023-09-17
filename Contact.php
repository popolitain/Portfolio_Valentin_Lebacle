<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ce site est le Portfolio de valentin lebacle, étudiant en BTS SIO.">
    <title>Contact</title>
    <link rel="icon" type="image/ico" href="files\img\icon.ico">
    <link rel="stylesheet" href="css\Style.css">
    <link rel="stylesheet" href="css\Contact.css">
</head>

<link rel="stylesheet" href="css\nav.css">
<section class="color-1">
    <nav class="cl-effect-1">

        <a class="imgNoEvents" href="index.php"><img src="files\img\logo.png" alt="Valentin Lebacle Logo"></a>

        <hr>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Profile.php">Profil</a></li>
            <li><a href="BTS.php">BTS SIO</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
        <hr>
        <hr>
    </nav>
</section>

<body>
    <br><br><br>
    <h1>Formulaire pour prendre contact</h1>
    <div class="CenterForm">
        <form action="#" method="post">
            <br>

            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Bernard" required>
            <br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required>
            <br>
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Entrez votre message ici" required></textarea>
            <br>
            <button type="submit" onclick="formSubmitted()">Envoyer</button>
            <br>
            <div id="success-message" style="display: none;">
                Votre message a bien été envoyé ! (*Formulaire fatice pour le moment)
            </div>
            <br>
        </form>
    </div>


    <script src="script\form.js"></script>


</body>
<link rel="stylesheet" href="css\footer.css">
<footer class="Footer">
    <div>
        <p> Copyright © 2023, Tous droits réservés | Valentin Lebacle </p>
    </div>
    <div>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Profile.php">Profil</a></li>
            <li><a href="BTS.php">BTS SIO</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
</footer>

</html>