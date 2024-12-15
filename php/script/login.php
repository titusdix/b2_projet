<?php
include_once '../template/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_SPECIAL_CHARS);

    if (!empty($login) && !empty($password)) {
        $sql = $conect->prepare("SELECT mdp FROM users WHERE login = :username LIMIT 1");
        $sql->bindParam(':username', $login, PDO::PARAM_STR);
        $sql->execute();

        $mdp = $sql->fetchColumn();

        if ($mdp && $password === $mdp) {
            header('Location: ../accueil_co.php');
            exit;
        } else {
            header('Location: ../error_coo.php');
            exit;
        }

    } else {
        header('Location: ../error_coo.php');
        exit;
    }
}
?>