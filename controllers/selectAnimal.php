<?php
    include('../models/animaux.php');
    include('../models/races.php');
    include('../config/bdd.php');

    echo "<label for='animal' id='animal'>Séléctionner un animal</label>\n";
    echo "<br>";
    echo "<select name='animal' id='animal' method='POST'>\n";
    echo "<option value=''>--Choississez l'animal--</option>\n";

    $animaux = new Animaux();
    $animaux->readAll();
    $allAnimaux = $animaux->readAll();
    
    $i = 1;
    while($donnees = $allAnimaux->fetch()){
        echo "<option value='".$i."'>".$donnees['nom']."</option>\n";
        $i++;
    }
    echo "</select>\n";


    echo "<label for='race' id='race'>Séléctionner une race</label>\n";
    echo "<br>";
    echo "<select name='race' id='race' method='POST'>\n";
    echo "<option value=''>--Choississez la race--</option>\n";

    $races = new Races();
    $races->readAll();
    $allRaces = $races->readAll();
    
    $i = 1;
    while($donnees = $allRaces->fetch()){
        echo "<option value='".$i."'>".$donnees['nom_race']."</option>\n";
        $i++;
    }
    echo "</select>\n";
?>