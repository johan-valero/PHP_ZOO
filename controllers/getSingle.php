<?php
include('../models/animaux.php');
include('../config/bdd.php');
include('../views/getAllview.php');

if (
    !empty($_POST['nom'])
)

{
    $name = $_POST['nom'];
    
    try{
        $animaux = new Animaux();
        $animaux->setNom($name);
        $res = $animaux->readSingleAll();
        echo '<div class="boxAnimaux"> ';
        while($data = $res->fetch()) {
        $avatar = $data['avatar'];
        $nom = $data['nom'];
        $couleur = $data['couleur'];
        $origines = $data['origines'];
        $nom_race = $data['nom_race'];
        include('../views/cardAnimaux.php');
        }
        echo '</div>';
    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    
}
?>