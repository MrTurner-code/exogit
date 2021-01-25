<?php
if (isset($_GET["pseudo"]) && isset($_GET["mdp"])) {
    $file = fopen('db.txt', 'r');
    while (!feof($file)) {
        $line = fgets($file);

        list($user, $pass) = explode(';', $line);

        if (trim($user) == $_POST['name'] && trim($pass) == $_POST['password']) {
            header('location: login-reussi.html');
        }else {
            header('location:index.php?echec=true');
        }
    }
    fclose($file);
} 
