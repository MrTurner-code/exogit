<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Connexion </title>
    <link rel="stylesheet" href="style.css">
</head>

<body> <?php if (isset($_GET['echec'])) {
            if (!$_GET['echec']) {?>
                <div class="echec">
                <p>Nous n'avons pas réussi a vous connecter, veuilez réessayer</p>
                </div>
            <?php }
        } ;?>
    <h1>Connexion</h1>
    <form action="verif.php" method="POST">
        <div class="user">
            <label for=""> Votre nom d'utilisateur: </label>
            <input name="pseudo" type="text">
        </div>

        <div class="mdp">
            <label for="">Votre mot de passe: </label>
            <input type="password" name="mdp" id="">
        </div>

        <div class="btn-valid">
            <button type="submit">Se connecter</button>
        </div>
    </form>
</body>

</html>