<?php
if (isset($_POST["pseudo"]) && isset($_POST["mdp"])) {
    $file = fopen('db.txt', 'r');
    $good = false;
    while (!feof($file)) {
        $line = fgets($file);

        list($user, $pass) = explode(';', $line);

        if (trim($user) == $_POST['name'] && trim($pass) == $_POST['password']) {
            header('location: login-reussi.html');
        }
    }
    fclose($file);
} else {
    header('location:index.php?echec=true');
}
