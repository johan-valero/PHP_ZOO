<?php
    include('../models/animaux.php');
    include('../models/races.php');
    include('../config/bdd.php');

// ------------------select animal----------------------------

    echo"<div class=containerUpOne>";
    echo"<div class=UpOneFormulaire>";
    echo "<form id=form_text method='GET'>";
    echo "<label for='idAnimal'>Séléctionner un animal</label>\n";
    echo "<br>";
    echo "<select name='idAnimal' id='idAnimal'>\n";
    echo "<option value=''>--Choississez l'animal--</option>\n";

    $animaux = new Animaux();
    $allAnimaux = $animaux->readAllAll();

    while($donnees = $allAnimaux->fetch()){
        echo "<option value='". $donnees['id_animal'] . "'>".$donnees['nom']."</option>\n";
    }

    echo "</select>\n";
// ----------------------------------------------------

    echo "<label for='nom'>Nouveau nom</label>\n";
    echo"<input type='text' name='nom' placeholder='Name of the animal' id='nom'>\n";


// ------------------select race----------------------------

    echo "<label for='race'>Séléctionner une race</label>\n";
    echo "<br>";
    echo "<select name='idRace' id='idRace'>\n";
    echo "<option value=''>--Choississez la race--</option>\n";

    $races = new Races();
    $allRaces = $races->readAll();

    while($donnees = $allRaces->fetch()){
        echo "<option value='". $donnees['id_race'] . "'>".$donnees['nom_race']."</option>\n";
    }
    echo "</select>\n";

// ------------------select couleur----------------------------

    echo "<label for='couleur'>La nouvelle couleur de l'animal:</label>\n";
    echo"<input type='text' name='couleur' placeholder='Color of the animal' id='couleur'>\n";

// ------------------select origines----------------------------

    echo "<label for='origines'>La nouvelle origine de l'animal:</label>\n";
    echo"<input type='text' name='origines' placeholder='Origine of the animal ' id='origines'>\n";

// ------------------select avatar----------------------------

    echo "<label for='avatar'>La nouvelle image:</label>\n";
    echo"<input type='text' name='avatar' placeholder='Avatar of the animal' id='avatar'>\n";

// ------------------ valider les info du formulaire----------------------------

    echo "<button type='submit'>Valider</button>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    
    if(
        !empty($_GET['idAnimal'])
        && !empty($_GET['nom'])
        && !empty($_GET['couleur'])
        && !empty($_GET['origines'])
        && !empty($_GET['avatar'])   
        && !empty($_GET['idRace'])


    ){      
        $idAnimal = $_GET['idAnimal'];
        $nom = $_GET['nom'];
        $couleur = $_GET['couleur'];
        $origines = $_GET['origines'];
        $avatar = $_GET['avatar'];
        $idRace = intval($_GET['idRace'],10);
        
        try{
            
            $animaux = new Animaux();
            $animaux->setIdAnimal($idAnimal);
            $animaux->setNom($nom);
            $animaux->setCouleur($couleur);
            $animaux->setOrigines($origines);
            $animaux->setIdRace($idRace);
            $animaux->setAvatar($avatar);

            $oneAnimal = $animaux->updateOne();
            echo "<h6>Vous venez de modifier " .$nom. " qui est de couleur " .$couleur. 
                    " ses origines sont " .$origines. " félicitation !</h6>" ;
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }
?>
