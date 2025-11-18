<?php

include 'header.php';
include 'bdd.php';
$bdd = connexion();


if (
    empty($_POST['titre'])
    || empty($_POST['artiste'])
    || empty($_POST['description'])
    || empty($_POST['image'])
    || strlen($_POST['description']) < 3
    || !filter_var($_POST['image'], FILTER_VALIDATE_URL)
) {
    header('Location: form.php?erreur=true');
    exit;
} else {

    $titre = htmlspecialchars($_POST['titre']);
    $artiste = htmlspecialchars($_POST['artiste']);
    $description = htmlspecialchars($_POST['description']);
    $image = $_POST['image'];
}


$requete = $bdd->prepare('INSERT INTO oeuvres (titre, artiste, description, image) VALUES (?, ?, ?, ?)');
$requete->execute([$titre, $artiste, $description, $image]);

header('Location: oeuvre.php?id=' . $bdd->lastInsertId());

include 'footer.php';
