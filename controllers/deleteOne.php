<?php

include('../models/animaux.php');
include('../config/bdd.php');
include('../views/deleteOne.php');

if (!empty($_POST['name'])){

    $name = $_POST['name'];
    $animaux = new Animaux();
    $animaux->setNom($name);
    
    $OneAnimal = $animaux->readSingleAll();
    echo '<div class="boxAnimaux"> ';
    while($donnees = $OneAnimal->fetch()) {
        $toDelete = new Animaux();
        $toDelete->setIdAnimal($donnees['id_animal']);
        $avatar = $donnees['avatar'];
        $nom = $donnees['nom'];
        $couleur = $donnees['couleur'];
        $origines = $donnees['origines'];
        $nom_race = $donnees['nom_race'];

        include('../views/cardAnimaux.php');
        $toDelete->deleteOne();
        echo '<h1 class="messageDelete">Votre '. $donnees['nom']. ' a bien été supprimé !</h1>';
    };
    echo '</div>';

}

?>