<?php
    include('../models/animaux.php');
    include('../models/races.php');
    include('../config/bdd.php');

// ------------------select animal----------------------------


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
    echo"<input type='text' name='nom' placeholder='Nom de l'animal' id='nom'>\n";


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

    echo "<label for='couleur'>Quelle est la nouvelle couleur de l'animal ?</label>\n";
    echo"<input type='text' name='couleur' placeholder='couleur de l'animal' id='couleur'>\n";

// ------------------select origines----------------------------

    echo "<label for='origines'>Quelle est la nouvelle origine de l'animal ?</label>\n";
    echo"<input type='text' name='origines' placeholder='Origine de l'animal' id='origines'>\n";

// ------------------select avatar----------------------------

    echo "<label for='avatar'>Avatar</label>\n";
    echo"<input type='text' name='avatar' placeholder='avatar de l'animal' id='avatar'>\n";

// ------------------ valider les info du formulaire----------------------------

    echo "<button type='submit'>Valider</button>";
    echo "</form>";
    
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
            
        } catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
    }

    // if (!empty($_GET['nom'])){
    //     echo <form>
    //     echo "<label for='race' id='race'>Séléctionner une race</label>\n";
    //     echo "<br>";
    //     echo "<select name='race' id='race' method='POST'>\n";
    //     echo "<option value=''>--Choississez la race--</option>\n";

    //     $races = new Races();
    //     $races->readAll();
    //     $allRaces = $races->readAll();
        
    //     $i = 1;
    //     while($donnees = $allRaces->fetch()){
    //         echo "<option value='".$i."'>".$donnees['nom_race']."</option>\n";
    //         $i++;
    //     }
    //     echo "</select>\n";

    //     echo "<form method='POST'>\n";
    //     echo "<label for='couleur'>Quelle est la nouvelle couleur de l'animal ?</label>\n";
    //     echo"<input type='text' name='couleur' placeholder='couleur de l'animal' id='couleur'>\n";
    //     echo"<label for='race'>Quelle est la nouvelle race de l'animal?</label>\n";
    //     echo "<input type='submit' value='valider'> \n";
    //     echo "</form>";


    //     echo $_POST['nom'];
    //     echo $_POST['race'];
    //     echo $_POST['couleur'];
        
    //     if (!empty($_POST['nom'])
    //         && !empty($_POST['couleur'])
    //         && !empty($_POST['origines'])
    //         && !empty($_POST['race'])
    //         && !empty($_POST['avatar'])
    //     ) {
    //         $name = $_POST['nom'];
    //         $couleur = $_POST['couleur'];
    //         $origines = $_POST['origines'];
    //         $race = intval($_POST['race'],10);
    //         $avatar = $_POST['avatar'];
    //         // echo $_POST['nom'];
    //         // echo $_POST['race'];
    //         // echo $_POST['couleur'];
    //         try{
    //             $animaux = new Animaux();
    //             $animaux->setNom($name);
                
    //             $animaux->readAll();
    //             $OneAnimal = $animaux->readsingleAll();

    //             while($donnees = $OneAnimal->fetch()){
    //                 $toUpdate = new Animaux();
    //                 $toUpdate->setNom($name);
    //                 $toUpdate->setIdAnimal($donnees['id_animal']);
    //                 $animaux->setCouleur($couleur);
    //                 $animaux->setIdRace($race);
    //                 $toUpdate->updateOne();
    //                 echo "ok";
    //                 };
                
    //             } catch(Exception $e){
    //                 die('Erreur : ' . $e->getMessage());
    //             };
    //     };
    // };  
?>
