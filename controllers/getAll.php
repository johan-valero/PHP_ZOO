<?php
include('../models/animaux.php');
include('../config/bdd.php');
include('../views/zoo.php');

$animaux = new Animaux();

$animaux->readAll();

$allAnimaux = $animaux->readAll();

//echo 'Nous avons dans notre zoo: <br>';
echo '<div class="mabox"> ';
while($donnees = $allAnimaux->fetch()){
    
    echo '<h5>'.$donnees['nom'].' de couleur '.$donnees['couleur'].'</h5>';
}
echo '</div>';

?>