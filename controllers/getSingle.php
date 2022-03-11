<?php
include('../models/animaux.php');
include('../config/bdd.php');
include('../views/zoo.php');

if (
    !empty($_POST['nom'])
)

{
    $name = $_POST['nom'];
    
    try{
        $animaux = new Animaux();
        $animaux->setNom($name);
        $res = $animaux->readSingle();
        while($data = $res->fetch()) {
            echo '<h5>'.$data['nom'].' de couleur '.$data['couleur'].'</h5>';
}

    }catch(Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    
}
?>
