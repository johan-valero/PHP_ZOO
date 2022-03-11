<?php

include('../models/animaux.php');
include('../config/bdd.php');
include('../views/deleteOne.php');

if (!empty($_POST['name'])){

    $name = $_POST['name'];
    $animaux = new Animaux();
    $animaux->setNom($name);
    
    $OneAnimal = $animaux->readSingle();
    while($donnees = $OneAnimal->fetch()) {
        $toDelete = new Animaux();
        $toDelete->setIdAnimal($donnees['id_animal']);
        var_dump($donnees);
        echo $donnees['id_animal'] . "<br>";
        echo $donnees['nom'] . "<br>";
        $toDelete->deleteOne();
        echo "ok";
    };

}

?>