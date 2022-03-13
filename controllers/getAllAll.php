<?php
include('../models/animaux.php');
include('../config/bdd.php');
include('../views/getAllView.php');

$animaux = new Animaux();

$animaux->readAllAll();

$allAnimaux = $animaux->readAllAll();

echo '<div class="boxAnimaux"> ';
while($donnees = $allAnimaux->fetch()){
    $avatar = $donnees['avatar'];
    $nom = $donnees['nom'];
    $couleur = $donnees['couleur'];
    $origines = $donnees['origines'];
    $nom_race = $donnees['nom_race'];
    include('../views/cardAnimaux.php');
}
echo '</div>';

?>