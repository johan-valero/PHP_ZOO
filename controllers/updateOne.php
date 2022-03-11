<?php
    include('../models/animaux.php');
    include('../models/races.php');
    include('../config/bdd.php');

    // include('../models/animaux.php');
    // include('../models/races.php');
    // include('../config/bdd.php');

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
    
    
    if (!empty($_POST['nom'])){
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

        echo "<form method='POST'>\n";
        echo "<label for='couleur'>Quelle est la nouvelle couleur de l'animal ?</label>\n";
        echo"<input type='text' name='couleur' placeholder='couleur de l'animal' id='couleur'>\n";
        echo"<label for='race'>Quelle est la nouvelle race de l'animal?</label>\n";
        echo "<input type='submit' value='valider'> \n";
        echo "</form>";


        echo $_POST['nom'];
        echo $_POST['race'];
        echo $_POST['couleur'];
        
        if (!empty($_POST['nom'])
            && !empty($_POST['couleur'])
            && !empty($_POST['race'])
        ) {
            $name = $_POST['nom'];
            $couleur = $_POST['couleur'];
            $race = intval($_POST['race'],10);
            // echo $_POST['nom'];
            // echo $_POST['race'];
            // echo $_POST['couleur'];
            try{
                $animaux = new Animaux();
                $animaux->setNom($name);
                
                $animaux->readAll();
                $OneAnimal = $animaux->readsingle();

                while($donnees = $OneAnimal->fetch()){
                    $toUpdate = new Animaux();
                    $toUpdate->setNom($name);
                    $toUpdate->setIdAnimal($donnees['id_animal']);
                    $animaux->setCouleur($couleur);
                    $animaux->setIdRace($race);
                    $toUpdate->updateOne();
                    echo "ok";
                    };
                
                } catch(Exception $e){
                    die('Erreur : ' . $e->getMessage());
                };
        };
    };  
?>
