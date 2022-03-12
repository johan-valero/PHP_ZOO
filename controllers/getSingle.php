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
        while($data = $res->fetch()) {
            echo '<div class="boxAnimauxRaces"> ';    
                echo '<div class="itemsAnimauxRaces"> ';
                    echo '<h4 class="animation a3 nomAnimal">'. $data['nom']. '</h4>'.
                        '<h4 class="animation a3 categorieAnimale"> Couleur : </h4>'. '<h5 class="infoAnimaux animation a3">'. $data['couleur']. '</h5>' . 
                        '<h4 class="animation a3 categorieAnimale"> Origines : </h4>'. '<h5 class="infoAnimaux animation a3">'. $data['origines']. '</h5>' . 
                        '<h4 class="animation a3 categorieAnimale"> Races : </h4>'. '<h5 class="infoAnimaux animation a3">'. $data['nom_race']. '</h5><br>';
                echo '</div>';
            echo '</div>';
}

    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    
}
?>