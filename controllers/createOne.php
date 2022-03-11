<?php
include('../models/animaux.php');
include('../config/bdd.php');
include('../views/zoo.php');

if (
    !empty($_POST['nom'])
    && !empty($_POST['couleur'])
    && !empty($_POST['race'])
) {
    $name = $_POST['nom'];
    $couleur = $_POST['couleur'];
    $race = intval($_POST['race'],10);
    
    
    try{
        $animaux = new Animaux();
        $animaux->setNom($name);
        $animaux->setCouleur($couleur);
        $animaux->setIdRace($race);
        $animaux->createOne();
        
    } catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
}
    
?>