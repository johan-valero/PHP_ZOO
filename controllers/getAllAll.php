<?php
include('../models/animaux.php');
include('../config/bdd.php');
include('../views/getAllView.php');

$animaux = new Animaux();

$animaux->readAllAll();

$allAnimaux = $animaux->readAllAll();

echo '<div class="boxAnimauxRaces"> ';
while($donnees = $allAnimaux->fetch()){
    
    // echo '<h5 class="animation a3">'.$donnees['nom'] . '<br>'.  'Couleur : ' . $donnees['couleur'] . '<br>' . "Races : " . $donnees['nom_race'] . '<br>' . "Origines : " . $donnees['origines'] . $donnees['image'] . '</h5><br>';
    echo '<div class="itemsAnimauxRaces"> ';
        echo '<h4 class="animation a3 nomAnimal">'. $donnees['nom']. '</h4>'.
            '<h4 class="animation a3 categorieAnimale"> Couleur : </h4>'. '<h5 class="infoAnimaux animation a3">'. $donnees['couleur']. '</h5>' . 
            '<h4 class="animation a3 categorieAnimale"> Origines : </h4>'. '<h5 class="infoAnimaux animation a3">'. $donnees['origines']. '</h5>' . 
            '<h4 class="animation a3 categorieAnimale"> Races : </h4>'. '<h5 class="infoAnimaux animation a3">'. $donnees['nom_race']. '</h5>' . 
            '<img class="imageAnimaux" src='. $donnees['image'] . '>' . '<br>';
    echo '</div>';
}
echo '</div>';

?>