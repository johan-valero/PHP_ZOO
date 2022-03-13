<?php
// include('../models/animaux.php');
// include('../config/bdd.php');
include('../controllers/getAllAll.php');

if (
    !empty($_POST['nom'])
    && !empty($_POST['couleur'])
    && !empty($_POST['origines'])
    && !empty($_POST['race'])
    && !empty($_POST['avatar'])
) {
    $nom = $_POST['nom'];
    $couleur = $_POST['couleur'];
    $origines = $_POST['origines'];
    $race = intval($_POST['race'],10);
    $avatar = $_POST['avatar'];
    
    
    try{
        $animaux = new Animaux();
        $animaux->setNom($nom);
        $animaux->setCouleur($couleur);
        $animaux->setOrigines($origines);
        $animaux->setIdRace($race);
        $animaux->setAvatar($avatar);
        $animaux->createOne();

        include('../views/cardAnimaux.php');
        

    } catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }

}
    
?>